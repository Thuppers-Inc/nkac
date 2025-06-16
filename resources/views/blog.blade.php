@extends('layouts.master')
@section('title', 'Blog - NKAC Consulting West Africa')
@section('content')
    <div class="sections">
        <div class="container">
            <div class="pages-title">
                <h1>Notre Blog</h1>
                <p>Accueil &nbsp; > &nbsp; Blog</p>
            </div>
        </div>
    </div>
    
    <section>
        <div class="container">
            <div class="row">
              <div class="col-lg-9">
                  <div class="posts-list">
                    <div class="post-preview-image">
                      <figure><img src="{{asset('assets/img/images/img13.jpg')}}" alt=""></figure>
                      <div class="date-label">
                        <h6>20 NOV. 2024</h6>
                      </div>
                    </div>  
                    <div class="fig-caption">
                        <h3>Optimisation fiscale en zone OHADA : Guide pratique 2024</h3>
                        <div class="post-preview-details">
                           <p>Par: Gaoussou BAKAYOKO &nbsp; / &nbsp; fiscalité, optimisation &nbsp; / &nbsp; 45 Commentaires </p> 
                        </div>
                        <p>L'optimisation fiscale en zone OHADA nécessite une connaissance approfondie de la réglementation locale. Découvrez les stratégies légales pour réduire votre charge fiscale tout en restant conforme aux exigences réglementaires ivoiriennes et ouest-africaines...</p>
                        <a href="#" class="btn btn-custom btn-sm">LIRE LA SUITE</a>
                    </div>
                  </div>
                  <div class="posts-list">
                    <div class="post-preview-image">
                      <figure><img src="{{asset('assets/img/images/img10.jpg')}}" alt=""></figure>
                      <div class="date-label">
                        <h6>15 NOV. 2024</h6>
                      </div>
                    </div>  
                    <div class="fig-caption">
                        <h3>Gestion des risques financiers pour les PME africaines</h3>
                        <div class="post-preview-details">
                           <p>Par: Expert NKAC &nbsp; / &nbsp; gestion des risques, PME &nbsp; / &nbsp; 38 Commentaires </p> 
                        </div>
                        <p>La gestion des risques est cruciale pour la survie des PME en Afrique de l'Ouest. Notre guide pratique vous présente les meilleures méthodes de cartographie des risques et les outils pour protéger votre entreprise contre les aléas économiques...</p>
                        <a href="#" class="btn btn-custom btn-sm">LIRE LA SUITE</a>
                    </div>
                  </div>
                  <div class="posts-list">
                    <div class="post-preview-image">
                      <figure><img src="{{asset('assets/img/images/img11.jpg')}}" alt=""></figure>
                      <div class="date-label">
                        <h6>12 NOV. 2024</h6>
                      </div>
                    </div>  
                    <div class="fig-caption">
                        <h3>Levée de fonds en Côte d'Ivoire : Tendances et opportunités</h3>
                        <div class="post-preview-details">
                           <p>Par: Ndongo K.A. CAMARA &nbsp; / &nbsp; financement, levée de fonds &nbsp; / &nbsp; 62 Commentaires </p> 
                        </div>
                        <p>Le marché ivoirien offre de nombreuses opportunités pour les entrepreneurs en quête de financement. Analysons les tendances actuelles, les sources de financement disponibles et les stratégies pour réussir sa levée de fonds...</p>
                        <a href="#" class="btn btn-custom btn-sm">LIRE LA SUITE</a>
                    </div>
                  </div>
                  <div class="posts-list">
                    <div class="post-preview-image">
                      <figure><img src="{{asset('assets/img/images/img12.jpg')}}" alt=""></figure>
                      <div class="date-label">
                        <h6>10 NOV. 2024</h6>
                      </div>
                    </div>  
                    <div class="fig-caption">
                        <h3>Externalisation de la direction financière : Avantages et mise en œuvre</h3>
                        <div class="post-preview-details">
                           <p>Par: Équipe NKAC &nbsp; / &nbsp; direction financière, externalisation &nbsp; / &nbsp; 51 Commentaires </p> 
                        </div>
                        <p>L'externalisation de la direction financière devient une solution stratégique pour de nombreuses entreprises. Découvrez comment cette approche peut transformer votre gestion financière et optimiser vos performances...</p>
                        <a href="#" class="btn btn-custom btn-sm">LIRE LA SUITE</a>
                    </div>
                  </div>
                  <div class="posts-list">
                    <div class="post-preview-image">
                      <figure><img src="{{asset('assets/img/images/img13.jpg')}}" alt=""></figure>
                      <div class="date-label">
                        <h6>05 NOV. 2024</h6>
                      </div>
                    </div>  
                    <div class="fig-caption">
                        <h3>Contrôle interne et gouvernance d'entreprise en Afrique</h3>
                        <div class="post-preview-details">
                           <p>Par: Expert Conseil NKAC &nbsp; / &nbsp; contrôle interne, gouvernance &nbsp; / &nbsp; 29 Commentaires </p> 
                        </div>
                        <p>Une gouvernance solide et un contrôle interne efficace sont les piliers d'une entreprise performante. Explorez les meilleures pratiques adaptées au contexte africain et découvrez comment NKAC peut vous accompagner...</p>
                        <a href="#" class="btn btn-custom btn-sm">LIRE LA SUITE</a>
                    </div>
                  </div>
              </div>
              <div class="col-lg-3">
                <aside class="blog-right-side">
                      <div class="inner-sidebar">
                        <h5>Catégories</h5> 
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><a href="#">Fiscalité & Optimisation</a></li>
                          <li class="list-group-item"><a href="#">Gestion des Risques</a></li>
                          <li class="list-group-item"><a href="#">Financement & Investissement</a></li>
                          <li class="list-group-item"><a href="#">Direction Financière</a></li>
                          <li class="list-group-item"><a href="#">Formation & Conseil</a></li>
                          <li class="list-group-item"><a href="#">Audit & Contrôle</a></li>
                          <li class="list-group-item"><a href="#">Réglementation OHADA</a></li>
                        </ul>
                      </div>
                      <div class="inner-sidebar">
                          <h5>Articles Populaires</h5>
                          <hr class="left">
                          <div class="media-list">
                            <div class="media-post">
                                <figure class="media-thumb"><a href="#"><img src="{{asset('assets/img/images/thumb1.jpg')}}" alt=""></a></figure>
                              <div class="media-caption">
                                <h5><a href="#">Guide complet de la TVA en Côte d'Ivoire</a></h5> 
                                <p>6 Nov 2024</p>
                              </div>
                            </div>
                            <div class="media-post">
                              <figure class="media-thumb"><a href="#"><img src="{{asset('assets/img/images/thumb2.jpg')}}" alt=""></a></figure>
                              <div class="media-caption">
                                <h5><a href="#">Cash management pour PME africaines</a></h5> 
                                <p>18 Oct 2024</p>
                              </div>
                            </div>
                            <div class="media-post">
                              <figure class="media-thumb"><a href="#"><img src="{{asset('assets/img/images/thumb3.jpg')}}" alt=""></a></figure>
                              <div class="media-caption">
                                <h5><a href="#">Nouveaux défis de l'audit en zone UEMOA</a></h5> 
                                <p>18 Sep 2024</p>
                              </div>
                            </div>
                            <div class="media-post">
                              <figure class="media-thumb"><a href="#"><img src="{{asset('assets/img/images/thumb1.jpg')}}" alt=""></a></figure>
                              <div class="media-caption">
                                <h5><a href="#">Business plan pour investisseurs africains</a></h5> 
                                <p>12 Sep 2024</p>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="inner-sidebar">
                        <h5>Mots-clés</h5>
                        <hr class="left">
                        <div class="tags-lists">
                            <button class="btn btn-custom btn-nav" type="button"><i class="fa fa-tags" aria-hidden="true"></i>&nbsp; OHADA</button>
                            <button class="btn btn-custom btn-nav" type="button"><i class="fa fa-tags" aria-hidden="true"></i>&nbsp; Fiscalité</button>
                            <button class="btn btn-custom btn-nav" type="button"><i class="fa fa-tags" aria-hidden="true"></i>&nbsp; Audit</button>
                            <button class="btn btn-custom btn-nav" type="button"><i class="fa fa-tags" aria-hidden="true"></i>&nbsp; PME</button>
                            <button class="btn btn-custom btn-nav" type="button"><i class="fa fa-tags" aria-hidden="true"></i>&nbsp; Financement</button>
                            <button class="btn btn-custom btn-nav" type="button"><i class="fa fa-tags" aria-hidden="true"></i>&nbsp; Contrôle Interne</button>
                            <button class="btn btn-custom btn-nav" type="button"><i class="fa fa-tags" aria-hidden="true"></i>&nbsp; Afrique</button>
                            <button class="btn btn-custom btn-nav" type="button"><i class="fa fa-tags" aria-hidden="true"></i>&nbsp; Formation</button>
                        </div>
                    </div>

                    <div class="inner-sidebar">
                        <h5>Newsletter NKAC</h5>
                        <hr class="left">
                        <p>Recevez nos derniers conseils financiers et fiscaux directement dans votre boîte mail.</p>
                        <form class="newsletter-form">
                            <div class="form-group">
                                <input type="email" class="form-control custome-form" placeholder="Votre email">
                            </div>
                            <button type="submit" class="btn btn-custom btn-sm">S'ABONNER</button>
                        </form>
                    </div>

                    <div class="inner-sidebar">
                        <h5>Nos Services</h5>
                        <hr class="left">
                        <ul class="list-unstyled">
                            <li><a href="{{route('services')}}">• Ingénierie Financière</a></li>
                            <li><a href="{{route('services')}}">• Gestion des Risques</a></li>
                            <li><a href="{{route('services')}}">• Tax & Assistance Juridique</a></li>
                            <li><a href="{{route('services')}}">• Direction Financière</a></li>
                            <li><a href="{{route('services')}}">• Formation</a></li>
                        </ul>
                        <a href="{{route('contact')}}" class="btn btn-custom btn-sm">DEMANDER UN DEVIS</a>
                    </div>
                </aside>  
              </div>
            </div>
            <div class="pagination-box">
               <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1">Précédent</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Suivant</a>
                    </li>
                  </ul>
                </nav> 
            </div>
        </div>
    </section>
@endsection    