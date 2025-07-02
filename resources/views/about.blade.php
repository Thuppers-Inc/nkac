@extends('layouts.master')

@section('title', 'À propos - NKAC Consulting West Africa')

@section('content')
    <div class="sections">
        <div class="container">
            <div class="pages-title">
                <h1>À Propos de Nous</h1>
                <p>Accueil &nbsp; > &nbsp; À Propos</p>
            </div>
        </div>
    </div>
    
    <section>
        
        <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="about">
                    <h6>NOTRE EXPERTISE ET ENGAGEMENT</h6>  
                    <h2>CONSTRUIRE ENSEMBLE VOTRE SUCCÈS</h2>
                    <hr class="left">
                    <p>NKAC CONSULTING WEST AFRICA, filiale de NKAC AUDIT ET CONSEIL, accompagne et conseille ses clients dans la réalisation d'opérations financières mais également sur le plan informatique, organisationnel, stratégique, opérationnel, juridique et fiscal.</p>
                    <p>Vous êtes PMEs, Entreprises de grandes tailles, Entrepreneurs ou encore Fonds d'investissement, NKAC CONSULTING WEST AFRICA met à votre disposition toute son expertise pour assurer le succès de votre organisation.</p>
                    
                    <!-- Boutons d'action -->
                    <div class="about-actions">
                        <a class="btn btn-custom" href="{{route('services')}}" role="button">DÉCOUVRIR NOS SERVICES</a>
                        
                        <!-- Bouton de lecture vidéo -->
                        <button class="video-play-btn ml-3" data-toggle="modal" data-target="#videoModal">
                          <div class="play-icon">
                            <i class="fa fa-play"></i>
                          </div>
                          <span class="play-text">Notre histoire</span>
                        </button>
                    </div>
                </div>  
              </div>
              <div class="col-lg-6"><figure class="about-pic"><img src="{{asset('assets/img/images/conseil-strategique.jpg')}}" alt="NKAC Consulting"></figure> </div>
            </div>
            <hr class="about">
            <div class="front-options about-services">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="border-icon"><figure class="icon-center"><i class="fas fa-money-bill-wave fa-service-icon"></i></figure></div>
                        <h4>Ingénierie Financière</h4>
                        <p>Évaluation d'entreprises, structuration de levée de fonds, business plan</p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="border-icon"><figure class="icon-center"><i class="fas fa-shield-alt fa-service-icon"></i></figure></div>
                        <h4>Organisation & Gestion des Risques</h4>
                        <p>Cartographie des risques, excellence opérationnelle, conduite du changement</p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="border-icon"><figure class="icon-center"><i class="fas fa-balance-scale fa-service-icon"></i></figure></div>
                        <h4>Tax & Assistance Juridique</h4>
                        <p>Assistance fiscale, optimisation fiscale, relations avec l'administration</p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="border-icon"><figure class="icon-center"><i class="fas fa-briefcase fa-service-icon"></i></figure></div>
                        <h4>Direction Financière</h4>
                        <p>Externalisation DAF, audit comptable, contrôle de gestion</p>
                    </div>
                </div>  
            </div> 
        </div>
        
        <div class="container-fluid inner-color">
            <div class="container">
                <div class="section-title">
                    <h2>Pourquoi Nous Faire Confiance</h2>
                    <hr class="center">
                    <p>30 ans d'expériences cumulées de nos associés mis à votre service</p>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="front-thumbnail">
                        <figure class="box-pic"><a href="#"><img src="{{asset('assets/img/images/img1.jpg')}}" alt=""></a></figure> 
                        <div class="rounded-circle">
                            <figure class="center-circle-icon">
                                <i class="fa fa-cogs fa-service-icon"></i>
                            </figure> 
                        </div>
                        <div class="figure-caption">
                            <h4>Expertise Pluridisciplinaire</h4>
                            <p>Compétences qui couvrent les aspects financiers, stratégiques et opérationnels</p>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 center-div">
                    <div class="front-thumbnail">
                        <figure class="box-pic"><a href="#"><img src="{{asset('assets/img/images/img3.jpg')}}" alt=""></a></figure> 
                        <div class="rounded-circle">
                            <figure class="center-circle-icon">
                                <i class="fa fa-users fa-service-icon"></i>
                            </figure> 
                        </div>
                        <div class="figure-caption">
                            <h4>Équipes Expérimentées</h4>
                            <p>Des équipes intégrées, expérimentées et engagées à votre service</p>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="front-thumbnail">
                        <figure class="box-pic"><a href="#"><img src="{{asset('assets/img/images/img2.jpg')}}" alt=""></a></figure> 
                        <div class="rounded-circle">
                            <figure class="center-circle-icon">
                                <i class="fa fa-map-marker fa-service-icon"></i>
                            </figure> 
                        </div>
                        <div class="figure-caption">
                            <h4>Accompagnement de Proximité</h4>
                            <p>Proximité géographique & business avec une compréhension de votre activité</p>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
              <div class="col-md-12 col-lg-4">
                <div class="our-team">
                  <h6>Nos valeurs fondamentales</h6>
                  <h2>NOS VALEURS</h2>
                  <p><strong>ENGAGEMENT :</strong> Le fondement de toutes nos actions, être engagé à votre service.<br><br>
                  <strong>PROFESSIONNALISME :</strong> Le respect des normes et la maîtrise technique.<br><br>
                  <strong>PRAGMATISME :</strong> Pas de complexité inutile mais la volonté d'être clair et opérationnel.</p>
                  
                  <figure class="signature"><img src="{{asset('assets/img/images/signature.png')}}" alt=""></figure>
                </div>
              </div>
              <div class="col-md-12 col-lg-8">
                <div class="leadership-dsection">
                  {{-- <div class="section-header text-center mb-5">
                    <h3 class="leadership-title">Notre Équipe Dirigeante</h3>
                    <p class="leadership-subtitle">Des experts reconnus au service de votre réussite</p>
                  </div> --}}
                  <div class="row">
                    <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                      <div class="leadership-card">
                        {{-- <div class="featured-badge">Country Manager</div> --}}
                        <div class="card-image-wrapper">
                          <figure class="leadership-photo">
                            <img src="{{asset('assets/img/images/m-bakayoko.jpg')}}" alt="Gaoussou BAKAYOKO">
                            <div class="image-overlay">
                              <div class="social-links">
                                <a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="social-link"><i class="fa fa-envelope"></i></a>
                              </div>
                            </div>
                          </figure>
                        </div>
                        <div class="card-content">
                          <h4 class="member-name">Gaoussou BAKAYOKO</h4>
                          <p class="member-role">Country Manager</p>
                          <div class="member-expertise">
                            <span class="expertise-tag">Stratégie</span>
                            <span class="expertise-tag">Management</span>
                          </div>
                          {{-- <p class="member-description">
                            Expert en développement commercial et gestion d'équipes avec plus de 10 ans d'expérience.
                          </p> --}}
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                      <div class="leadership-card featurede">
                        {{-- <div class="featured-badge">Fondateur</div> --}}
                        <div class="card-image-wrapper">
                          <figure class="leadership-photo">
                            <img src="{{asset('assets/img/images/m-camara.png')}}" alt="Ndongo K.A. CAMARA">
                            <div class="image-overlay">
                              <div class="social-links">
                                <a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="social-link"><i class="fa fa-envelope"></i></a>
                              </div>
                            </div>
                          </figure>
                        </div>
                        <div class="card-content">
                          <h4 class="member-name">Ndongo K.A. CAMARA</h4>
                          <p class="member-role">Fondateur et Gérant</p>
                          <div class="member-expertise">
                            <span class="expertise-tag">Audit</span>
                            <span class="expertise-tag">Finance</span>
                            <span class="expertise-tag">Leadership</span>
                          </div>
                          {{-- <p class="member-description">
                            30 ans d'expérience en audit et conseil, expert reconnu dans l'espace OHADA.
                          </p> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        
        <div class="container-fluid counter-parallax">
            <div class="container">
                <div class="row stats-row">
                    <div class="col-sm-3 col-6 stat-box">
                        <div class="counter-icon"><i class="fa fa-folder-open"></i></div>
                        <div class="counter" data-count="150">0</div>
                        <h5>PROJETS RÉALISÉS</h5>
                    </div>
                    <div class="col-sm-3 col-6 stat-box">
                        <div class="counter-icon"><i class="fa fa-smile"></i></div>
                        <div class="counter" data-count="200">0</div>
                        <h5>CLIENTS SATISFAITS</h5>
                    </div>
                    <div class="col-sm-3 col-6 stat-box">
                        <div class="counter-icon"><i class="fa fa-calendar"></i></div>
                        <div class="counter" data-count="30">0</div>
                        <h5>ANNÉES D'EXPÉRIENCE</h5>
                    </div>
                    <div class="col-sm-3 col-6 stat-box">
                        <div class="counter-icon"><i class="fa fa-map-marker"></i></div>
                        <div class="counter" data-count="15">0</div>
                        <h5>ANNÉES AU SÉNÉGAL</h5>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="section-title">
                <h2>Nos Actualités</h2>
                <hr class="center">
                <p>Restez informés de nos dernières actualités et conseils</p>
              </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="front-blogs">
                    <div class="thumb-pic">
                        <figure class="post-prev-thumb"><a href="#"><img src="{{asset('assets/img/images/img4.jpg')}}" alt=""></a></figure> 
                        <div class="date-label">
                            <h6>23 NOV. 2024</h6>
                        </div>
                    </div>
                    <div class="post-caption">
                        <h4><a href="#">Optimisation fiscale en zone OHADA</a></h4>
                        <p>Découvrez les meilleures stratégies d'optimisation fiscale pour les entreprises en Afrique de l'Ouest.</p>
                        <a href="#" class="btn btn-custom btn-sm text-white">LIRE LA SUITE</a>
                    </div>
                </div>  
              </div>
              <div class="col-lg-4">
                <div class="front-blogs">
                    <div class="thumb-pic">
                        <figure class="post-prev-thumb"><a href="#"><img src="{{asset('assets/img/images/img5.jpg')}}" alt=""></a></figure> 
                        <div class="date-label">
                            <h6>19 NOV. 2024</h6>
                        </div>
                    </div>
                    <div class="post-caption">
                        <h4><a href="#">Gestion des risques financiers</a></h4>
                        <p>Les clés pour une gestion efficace des risques dans votre organisation.</p>
                        <a href="#" class="btn btn-custom btn-sm text-white">LIRE LA SUITE</a>
                    </div>
                </div>  
              </div>
              <div class="col-lg-4">
                <div class="news-feed">
                  <div class="feed-box">
                    <figure class="feed-thumb"><a href="#"><img src="{{asset('assets/img/images/thumb1.jpg')}}" alt=""></a></figure>
                    <div class="post-caption">
                        <h5><a href="#">Nouveaux défis de l'audit en Afrique</a></h5>
                        <p>Nov 17 2024</p>
                    </div>  
                  </div>
                  <hr class="feed">
                  <div class="feed-box">
                    <figure class="feed-thumb"><a href="#"><img src="{{asset('assets/img/images/thumb2.jpg')}}" alt=""></a></figure>
                    <div class="post-caption">
                        <h5><a href="#">Formation en contrôle de gestion</a></h5>
                        <p>Nov 12 2024</p>
                    </div>  
                  </div>
                  <hr class="feed">
                  <div class="feed-box">
                    <figure class="feed-thumb"><a href="#"><img src="{{asset('assets/img/images/thumb3.jpg')}}" alt=""></a></figure>
                    <div class="post-caption">
                        <h5><a href="#">Financement des PME en Côte d'Ivoire</a></h5>
                        <p>Nov 11 2024</p>
                    </div>  
                  </div>
                </div>  
              </div>
            </div>
        </div>
    </section>

    <!-- Modal Vidéo -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="videoModalLabel">Notre Histoire - NKAC Consulting WA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9">
              <video class="embed-responsive-item" id="videoPlayer" controls>
                <source src="{{asset('assets/videos/interview_nkac.mp4')}}" type="video/mp4">
                Votre navigateur ne supporte pas la lecture de vidéos.
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection


@section('scripts')
    <script src="{{asset('assets/js/team.slider.js')}}"></script>
    
    <style>
        /* Styles pour que les blocs aient la même hauteur */
        .front-options .row {
            display: flex;
            align-items: stretch;
        }
        
        .front-options .col-lg-4 {
            display: flex;
        }
        
        .front-thumbnail {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100%;
        }
        
        .front-thumbnail .figure-caption {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        /* Styles pour égaliser les hauteurs des cartes leadership */
        .leadership-dsection .row {
            display: flex;
            align-items: stretch;
        }
        
        .leadership-dsection .col-md-6 {
            display: flex;
        }
        
        .leadership-card {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100%;
        }
        
        .leadership-card .card-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        
        /* Ajustements pour les photos de l'équipe dirigeante */
        .leadership-photo img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            object-position: center top; /* Position l'image depuis le haut pour montrer les têtes */
            transition: transform 0.4s ease;
        }
        
        /* Pour s'assurer que les têtes restent visibles même avec le zoom au survol */
        .leadership-card:hover .leadership-photo img {
            transform: scale(1.05);
            object-position: center top; /* Maintient la position même lors du zoom */
        }
        
        /* Responsive adjustments */
        @media (max-width: 991px) {
            .front-options .row {
                display: block;
            }
            
            .front-options .col-lg-4 {
                display: block;
                margin-bottom: 30px;
            }
            
            .front-thumbnail {
                display: block;
                height: auto;
            }
            
            .front-thumbnail .figure-caption {
                flex-grow: unset;
                display: block;
            }
        }
        
        @media (max-width: 767px) {
            .leadership-dsection .row {
                display: block;
            }
            
            .leadership-dsection .col-md-6 {
                display: block;
                margin-bottom: 20px;
            }
            
            .leadership-card {
                display: block;
                height: auto;
            }
            
            .leadership-card .card-content {
                flex-grow: unset;
                display: block;
            }
            
            /* Ajustement mobile pour les photos */
            .leadership-photo img {
                height: 250px;
                object-position: center top;
            }
        }
        
        .stats-row {
            text-align: center;
            color: #fff;
        }
        .stat-box {
            margin-bottom: 30px;
        }
        .counter-icon {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #fff;
            opacity: 0.7;
        }
        .counter {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
        @media (max-width: 767px) {
            .stat-box { margin-bottom: 20px; }
            .counter { font-size: 2rem; }
        }
    </style>
    
    <script>
        $(document).ready(function() {
            var videoPlayer = document.getElementById('videoPlayer');
            
            // Quand la modal s'ouvre
            $('#videoModal').on('shown.bs.modal', function () {
                // Démarrer la vidéo automatiquement
                videoPlayer.currentTime = 0;
                videoPlayer.play().catch(function(error) {
                    console.log("Autoplay bloqué par le navigateur:", error);
                });
            });
            
            // Quand la modal se ferme
            $('#videoModal').on('hidden.bs.modal', function () {
                // Arrêter et remettre à zéro la vidéo
                videoPlayer.pause();
                videoPlayer.currentTime = 0;
            });
            
            // Gérer les erreurs de chargement vidéo
            videoPlayer.addEventListener('error', function(e) {
                console.error('Erreur de chargement de la vidéo:', e);
                alert('Erreur lors du chargement de la vidéo. Veuillez réessayer.');
            });
            
            // Optionnel : Afficher un message quand la vidéo est prête
            videoPlayer.addEventListener('loadeddata', function() {
                console.log('Vidéo chargée et prête à être lue');
            });
        });

        $('.counter').each(function() {
          var $this = $(this),
              countTo = $this.attr('data-count');
          $({ countNum: $this.text() }).animate({
            countNum: countTo
          },
          {
            duration: 2000,
            easing: 'swing',
            step: function() {
              $this.text(Math.floor(this.countNum));
            },
            complete: function() {
              $this.text(this.countNum);
            }
          });
        });
    </script>
@endsection