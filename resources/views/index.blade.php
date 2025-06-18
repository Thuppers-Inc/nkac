@extends('layouts.master')

@section('title', 'NKAC CONSULTING WA - Cabinet de conseil en Afrique de l\'Ouest')

@section('meta_description', 'NKAC Consulting West Africa, cabinet pluridisciplinaire d\'excellence avec 30 ans d\'expérience en conseil financier, stratégique et formation en Afrique de l\'Ouest.')

@section('meta_keywords', 'conseil financier, audit, expertise comptable, formation, Afrique de l\'Ouest, OHADA, ingénierie financière, DAF externalisée')

@section('meta_image', asset('assets/img/images/conseil-strategique.jpg'))

@section('content')
<div class="carousel">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <!-- Slide 1 - Excellence & Engagement -->
        <div class="carousel-item active">
          <div class="carousel-img-1"></div>
          <div class="carousel-caption" style="top: 10%; bottom: auto; padding-top: 40px;">
              {{-- <h6 class="animated fadeInUp">Excellence & Engagement</h6>
              <h1 class="animated fadeInLeft">Notre expertise et engagement pour votre succès</h1>
              <h5 class="animated fadeInUp">NKAC Consulting West Africa accompagne PME, grandes entreprises, entrepreneurs et fonds d'investissement avec 30 ans d'expérience cumulée et une équipe jeune, expérimentée et ambitieuse.</h5>
              <div class="slider-btn">
                  <div class="animated inner-btn fadeInUp"><a href="#services" class="btn btn-slider">DÉCOUVRIR NOS SERVICES</a></div>
              </div> --}}
              <div class="container">
                <div class="content-wrapper">
                  <div class="slide-number">01</div>
                  <div class="content-main text-left">
                    <span class="subtitle animated fadeInUp mx-5" data-aos="fade-up" data-aos-delay="200">Excellence & Engagement</span>
                    <h1 class="main-title animated fadeInLeft" data-aos="fade-up" data-aos-delay="400">
                      <span class="highlight-text">Expertise</span> & 
                      <br>de <span class="highlight-text">confiance</span>
                    </h1>
                    <p class="ca-description animated fadeInUp" data-aos="fade-up" data-aos-delay="600">
                      Cabinet pluridisciplinaire avec 30 ans d'expérience pour accompagner PME, grandes entreprises et fonds d'investissement.
                    </p>
                    <div class="cta-buttons" data-aos="fade-up" data-aos-delay="800">
                      <a href="{{route('services')}}" class="btn btnx-slider btn-primary">
                        <span>Nos services</span>
                        <i class="icon-arrow"></i>
                      </a>
                      <a href="{{route('contact')}}" class="btn btnd-slider btn-outline">
                        <span>Contact</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- Slide 2 - Ingénierie Financière -->
        <div class="carousel-item">
          <div class="carousel-img-2"></div>
          <div class="carousel-caption" style="top: 10%; bottom: auto; padding-top: 40px;">
              {{-- <h6 class="animated fadeInUp">Ingénierie Financière</h6>
              <h1 class="animated fadeInLeft">Structuration & optimisation financière</h1>
              <h5 class="animated fadeInUp">Évaluation d'entreprises, structuration de levée de fonds, business plans, commissariat aux apports et assistance à la production de vos reportings financiers.</h5>
              <div class="slider-btn">
                  <div class="animated inner-btn fadeInUp"><a href="#services" class="btn btn-slider">NOS SERVICES FINANCIERS</a></div>
              </div> --}}
              <div class="container">
                <div class="content-wrapper">
                  <div class="slide-number">02</div>
                  <div class="content-main text-left">
                    <span class="subtitle animated fadeInUp mx-5" data-aos="fade-up" data-aos-delay="200">Ingénierie Financière</span>
                    <h1 class="main-title animated fadeInLeft" data-aos="fade-up" data-aos-delay="400">
                      <span class="highlight-text">Structuration</span> & 
                      <br>optimisation <span class="highlight-text">financière</span>
                    </h1>
                    <p class="ca-description animated fadeInUp" data-aos="fade-up" data-aos-delay="600">
                      Évaluation d'entreprises, structuration de levée de fonds, business plans, commissariat aux apports et assistance à la production de vos reportings financiers.
                    </p>
                    <div class="cta-buttons" data-aos="fade-up" data-aos-delay="800">
                      <a href="{{route('services')}}" class="btn btnx-slider btn-primary">
                        <span>Nos formations</span>
                        <i class="icon-arrow"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- Slide 3 - Stratégie & Performance -->
        <div class="carousel-item">
          <div class="carousel-img-3"></div>
          <div class="carousel-caption" style="top: 10%; bottom: auto; padding-top: 40px;">
              {{-- <h6 class="animated fadeInUp">Stratégie & Performance</h6>
              <h1 class="animated fadeInLeft">Pilotage & formation métier</h1>
              <h5 class="animated fadeInUp">Externalisation DAF, contrôle de gestion, formations spécialisées et accompagnement dans tous vos défis financiers, fiscaux et organisationnels.</h5>
              <div class="slider-btn">
                  <div class="animated inner-btn fadeInUp"><a href="#formation" class="btn btn-slider">NOS FORMATIONS</a></div>
              </div> --}}

              <div class="container">
                <div class="content-wrapper">
                  <div class="slide-number">03</div>
                  <div class="content-main text-left">
                    <span class="subtitle animated fadeInRight mx-5" data-aos="fade-up" data-aos-delay="200">Stratégie & Performance</span>
                    <h1 class="main-title animated fadeInUp" data-aos="fade-up" data-aos-delay="400">
                      <span class="highlight-text">Pilotage</span> & 
                      <br><span class="highlight-text">formation</span> métier
                    </h1>
                    <p class="ca-description animated fadeInLeft" data-aos="fade-up" data-aos-delay="600">
                      Externalisation DAF, contrôle de gestion, formations spécialisées et accompagnement dans tous vos défis financiers, fiscaux et organisationnels.
                    </p>
                    <div class="cta-buttons" data-aos="fade-up" data-aos-delay="800">
                      <a href="#formation" class="btn btnx-slider btn-primary">
                        <span>Nos formations</span>
                        <i class="icon-arrow"></i>
                      </a>
                      <a href="#programmes" class="btn btnd-slider btn-outline">
                        <span>Voir nos programmes</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Précédent</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
      </a>
    </div>
</div>

{{-- <div class="modern-carousel">
  <div id="modernCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
    
    <!-- Indicateurs modernes -->
    <div class="modern-indicators">
      <button class="indicator active" data-target="#modernCarousel" data-slide-to="0" aria-current="true">
        <span class="progress-bar"></span>
      </button>
      <button class="indicator" data-target="#modernCarousel" data-slide-to="1">
        <span class="progress-bar"></span>
      </button>
      <button class="indicator" data-target="#modernCarousel" data-slide-to="2">
        <span class="progress-bar"></span>
      </button>
    </div>

    <div class="carousel-inner">
      <!-- Slide 1 - Excellence & Engagement -->
      <div class="carousel-item active">
        <div class="slide-background slide-bg-1">
          <div class="overlay-gradient"></div>
          <div class="animated-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
          </div>
        </div>
        <div class="carousel-content">
          <div class="container">
            <div class="content-wrapper">
              <div class="slide-number">01</div>
              <div class="content-main">
                <span class="subtitle" data-aos="fade-up" data-aos-delay="200">Excellence & Engagement</span>
                <h1 class="main-title" data-aos="fade-up" data-aos-delay="400">
                  Notre <span class="highlight-text">expertise</span> et <span class="highlight-text">engagement</span> 
                  pour <br>votre <span class="highlight-text">succès</span>
                </h1>
                <p class="description" data-aos="fade-up" data-aos-delay="600">
                  NKAC Consulting West Africa accompagne PME, grandes entreprises, entrepreneurs et fonds d'investissement avec 30 ans d'expérience cumulée et une équipe jeune, expérimentée et ambitieuse.
                </p>
                <div class="cta-buttons" data-aos="fade-up" data-aos-delay="800">
                  <a href="#services" class="btn-modern btn-primary">
                    <span>Découvrir nos services</span>
                    <i class="icon-arrow"></i>
                  </a>
                  <a href="#about" class="btn-modern btn-outline">
                    <span>En savoir plus</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 2 - Ingénierie Financière -->
      <div class="carousel-item">
        <div class="slide-background slide-bg-2">
          <div class="overlay-gradient"></div>
          <div class="animated-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
          </div>
        </div>
        <div class="carousel-content">
          <div class="container">
            <div class="content-wrapper">
              <div class="slide-number">02</div>
              <div class="content-main">
                <span class="subtitle" data-aos="fade-up" data-aos-delay="200">Ingénierie Financière</span>
                <h1 class="main-title" data-aos="fade-up" data-aos-delay="400">
                  <span class="highlight-text">Structuration</span> & 
                  <br><span class="highlight-text">optimisation</span> financière
                </h1>
                <p class="description" data-aos="fade-up" data-aos-delay="600">
                  Évaluation d'entreprises, structuration de levée de fonds, business plans, commissariat aux apports et assistance à la production de vos reportings financiers.
                </p>
                <div class="cta-buttons" data-aos="fade-up" data-aos-delay="800">
                  <a href="#services" class="btn-modern btn-primary">
                    <span>Nos services financiers</span>
                    <i class="icon-arrow"></i>
                  </a>
                  <a href="#contact" class="btn-modern btn-outline">
                    <span>Nous contacter</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 3 - Stratégie & Performance -->
      <div class="carousel-item">
        <div class="slide-background slide-bg-3">
          <div class="overlay-gradient"></div>
          <div class="animated-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
          </div>
        </div>
        <div class="carousel-content">
          <div class="container">
            <div class="content-wrapper">
              <div class="slide-number">03</div>
              <div class="content-main">
                <span class="subtitle" data-aos="fade-up" data-aos-delay="200">Stratégie & Performance</span>
                <h1 class="main-title" data-aos="fade-up" data-aos-delay="400">
                  <span class="highlight-text">Pilotage</span> & 
                  <br><span class="highlight-text">formation</span> métier
                </h1>
                <p class="description" data-aos="fade-up" data-aos-delay="600">
                  Externalisation DAF, contrôle de gestion, formations spécialisées et accompagnement dans tous vos défis financiers, fiscaux et organisationnels.
                </p>
                <div class="cta-buttons" data-aos="fade-up" data-aos-delay="800">
                  <a href="#formation" class="btn-modern btn-primary">
                    <span>Nos formations</span>
                    <i class="icon-arrow"></i>
                  </a>
                  <a href="#programmes" class="btn-modern btn-outline">
                    <span>Voir nos programmes</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Contrôles modernes -->
    <button class="carousel-control-prev modern-control" type="button" data-target="#modernCarousel" data-slide="prev">
      <span class="control-icon prev-icon"></span>
      <span class="sr-only">Précédent</span>
    </button>
    <button class="carousel-control-next modern-control" type="button" data-target="#modernCarousel" data-slide="next">
      <span class="control-icon next-icon"></span>
      <span class="sr-only">Suivant</span>
    </button>

    <!-- Scroll indicator -->
    <div class="scroll-indicator" data-aos="fade-in" data-aos-delay="1200">
      <div class="mouse">
        <div class="wheel"></div>
      </div>
      <span>Défiler</span>
    </div>
  </div>
</div> --}}

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="front-section">
          <h6>NKAC Consulting West Africa</h6>
          <h2>Cabinet pluridisciplinaire d'excellence</h2>
          <hr class="left">
          <p>
            En tant que cabinet pluridisciplinaire, NKAC Consulting West Africa accompagne PME, grandes entreprises, entrepreneurs 
            et fonds d'investissement. Notre expertise couvre les axes financier, stratégique, fiscal, juridique et opérationnel, 
            pour structurer votre croissance avec 30 ans d'expérience cumulée.
          </p>
          <div class="front-options">
            <div class="row">
              <div class="col-md-6">
                <div class="border-icon">
                  <figure class="icon-center"><img src="{{asset('assets/img/master/money.png')}}" alt=""></figure>
                </div>
                <h4>Ingénierie Financière</h4>
                <p>Évaluation, levée de fonds, business plans, commissariat aux apports.</p>
              </div>
              <div class="col-md-6">
                <div class="border-icon">
                  <figure class="icon-center"><img src="{{asset('assets/img/master/saved.png')}}" alt=""></figure>
                </div>
                <h4>Externalisation DAF</h4>
                <p>Direction financière externalisée, contrôle de gestion, pilotage.</p>
              </div>
              <div class="col-md-6">
                <div class="border-icon">
                  <figure class="icon-center"><img src="{{asset('assets/img/master/grow.png')}}" alt=""></figure>
                </div>
                <h4>Fiscalité & Juridique</h4>
                <p>Optimisation fiscale, conformité, assistance juridique continue.</p>
              </div>
              <div class="col-md-6">
                <div class="border-icon">
                  <figure class="icon-center"><img src="{{asset('assets/img/master/loan.png')}}" alt=""></figure>
                </div>
                <h4>Formation Métier</h4>
                <p>Formations spécialisées comptabilité, trésorerie, contrôle de gestion.</p>
              </div>
            </div>  
          </div>      
        </div>
      </div>
      <div class="col-lg-4 front-left">
        <div class="row hover-effects image-hover">
          <div class="col-md-12">
            <div class="image-box">
              <figure><img src="{{asset('assets/img/images/nkac-wa.jpg')}}" alt="NKAC Consulting" /></figure>
            </div>
          </div>
          <div class="col-md-12 center-div">
            <div class="image-box">
              <figure><img src="{{asset('assets/img/images/sections-bg.jpg')}}" alt="Expertise financière" /></figure>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid inner-color" id="services">
    <div class="container">
      <div class="section-title">
        <h2>Pourquoi choisir NKAC WA</h2>
        <hr class="center">
        <p>30 ans d'expérience cumulée • équipe jeune et expérimentée • proximité et réactivité</p>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="front-thumbnail">
            <figure class="box-pic"><a href="#"><img src="{{asset('assets/img/images/finances.jpg')}}" alt="Ingénierie financière"></a></figure> 
            <div class="rounded-circle">
              <figure class="center-circle-icon"><img src="{{asset('assets/img/master/cost.png')}}" alt=""></figure>
            </div>
            <div class="figure-caption">
              <h4>Ingénierie Financière</h4>
              <p>Levées de fonds, évaluation d'entreprises, business plans, reportings.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 center-div">
          <div class="front-thumbnail">
            <figure class="box-pic"><a href="#"><img src="{{asset('assets/img/images/strategie.jpg')}}" alt="Stratégie"></a></figure> 
            <div class="rounded-circle">
              <figure class="center-circle-icon"><img src="{{asset('assets/img/master/deal.png')}}" alt=""></figure>
            </div>
            <div class="figure-caption">
              <h4>Stratégie & Performance</h4>
              <p>Externalisation DAF, contrôle de gestion, optimisation organisationnelle.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="front-thumbnail">
            <figure class="box-pic"><a href="#"><img src="{{asset('assets/img/images/formation.jpg')}}" alt="Formation"></a></figure> 
            <div class="rounded-circle">
              <figure class="center-circle-icon"><img src="{{asset('assets/img/master/document.png')}}" alt=""></figure>
            </div>
            <div class="figure-caption">
              <h4>Formation Métier</h4>
              <p>Formations comptabilité, trésorerie, contrôle de gestion, SI.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Références, stats, témoignages, blog restent similaires, à personnaliser plus tard -->
</section>

<section>
  <div class="container">
    <div class="section-title">
      <h2>Actualités & Conseils</h2>
      <hr class="center">
      <p>Découvrez nos publications récentes en comptabilité, fiscalité, audit et finance.</p>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="front-blogs">
          <div class="thumb-pic">
            <figure class="post-prev-thumb">
              <a href="#"><img src="{{ asset('assets/img/images/fiscalite.jpg') }}" alt=""></a>
            </figure>
            <div class="date-label">
              <h6>12 JUIN 2025</h6>
            </div>
          </div>
          <div class="post-caption">
            <h4><a href="#">5 erreurs fiscales à éviter en entreprise</a></h4>
            <p>Dans ce billet, nos experts mettent en lumière les fautes courantes en matière de fiscalité qui peuvent coûter cher aux entreprises ou compromettre leur conformité.</p>
            <h5><a href="#">LIRE PLUS</a></h5>
          </div>
        </div>  
      </div>
      
      <div class="col-lg-4">
        <div class="front-blogs">
          <div class="thumb-pic">
            <figure class="post-prev-thumb">
              <a href="#"><img src="{{ asset('assets/img/images/img5.jpg') }}" alt=""></a>
            </figure>
            <div class="date-label">
              <h6>3 JUIN 2025</h6>
            </div>
          </div>
          <div class="post-caption">
            <h4><a href="#">Pourquoi un audit financier annuel est essentiel</a></h4>
            <p>L'audit ne concerne pas uniquement les grandes structures. Il apporte une transparence essentielle à toute organisation, publique ou privée.</p>
            <h5><a href="#">LIRE PLUS</a></h5>
          </div>
        </div>  
      </div>

      <div class="col-lg-4">
        <div class="news-feed">
          <div class="feed-box">
            <figure class="feed-thumb"><a href="#"><img src="{{ asset('assets/img/images/1665.jpg') }}" alt=""></a></figure>
            <div class="post-caption">
              <h5><a href="#">Comprendre les obligations fiscales en Afrique de l'Ouest</a></h5>
              <p>28 Mai 2025</p>
            </div>  
          </div>
          <hr class="feed">
          <div class="feed-box">
            <figure class="feed-thumb"><a href="#"><img src="{{ asset('assets/img/images/thumb2.jpg') }}" alt=""></a></figure>
            <div class="post-caption">
              <h5><a href="#">Formation : Maîtriser la comptabilité OHADA</a></h5>
              <p>16 Mai 2025</p>
            </div>  
          </div>
          <hr class="feed">
          <div class="feed-box">
            <figure class="feed-thumb"><a href="#"><img src="{{ asset('assets/img/images/thumb3.jpg') }}" alt=""></a></figure>
            <div class="post-caption">
              <h5><a href="#">Comment réussir une mission d'audit interne</a></h5>
              <p>2 Mai 2025</p>
            </div>  
          </div>
        </div>  
      </div>
    </div>
  </div>

</section>

@endsection