@extends('layouts.master')
@section('title', 'Nos Services - NKAC Consulting West Africa')
@section('content')
    <div class="sections">
        <div class="container">
            <div class="pages-title">
                <h1>Nos Services</h1>
                <p>Accueil &nbsp; > &nbsp; Services</p>
            </div>
        </div>
    </div>
    
    <section>
        
        <div class="container">
            <div class="section-title">
                <h2>Solutions Financières & Conseil</h2>
                <hr class="center">
                <p>Des prestations de conseil à la carte, adaptées à votre niveau d'accompagnement</p>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4 all-services">
                <div class="front-thumbnail">
                    <figure class="box-pic"><a href="#"><img src="{{asset('assets/img/images/service-1.jpg')}}" alt=""></a></figure> 
                    <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{asset('assets/img/master/cost.png')}}" alt=""></figure> </div>
                    <div class="figure-caption">
                        <h4>Ingénierie Financière</h4>
                        <p>Évaluation d'entreprises, structuration de levée de fonds, business plan et commissariat aux apports</p>
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 all-services">
                <div class="front-thumbnail">
                    <figure class="box-pic"><a href="#"><img src="{{asset('assets/img/images/service-2.jpg')}}" alt=""></a></figure> 
                    <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{asset('assets/img/master/deal.png')}}" alt=""></figure> </div>
                    <div class="figure-caption">
                        <h4>Organisation & Gestion des Risques</h4>
                        <p>Cartographie des risques, excellence opérationnelle, conduite du changement</p>
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 all-services responsive-center">
                <div class="front-thumbnail">
                    <figure class="box-pic"><a href="#"><img src="{{asset('assets/img/images/service-3.jpg')}}" alt=""></a></figure> 
                    <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{asset('assets/img/master/document.png')}}" alt=""></figure> </div>
                    <div class="figure-caption">
                        <h4>Tax & Assistance Juridique</h4>
                        <p>Assistance fiscale, optimisation fiscale, relations avec l'administration</p>
                    </div>
                </div>
              </div>
             <div class="col-md-6 col-lg-4 all-services bottom-box responsive-center">
                <div class="front-thumbnail">
                    <figure class="box-pic"><a href="#"><img src="{{asset('assets/img/images/service-4.jpg')}}" alt=""></a></figure> 
                    <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{asset('assets/img/master/loan.png')}}" alt=""></figure> </div>
                    <div class="figure-caption">
                        <h4>Direction Financière</h4>
                        <p>Externalisation DAF, audit comptable, contrôle de gestion</p>
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 all-services bottom-box">
                <div class="front-thumbnail">
                    <figure class="box-pic"><a href="#"><img src="{{asset('assets/img/images/service-5.jpg')}}" alt=""></a></figure> 
                    <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{asset('assets/img/master/saved.png')}}" alt=""></figure> </div>
                    <div class="figure-caption">
                        <h4>Formation</h4>
                        <p>Cash management, contrôle de gestion, comptabilité, risk management</p>
                    </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 all-services bottom-box last-box">
                <div class="front-thumbnail">
                    <figure class="box-pic"><a href="#"><img src="{{asset('assets/img/images/service-6.jpg')}}" alt=""></a></figure> 
                    <div class="rounded-circle"><figure class="center-circle-icon"><img src="{{asset('assets/img/master/grow.png')}}" alt=""></figure> </div>
                    <div class="figure-caption">
                        <h4>Conseil Stratégique</h4>
                        <p>Planification stratégique, excellence opérationnelle, accompagnement de proximité</p>
                    </div>
                </div>
              </div>
            </div>
        </div>

        <!-- Détails des services -->
        <div class="container">
            <div class="section-title">
                <h2>Détails de Nos Services</h2>
                <hr class="center">
                <p>Une expertise complète pour tous vos besoins</p>
            </div>
            
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h3>🏢 Ingénierie Financière</h3>
                    <ul class="list-unstyled">
                        <li>• Évaluation d'entreprises et d'actifs</li>
                        <li>• Structuration de levée de fonds</li>
                        <li>• Réalisation de Business Plan</li>
                        <li>• Commissariat aux apports, à la fusion et à la scission</li>
                        <li>• Assistance à la production de reportings (Tableaux de bord, comptes de résultats, tableaux de flux de trésorerie)</li>
                        <li>• Modélisation Financière</li>
                        <li>• Affacturage et Financement d'entreprise</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <h3>⚖️ Organisation et Gestion des Risques (OGR)</h3>
                    <ul class="list-unstyled">
                        <li>• Cartographie des risques</li>
                        <li>• Élaboration de manuels de procédures</li>
                        <li>• Couverture du risque de change et de devises</li>
                        <li>• Structuration & Excellence opérationnelle</li>
                        <li>• Conduite du changement</li>
                        <li>• Planification stratégique</li>
                    </ul>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-6">
                    <h3>📋 Tax & Assistance Juridique</h3>
                    <ul class="list-unstyled">
                        <li>• Assistance juridique et fiscale à la création</li>
                        <li>• Vérification du respect de la réglementation fiscale</li>
                        <li>• Identification des opportunités d'optimisation fiscale</li>
                        <li>• Diagnostic de situation fiscale</li>
                        <li>• Relations avec l'administration fiscale</li>
                        <li>• Pack droit des sociétés, contrats, travail</li>
                        <li>• Pack nouvelles technologies</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <h3>💼 Direction Financière</h3>
                    <ul class="list-unstyled">
                        <li>• Assistance aux opérations comptables complexes</li>
                        <li>• Externalisation des missions d'un DAF</li>
                        <li>• Revue des méthodes comptables</li>
                        <li>• Documentation des processus comptables</li>
                        <li>• Audit contractuel et d'acquisition</li>
                        <li>• Contrôle de gestion et analyse financière</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <h3>🎓 Formation</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li>• Cash management</li>
                                <li>• Gestion du BFR</li>
                                <li>• Amélioration de la trésorerie</li>
                                <li>• Risk Management</li>
                                <li>• Gouvernance et SI</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li>• Comptabilité Générale, Analytique</li>
                                <li>• Contrôle de gestion</li>
                                <li>• Analyse financière</li>
                                <li>• Logiciels de gestion comptable/paie/immobilisations</li>
                                <li>• Gestion commerciale</li>
                            </ul>
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
                            <div class="counter">150+</div>
                            <h5>PROJETS RÉALISÉS</h5>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="counter-statistics">
                            <div class="counter">200+</div>
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
                            <div class="counter">5</div>
                            <h5>DOMAINES D'EXPERTISE</h5>
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
                        <h3 class="autor">Directeur PME</h3>
                        <h6 class="testimonial-title">Service d'ingénierie financière exceptionnel!</h6>
                        <p class="quote">"NKAC Consulting nous a accompagnés dans notre levée de fonds. Leur expertise en structuration financière et leur connaissance du marché ouest-africain ont été déterminantes pour le succès de notre opération."</p>
                      </div>
                    </div>
                    <div class="gallery-cell">
                       <div class="testimonial-section">
                        <div class="avatar"><img src="{{asset('assets/img/images/avatar5.jpg')}}" alt=""></div>
                        <h3 class="autor">CFO Multinationale</h3>
                        <h6 class="testimonial-title">Excellence en gestion des risques!</h6>
                        <p class="quote">"L'équipe NKAC a mis en place un système complet de gestion des risques dans notre organisation. Leur approche méthodologique et leur suivi rigoureux nous ont permis de sécuriser nos opérations."</p>
                      </div>
                    </div>
                    <div class="gallery-cell">
                       <div class="testimonial-section">
                        <div class="avatar"><img src="{{asset('assets/img/images/avatar3.jpg')}}" alt=""></div>
                        <h3 class="autor">Entrepreneur</h3>
                        <h6 class="testimonial-title">Conseil fiscal de qualité!</h6>
                        <p class="quote">"Grâce aux conseils de NKAC Consulting, nous avons optimisé notre situation fiscale et évité de nombreux risques. Leur connaissance approfondie de la réglementation OHADA est remarquable."</p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="section-title">
                <h2>Articles Récents</h2>
                <hr class="center">
                <p>Restez informés de l'actualité financière et réglementaire</p>
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
                        <h3><a href="#">Optimisation fiscale en zone OHADA</a></h3>
                        <p>Les meilleures stratégies d'optimisation fiscale pour les entreprises en Afrique de l'Ouest selon la réglementation en vigueur.</p>
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
                        <h3><a href="#">Gestion des risques pour les PME</a></h3>
                        <p>Comment mettre en place un système efficace de gestion des risques adapté aux petites et moyennes entreprises.</p>
                        <h5><a href="#">LIRE LA SUITE</a></h5>
                    </div>
                </div>  
              </div>
              <div class="col-lg-4">
                <div class="news-feed">
                  <div class="feed-box">
                    <figure class="feed-thumb"><a href="#"><img src="{{asset('assets/img/images/thumb1.jpg')}}" alt=""></a></figure>
                    <div class="post-caption">
                        <h5><a href="#">Nouveaux défis de l'audit en Côte d'Ivoire</a></h5>
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
                        <h5><a href="#">Financement des entreprises en Afrique</a></h5>
                        <p>Nov 11 2024</p>
                    </div>  
                  </div>
                </div>  
              </div>
            </div>
        </div>
    </section>
@endsection    