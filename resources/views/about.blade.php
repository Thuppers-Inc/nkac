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
                    <p><a class="btn btn-custom" href="{{route('services')}}" role="button">DÉCOUVRIR NOS SERVICES</a></p>
                </div>  
              </div>
              <div class="col-lg-6"><figure class="about-pic"><img src="{{asset('assets/img/images/img6.jpg')}}" alt="NKAC Consulting"></figure> </div>
            </div>
            <hr class="about">
            <div class="front-options about-services">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="border-icon"><figure class="icon-center"><img src="{{asset('assets/img/master/money.png')}}" alt=""></figure></div>
                        <h4>Ingénierie Financière</h4>
                        <p>Évaluation d'entreprises, structuration de levée de fonds, business plan</p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="border-icon"><figure class="icon-center"><img src="{{asset('assets/img/master/saved.png')}}" alt=""></figure></div>
                        <h4>Organisation & Gestion des Risques</h4>
                        <p>Cartographie des risques, excellence opérationnelle, conduite du changement</p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="border-icon"><figure class="icon-center"><img src="{{asset('assets/img/master/grow.png')}}" alt=""></figure></div>
                        <h4>Tax & Assistance Juridique</h4>
                        <p>Assistance fiscale, optimisation fiscale, relations avec l'administration</p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="border-icon"><figure class="icon-center"><img src="{{asset('assets/img/master/loan.png')}}" alt=""></figure></div>
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
                        <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{asset('assets/img/master/cost.png')}}" alt=""></figure> </div>
                        <div class="figure-caption">
                            <h4>Expertise Pluridisciplinaire</h4>
                            <p>Compétences qui couvrent les aspects financiers, stratégiques et opérationnels</p>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4 center-div">
                    <div class="front-thumbnail">
                        <figure class="box-pic"><a href="#"><img src="{{asset('assets/img/images/img3.jpg')}}" alt=""></a></figure> 
                        <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{asset('assets/img/master/deal.png')}}" alt=""></figure> </div>
                        <div class="figure-caption">
                            <h4>Équipes Expérimentées</h4>
                            <p>Des équipes intégrées, expérimentées et engagées à votre service</p>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="front-thumbnail">
                        <figure class="box-pic"><a href="#"><img src="{{asset('assets/img/images/img2.jpg')}}" alt=""></a></figure> 
                        <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{asset('assets/img/master/document.png')}}" alt=""></figure> </div>
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
                <div class="row">
                  <div class="team-slider">
                      <div class="row">
                          <div class="col-md-4">
                              <div class="team-card-3">
                                 <figure class="team-photo"><img src="{{asset('assets/img/images/profile.jpg')}}" alt=""></figure>
                                 <div class="caption">
                                    <h4>Ndongo K.A. CAMARA</h4>
                                    <p>Fondateur et Gérant</p>
                                 </div> 
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="team-card-3">
                                 <figure class="team-photo"><img src="{{asset('assets/img/images/profile.jpg')}}" alt=""></figure>
                                 <div class="caption">
                                    <h4>Gaoussou BAKAYOKO</h4>
                                    <p>Country Manager</p>
                                 </div> 
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="team-card-3">
                                 <figure class="team-photo"><img src="{{asset('assets/img/images/profile.jpg')}}" alt=""></figure>
                                 <div class="caption">
                                    <h4>Expert Comptable</h4>
                                    <p>Corporate Finance</p>
                                 </div> 
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="team-card-3">
                                 <figure class="team-photo"><img src="{{asset('assets/img/images/profile.jpg')}}" alt=""></figure>
                                 <div class="caption">
                                    <h4>Manager Conseil</h4>
                                    <p>Stratégie & RH</p>
                                 </div> 
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="team-card-3">
                                 <figure class="team-photo"><img src="{{asset('assets/img/images/profile.jpg')}}" alt=""></figure>
                                 <div class="caption">
                                    <h4>Consultante Junior</h4>
                                    <p>Conseil Finance</p>
                                 </div> 
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="team-card-3">
                                 <figure class="team-photo"><img src="{{asset('assets/img/images/profile.jpg')}}" alt=""></figure>
                                 <div class="caption">
                                    <h4>Analyste Financier</h4>
                                    <p>Finance Confirmé</p>
                                 </div> 
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
                <div class="row">                    
                    <div class="col-sm-3 col-md-3">
                        <div class="counter-statistics">
                            <div class="counter">+150</div>
                            <h5>PROJETS RÉALISÉS</h5>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="counter-statistics">
                            <div class="counter">200</div>
                            <h5>CLIENTS SATISFAITS</h5>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="counter-statistics">
                            <div class="counter">30</div>
                            <h5>ANNÉES D'EXPÉRIENCE</h5>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="counter-statistics">
                            <div class="counter">15</div>
                            <h5>ANNÉES AU SÉNÉGAL</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="testimonials-box">
                <div class="main-gallery">
                    <div class="gallery-cell">
                       <div class="testimonial-section">
                        <div class="avatar"><img src="{{asset('assets/img/images/avatar1.jpg')}}" alt=""></div>
                        <h3 class="autor">Client PME</h3>
                        <h6 class="testimonial-title">NKAC Consulting fortement recommandé!</h6>
                        <p class="quote">"Grâce à NKAC Consulting, nous avons pu structurer efficacement notre levée de fonds et optimiser notre organisation. Leur expertise pluridisciplinaire et leur accompagnement de proximité ont été déterminants pour notre réussite."</p>
                      </div>
                    </div>
                    <div class="gallery-cell">
                       <div class="testimonial-section">
                        <div class="avatar"><img src="{{asset('assets/img/images/avatar5.jpg')}}" alt=""></div>
                        <h3 class="autor">Directeur Financier</h3>
                        <h6 class="testimonial-title">Un partenaire de confiance!</h6>
                        <p class="quote">"L'équipe de NKAC Consulting a su nous accompagner dans la mise en place de nos processus comptables et de contrôle interne. Leur professionnalisme et leur pragmatisme nous ont permis d'améliorer significativement notre performance."</p>
                      </div>
                    </div>
                    <div class="gallery-cell">
                       <div class="testimonial-section">
                        <div class="avatar"><img src="{{asset('assets/img/images/avatar3.jpg')}}" alt=""></div>
                        <h3 class="autor">Chef d'Entreprise</h3>
                        <h6 class="testimonial-title">Expertise reconnue!</h6>
                        <p class="quote">"NKAC Consulting nous a aidés à optimiser notre situation fiscale et à sécuriser nos opérations. Leur connaissance approfondie de l'environnement réglementaire ouest-africain est un véritable atout."</p>
                      </div>
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
                        <h5><a href="#">LIRE LA SUITE</a></h5>
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
                        <h5><a href="#">LIRE LA SUITE</a></h5>
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
@endsection


@section('scripts')
    <script src="{{asset('assets/js/team.slider.js')}}"></script>
@endsection