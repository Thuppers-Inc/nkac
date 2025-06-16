/**
 * Modern Carousel JavaScript - Finnexia
 * Enhanced carousel functionality with smooth transitions and modern effects
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // Initialize modern carousel
    initModernCarousel();
    
    // Parallax effect for shapes
    initParallaxShapes();
    
    // Smooth scroll indicator
    initScrollIndicator();
    
    function initModernCarousel() {
        const carousel = document.getElementById('modernCarousel');
        const indicators = document.querySelectorAll('.modern-indicators .indicator');
        const slides = document.querySelectorAll('.carousel-item');
        
        if (!carousel) return;
        
        // Initialize first indicator as active
        if (indicators.length > 0) {
            indicators[0].classList.add('active');
            const firstProgressBar = indicators[0].querySelector('.progress-bar');
            if (firstProgressBar) {
                setTimeout(() => {
                    firstProgressBar.style.animation = 'progressFill 6s linear';
                }, 500);
            }
        }
        
        // Enhanced slide transition
        carousel.addEventListener('slide.bs.carousel', function(e) {
            const activeSlide = slides[e.from];
            const nextSlide = slides[e.to];
            
            // Reset and animate indicators
            indicators.forEach((indicator, index) => {
                indicator.classList.remove('active');
                const progressBar = indicator.querySelector('.progress-bar');
                if (progressBar) {
                    progressBar.style.animation = 'none';
                    progressBar.style.left = '-100%';
                }
                
                if (index === e.to) {
                    indicator.classList.add('active');
                    setTimeout(() => {
                        progressBar.style.animation = 'progressFill 6s linear';
                    }, 200);
                }
            });
            
            // Add slide out animation to current slide
            if (activeSlide) {
                activeSlide.classList.add('slide-out');
            }
            
            // Add slide in animation to next slide
            if (nextSlide) {
                nextSlide.classList.add('slide-in');
            }
        });
        
        carousel.addEventListener('slid.bs.carousel', function(e) {
            // Clean up animation classes
            slides.forEach(slide => {
                slide.classList.remove('slide-out', 'slide-in');
            });
        });
        
        // Click handlers for indicators with proper Bootstrap carousel control
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active from all indicators
                indicators.forEach(ind => ind.classList.remove('active'));
                
                // Add active to clicked indicator
                this.classList.add('active');
                
                // Navigate to specific slide
                $(carousel).carousel(index);
            });
        });
    }
    
    function initParallaxShapes() {
        const shapes = document.querySelectorAll('.shape');
        let mouseX = 0;
        let mouseY = 0;
        
        document.addEventListener('mousemove', function(e) {
            mouseX = (e.clientX - window.innerWidth / 2) / window.innerWidth;
            mouseY = (e.clientY - window.innerHeight / 2) / window.innerHeight;
            
            shapes.forEach((shape, index) => {
                const speed = (index + 1) * 0.5;
                const translateX = mouseX * speed * 20;
                const translateY = mouseY * speed * 20;
                
                shape.style.transform = `translate(${translateX}px, ${translateY}px)`;
            });
        });
    }
    
    function initScrollIndicator() {
        const scrollIndicator = document.querySelector('.scroll-indicator');
        
        if (scrollIndicator) {
            scrollIndicator.addEventListener('click', function() {
                const nextSection = document.querySelector('.modern-carousel').nextElementSibling;
                if (nextSection) {
                    nextSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        }
    }
    
    // Auto-play management
    let autoplayTimer;
    let isAutoplayActive = true;
    
    function startAutoplay() {
        if (!isAutoplayActive) return;
        
        autoplayTimer = setInterval(function() {
            $('#modernCarousel').carousel('next');
        }, 6000);
    }
    
    function stopAutoplay() {
        if (autoplayTimer) {
            clearInterval(autoplayTimer);
        }
    }
    
    // Pause autoplay on hover and interaction
    const carousel = document.getElementById('modernCarousel');
    if (carousel) {
        carousel.addEventListener('mouseenter', function() {
            stopAutoplay();
            isAutoplayActive = false;
        });
        
        carousel.addEventListener('mouseleave', function() {
            isAutoplayActive = true;
            startAutoplay();
        });
        
        // Pause autoplay when user interacts with indicators
        const indicators = document.querySelectorAll('.modern-indicators .indicator');
        indicators.forEach(indicator => {
            indicator.addEventListener('click', function() {
                stopAutoplay();
                isAutoplayActive = false;
                
                // Restart autoplay after 10 seconds
                setTimeout(() => {
                    isAutoplayActive = true;
                    startAutoplay();
                }, 10000);
            });
        });
        
        // Start autoplay initially
        startAutoplay();
    }
    
    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (!carousel) return;
        
        switch(e.key) {
            case 'ArrowLeft':
                e.preventDefault();
                stopAutoplay();
                $('#modernCarousel').carousel('prev');
                setTimeout(() => startAutoplay(), 5000);
                break;
            case 'ArrowRight':
                e.preventDefault();
                stopAutoplay();
                $('#modernCarousel').carousel('next');
                setTimeout(() => startAutoplay(), 5000);
                break;
        }
    });
    
    // Touch/swipe support for mobile
    let touchStartX = 0;
    let touchEndX = 0;
    
    if (carousel) {
        carousel.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        });
        
        carousel.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });
    }
    
    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;
        
        if (Math.abs(diff) > swipeThreshold) {
            stopAutoplay();
            if (diff > 0) {
                // Swipe left - next slide
                $('#modernCarousel').carousel('next');
            } else {
                // Swipe right - previous slide
                $('#modernCarousel').carousel('prev');
            }
            setTimeout(() => startAutoplay(), 5000);
        }
    }
    
    // Performance optimization - Intersection Observer for animations
    if ('IntersectionObserver' in window) {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const carouselObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-viewport');
                    if (isAutoplayActive) startAutoplay();
                } else {
                    entry.target.classList.remove('in-viewport');
                    stopAutoplay();
                }
            });
        }, observerOptions);
        
        if (carousel) {
            carouselObserver.observe(carousel);
        }
    }
    
});

// CSS Animation classes for enhanced transitions
const style = document.createElement('style');
style.textContent = `
    .carousel-item.slide-out .slide-background {
        transform: scale(1.1) !important;
        transition: transform 0.6s ease-out;
    }
    
    .carousel-item.slide-in .slide-background {
        transform: scale(1) !important;
        transition: transform 0.6s ease-out;
    }
    
    .modern-carousel.in-viewport .animated-shapes .shape {
        animation-play-state: running;
    }
    
    .modern-carousel:not(.in-viewport) .animated-shapes .shape {
        animation-play-state: paused;
    }
    
    @media (prefers-reduced-motion: reduce) {
        .shape {
            animation: none !important;
        }
        
        .carousel-item .slide-background {
            transition: none !important;
        }
    }
`;

document.head.appendChild(style); 