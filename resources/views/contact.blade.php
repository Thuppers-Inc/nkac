@extends('layouts.master')
@section('title', 'Contact - NKAC Consulting West Africa')

@section('content')
    <!-- Section Hero avec carte -->
    <div class="contact-hero">
        <div class="hero-overlay"></div>
        <div class="maps-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6886.6071963836575!2d-3.978886327999284!3d5.394387406469877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb8822b154b5%3A0x8c240badad889f06!2sNKAC%20CONSULTING%20WEST%20AFRICA!5e0!3m2!1sfr!2sci!4v1749664088627!5m2!1sfr!2sci" 
                width="100%" 
                height="500" 
                style="border:0; filter: grayscale(0.3);" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="hero-content">
            <div class="container">
                <div class="hero-text" data-aos="fade-up">
                    <h1>Contactez-Nous</h1>
                    <p>Transformons ensemble vos défis en opportunités</p>
                    <div class="breadcrumb-modern">
                        <span>Accueil</span>
                        <i class="fa fa-chevron-right"></i>
                        <span class="active">Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Contact Principale -->
    <section class="contact-modern">
        <div class="container">
            <div class="row">
                <!-- Informations de Contact -->
                <div class="col-lg-5">
                    <div class="contact-info-modern" data-aos="fade-right">
                        <div class="contact-intro">
                            <h2>Entrons en Contact</h2>
                            <p class="intro-text">Vous êtes PMEs, Entreprises de grandes tailles, Entrepreneurs ou encore Fonds d'investissement ? NKAC CONSULTING WEST AFRICA met à votre disposition toute son expertise pour assurer le succès de votre organisation.</p>
                        </div>

                        <div class="contact-details">
                            <div class="contact-item" data-aos="fade-up" data-aos-delay="100">
                                <div class="contact-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Notre Adresse</h4>
                                    <p>ABIDJAN COCODY ANGRE 8ÈME TRANCHE<br>Côte d'Ivoire</p>
                                </div>
                            </div>

                            <div class="contact-item" data-aos="fade-up" data-aos-delay="200">
                                <div class="contact-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Téléphone</h4>
                                    <p><a href="tel:+2250757403960">+225 07 57 40 39 60</a></p>
                                </div>
                            </div>

                            <div class="contact-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="contact-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Email</h4>
                                    <p>
                                        <a href="mailto:gaoussou.bakayoko@nkac-wa.com">gaoussou.bakayoko@nkac-wa.com</a><br>
                                        <a href="mailto:contact@nkac-wa.com">contact@nkac-wa.com</a>
                                    </p>
                                </div>
                            </div>

                            <div class="contact-item" data-aos="fade-up" data-aos-delay="400">
                                <div class="contact-icon">
                                    <i class="fa fa-building"></i>
                                </div>
                                <div class="contact-content">
                                    <h4>Informations Légales</h4>
                                    <p>IDU: CI-2021-0005398 X<br>RCCM: CI-ABJ-03-2021-B16-00055</p>
                                </div>
                            </div>
                        </div>

                        <div class="social-links-modern" data-aos="fade-up" data-aos-delay="500">
                            <h4>Suivez-nous</h4>
                            <div class="social-icons">
                                <a href="#" class="social-link facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="social-link twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="social-link linkedin"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="social-link email"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formulaire de Contact -->
                <div class="col-lg-7">
                    <div class="contact-form-modern" data-aos="fade-left">
                        <div class="form-header">
                            <h3>Demandez un Devis Gratuit</h3>
                            <p>Décrivez-nous votre projet et nous vous répondrons dans les plus brefs délais.</p>
                        </div>

                        <form id="contact-form" method="post" action="#" class="modern-form">
                            <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group-modern">
                                            <input id="form_name" type="text" name="name" class="form-control-modern" required>
                                            <label for="form_name" class="form-label-modern">Nom complet *</label>
                                            <div class="form-border"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group-modern">
                                            <input id="form_company" type="text" name="company" class="form-control-modern">
                                            <label for="form_company" class="form-label-modern">Entreprise</label>
                                            <div class="form-border"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group-modern">
                                            <input id="form_email" type="email" name="email" class="form-control-modern" required>
                                            <label for="form_email" class="form-label-modern">Adresse email *</label>
                                            <div class="form-border"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group-modern">
                                            <input id="form_phone" type="tel" name="phone" class="form-control-modern">
                                            <label for="form_phone" class="form-label-modern">Téléphone</label>
                                            <div class="form-border"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group-modern">
                                            <select id="form_service" name="service" class="form-control-modern" required>
                                                <option value=""></option>
                                                <option value="ingenierie-financiere">Ingénierie Financière</option>
                                                <option value="gestion-risques">Organisation & Gestion des Risques</option>
                                                <option value="tax-juridique">Tax & Assistance Juridique</option>
                                                <option value="direction-financiere">Direction Financière</option>
                                                <option value="formation">Formation</option>
                                                <option value="autre">Autre (préciser dans le message)</option>
                                            </select>
                                            <label for="form_service" class="form-label-modern">Sélectionnez un service *</label>
                                            <div class="form-border"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group-modern">
                                            <textarea id="form_message" name="message" class="form-control-modern" rows="5" required></textarea>
                                            <label for="form_message" class="form-label-modern">Décrivez votre projet ou vos besoins *</label>
                                            <div class="form-border"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn-modern">
                                        <span>Envoyer la Demande</span>
                                        <i class="fa fa-paper-plane"></i>
                                    </button>
                                    <small class="form-note">* Champs obligatoires</small>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section CTA d'urgence -->
    <section class="emergency-cta">
        <div class="container">
            <div class="emergency-card" data-aos="zoom-in">
                <div class="emergency-icon">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="emergency-content">
                    <h3>Service d'Urgence 24/7</h3>
                    <p>Pour les situations urgentes (audit, contrôle fiscal, assistance juridique d'urgence), contactez-nous directement. Nous intervenons dans les plus brefs délais.</p>
                    <a href="tel:+2250757403960" class="btn-emergency">
                        <i class="fa fa-phone"></i>
                        +225 07 57 40 39 60
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Services Rapides -->
    <section class="quick-services">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>Comment Pouvons-Nous Vous Aider ?</h2>
                <p>Découvrez nos services et solutions adaptés à vos besoins</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-quick-card">
                        <div class="service-icon">
                            <i class="fa fa-calculator"></i>
                        </div>
                        <h4>Ingénierie Financière</h4>
                        <p>Levées de fonds, évaluation d'entreprises, business plans</p>
                        <a href="{{route('services')}}" class="service-link">En savoir plus <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-quick-card">
                        <div class="service-icon">
                            <i class="fa fa-shield"></i>
                        </div>
                        <h4>Gestion des Risques</h4>
                        <p>Cartographie des risques, excellence opérationnelle</p>
                        <a href="{{route('services')}}" class="service-link">En savoir plus <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-quick-card">
                        <div class="service-icon">
                            <i class="fa fa-gavel"></i>
                        </div>
                        <h4>Assistance Juridique</h4>
                        <p>Conseil fiscal, optimisation fiscale, relations administration</p>
                        <a href="{{route('services')}}" class="service-link">En savoir plus <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-quick-card">
                        <div class="service-icon">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <h4>Direction Financière</h4>
                        <p>Externalisation DAF, audit comptable, contrôle de gestion</p>
                        <a href="{{route('services')}}" class="service-link">En savoir plus <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
/* Styles modernes pour la page contact - Version optimisée */
.contact-hero {
    position: relative;
    height: 50vh;
    min-height: 400px;
    overflow: hidden;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(17, 51, 117, 0.8) 0%, rgba(248, 121, 2, 0.6) 100%);
    z-index: 2;
}

.maps-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.hero-content {
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    transform: translateY(-50%);
    z-index: 3;
    color: white;
    text-align: center;
}

.hero-text h1 {
    font-size: 2.8rem;
    font-weight: 700;
    margin-bottom: 0.8rem;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.hero-text p {
    font-size: 1rem;
    margin-bottom: 1.5rem;
    opacity: 0.9;
}

.breadcrumb-modern {
    display: inline-flex;
    align-items: center;
    background: rgba(255, 255, 255, 0.1);
    padding: 0.4rem 0.8rem;
    border-radius: 20px;
    backdrop-filter: blur(10px);
    font-size: 0.9rem;
}

.breadcrumb-modern span {
    margin: 0 0.4rem;
}

.breadcrumb-modern .active {
    color: #f87902;
    font-weight: 600;
}

/* Section Contact Moderne */
.contact-modern {
    padding: 60px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
}

.contact-info-modern {
    padding: 1.5rem;
}

.contact-intro h2 {
    font-size: 2rem;
    color: #113375;
    margin-bottom: 1rem;
    font-weight: 600;
}

.intro-text {
    font-size: 0.95rem;
    line-height: 1.6;
    color: #6c757d;
    margin-bottom: 2rem;
}

.contact-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 1.8rem;
    padding: 1.2rem;
    background: white;
    border-radius: 12px;
    box-shadow: 0 3px 15px rgba(0, 0, 0, 0.06);
    transition: all 0.3s ease;
}

.contact-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

.contact-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #113375 0%, #f87902 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
    flex-shrink: 0;
}

.contact-icon i {
    color: white;
    font-size: 1.2rem;
}

.contact-content h4 {
    color: #113375;
    font-weight: 600;
    margin-bottom: 0.3rem;
    font-size: 1.1rem;
}

.contact-content p {
    color: #6c757d;
    margin: 0;
    line-height: 1.5;
    font-size: 0.9rem;
}

.contact-content a {
    color: #f87902;
    text-decoration: none;
    transition: color 0.3s ease;
}

.contact-content a:hover {
    color: #113375;
}

.social-links-modern {
    margin-top: 2rem;
}

.social-links-modern h4 {
    color: #113375;
    margin-bottom: 0.8rem;
    font-weight: 600;
    font-size: 1.1rem;
}

.social-icons {
    display: flex;
    gap: 0.8rem;
}

.social-link {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1rem;
    transition: all 0.3s ease;
    text-decoration: none;
}

.social-link.facebook { background: #3b5998; }
.social-link.twitter { background: #1da1f2; }
.social-link.linkedin { background: #0077b5; }
.social-link.email { background: #f87902; }

.social-link:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

/* Formulaire Moderne */
.contact-form-modern {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
}

.form-header h3 {
    font-size: 1.6rem;
    color: #113375;
    margin-bottom: 0.8rem;
    font-weight: 600;
}

.form-header p {
    color: #6c757d;
    margin-bottom: 1.8rem;
    font-size: 0.95rem;
}

.form-group-modern {
    position: relative;
    margin-bottom: 1.5rem;
}

.form-control-modern {
    width: 100%;
    padding: 0.8rem 0;
    background: transparent;
    border: none;
    border-bottom: 2px solid #e9ecef;
    font-size: 0.9rem;
    color: #495057;
    transition: all 0.3s ease;
    font-family: inherit;
}

.form-control-modern:focus {
    outline: none;
    border-bottom-color: #f87902;
}

.form-label-modern {
    position: absolute;
    top: 0.8rem;
    left: 0;
    color: #6c757d;
    transition: all 0.3s ease;
    pointer-events: none;
    font-size: 0.9rem;
}

.form-control-modern:focus + .form-label-modern,
.form-control-modern:not(:placeholder-shown) + .form-label-modern,
.form-control-modern:valid + .form-label-modern {
    top: -0.4rem;
    font-size: 0.75rem;
    color: #f87902;
    font-weight: 600;
}

.form-border {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(135deg, #113375 0%, #f87902 100%);
    transition: width 0.3s ease;
}

.form-control-modern:focus ~ .form-border {
    width: 100%;
}

.form-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 1.5rem;
}

.btn-modern {
    background: linear-gradient(135deg, #113375 0%, #f87902 100%);
    color: white;
    border: none;
    padding: 0.8rem 2rem;
    border-radius: 25px;
    font-size: 0.9rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.4rem;
}

.btn-modern:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(17, 51, 117, 0.25);
}

.form-note {
    color: #6c757d;
    font-style: italic;
    font-size: 0.8rem;
}

/* Section CTA d'urgence */
.emergency-cta {
    padding: 50px 0;
    background: linear-gradient(135deg, #113375 0%, #1a4fa0 100%);
}

.emergency-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.emergency-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #f87902 0%, #ff6b35 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
}

.emergency-icon i {
    font-size: 1.5rem;
    color: white;
}

.emergency-content h3 {
    color: #113375;
    font-size: 1.6rem;
    margin-bottom: 0.8rem;
    font-weight: 600;
}

.emergency-content p {
    color: #6c757d;
    margin-bottom: 1.5rem;
    font-size: 0.95rem;
    line-height: 1.5;
}

.btn-emergency {
    background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
    color: white;
    padding: 0.8rem 1.5rem;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.95rem;
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    transition: all 0.3s ease;
}

.btn-emergency:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(40, 167, 69, 0.25);
    color: white;
    text-decoration: none;
}

/* Services rapides */
.quick-services {
    padding: 60px 0;
    background: #f8f9fa;
}

.section-header h2 {
    font-size: 2rem;
    color: #113375;
    margin-bottom: 0.8rem;
    font-weight: 600;
}

.section-header p {
    color: #6c757d;
    font-size: 0.95rem;
    margin-bottom: 2.5rem;
}

.service-quick-card {
    background: white;
    padding: 2rem 1.5rem;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 3px 15px rgba(0, 0, 0, 0.06);
    transition: all 0.3s ease;
    height: 100%;
}

.service-quick-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
}

.service-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #113375 0%, #f87902 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.2rem;
}

.service-icon i {
    font-size: 1.5rem;
    color: white;
}

.service-quick-card h4 {
    color: #113375;
    margin-bottom: 0.8rem;
    font-weight: 600;
    font-size: 1.1rem;
}

.service-quick-card p {
    color: #6c757d;
    margin-bottom: 1rem;
    line-height: 1.5;
    font-size: 0.9rem;
}

.service-link {
    color: #f87902;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
    font-size: 0.9rem;
}

.service-link:hover {
    color: #113375;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-text h1 { font-size: 2.2rem; }
    .contact-form-modern { padding: 1.5rem; }
    .emergency-card { padding: 1.5rem; }
    .form-footer { flex-direction: column; gap: 1rem; }
    .social-icons { justify-content: center; }
    .contact-info-modern { padding: 1rem; }
    .contact-modern { padding: 40px 0; }
    .quick-services { padding: 40px 0; }
    .emergency-cta { padding: 40px 0; }
}

@media (max-width: 576px) {
    .hero-text h1 { font-size: 1.8rem; }
    .contact-form-modern { padding: 1.2rem; }
    .emergency-card { padding: 1.2rem; }
    .service-quick-card { padding: 1.5rem; }
    .contact-hero { min-height: 350px; }
    .contact-item { padding: 1rem; }
    .contact-icon { width: 45px; height: 45px; }
    .social-link { width: 38px; height: 38px; }
}
</style>

<script>
$(document).ready(function() {
    // Initialiser AOS
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });

    // Animation des labels de formulaire
    $('.form-control-modern').on('focus blur', function(e) {
        const $this = $(this);
        const $label = $this.next('.form-label-modern');
        
        if (e.type === 'focus' || $this.val() !== '') {
            $label.addClass('active');
        } else {
            $label.removeClass('active');
        }
    });

    // Validation du formulaire
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();
        
        // Animation du bouton
        const $btn = $('.btn-modern');
        const originalText = $btn.html();
        
        $btn.html('<i class="fa fa-spinner fa-spin"></i> Envoi en cours...');
        $btn.prop('disabled', true);
        
        // Simulation d'envoi (remplacer par votre logique d'envoi)
        setTimeout(function() {
            $btn.html('<i class="fa fa-check"></i> Message envoyé !');
            
            setTimeout(function() {
                $btn.html(originalText);
                $btn.prop('disabled', false);
                // Reset form
                $('#contact-form')[0].reset();
                $('.form-label-modern').removeClass('active');
            }, 2000);
        }, 2000);
    });

    // Effet parallax léger sur le hero
    $(window).scroll(function() {
        const scrolled = $(this).scrollTop();
        const parallax = $('.maps-container');
        const speed = scrolled * 0.3;
        
        parallax.css('transform', 'translateY(' + speed + 'px)');
    });
});
</script>
@endsection    