@extends('layouts.master')

@section('title', $service['title'] . ' - NKAC CONSULTING WA')

@section('meta_description', $service['description'])

@section('meta_keywords', 'conseil financier, audit, expertise comptable, formation, fiscalité, OHADA, ingénierie financière')

@section('content')
    <!-- Section titre de page -->
    <div class="sections">
        <div class="container">
            <div class="pages-title">
                <h1>{{ $service['title'] }}</h1>
                <p>Accueil &nbsp; > &nbsp; Services &nbsp; > &nbsp; {{ $service['title'] }}</p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <!-- Sidebar des services -->
            <div class="col-lg-3">
                <aside class="services">
                    <div class="inner-service-block">
                        <ul class="list-group">
                            @foreach($services as $slug => $serviceItem)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="{{ route('services.show', $slug) }}">{{ $serviceItem['title'] }}</a> 
                                <span class="badge"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    
                    <!-- Section téléchargements -->
                    <div class="inner-service-block">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> &nbsp; Télécharger Brochure</a> 
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="#"><i class="fa fa-file-o" aria-hidden="true"></i> &nbsp; Fiche de Service</a> 
                            </li>
                        </ul>
                    </div>
                </aside> 
            </div>
            
            <!-- Contenu principal -->
            <div class="col-lg-9">
                <div class="service-description">
                    <h2>{{ $service['title'] }}</h2>
                    <hr class="left">
                    <p>{{ $service['description'] }}</p>

                    <figure class="service-pic"><img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}"></figure>
                    
                    <!-- Onglets des services -->
                    <div class="tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @foreach($service['tabs'] as $index => $tab)
                            <li class="nav-item">
                                <a class="nav-link {{ $index == 0 ? 'active' : '' }}" 
                                   id="{{ $tab['id'] }}-tab" 
                                   data-toggle="tab" 
                                   href="#{{ $tab['id'] }}" 
                                   role="tab" 
                                   aria-controls="{{ $tab['id'] }}" 
                                   aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
                                   {{ $tab['title'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            @foreach($service['tabs'] as $index => $tab)
                            <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}" 
                                 id="{{ $tab['id'] }}" 
                                 role="tabpanel" 
                                 aria-labelledby="{{ $tab['id'] }}-tab">
                                <figure class="thumbnail-tab"><img src="{{ asset($tab['image']) }}" alt="{{ $tab['title'] }}"></figure>
                                <p>{{ $tab['content'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Pourquoi nous faire confiance -->
    <div class="container-fluid inner-color">
        <div class="container">
            <div class="section-title">
                <h2>Pourquoi Choisir NKAC WA</h2>
                <hr class="center">
                <p>30 ans d'expérience cumulée • expertise locale • approche personnalisée</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="front-thumbnail">
                        <figure class="box-pic"><a href="#"><img src="{{ asset('assets/img/images/finances.jpg') }}" alt=""></a></figure> 
                        <div class="rounded-circle">
                            <figure class="center-circle-icon"><img src="{{ asset('assets/img/master/cost.png') }}" alt=""></figure> 
                        </div>
                        <div class="figure-caption">
                            <h4>Expertise Financière</h4>
                            <p>Maîtrise approfondie des enjeux financiers et fiscaux en Afrique de l'Ouest.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 center-div">
                    <div class="front-thumbnail">
                        <figure class="box-pic"><a href="#"><img src="{{ asset('assets/img/images/strategie.jpg') }}" alt=""></a></figure> 
                        <div class="rounded-circle">
                            <figure class="center-circle-icon"><img src="{{ asset('assets/img/master/deal.png') }}" alt=""></figure> 
                        </div>
                        <div class="figure-caption">
                            <h4>Approche Stratégique</h4>
                            <p>Conseil personnalisé adapté à vos enjeux business et sectoriels.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="front-thumbnail">
                        <figure class="box-pic"><a href="#"><img src="{{ asset('assets/img/images/formation.jpg') }}" alt=""></a></figure> 
                        <div class="rounded-circle">
                            <figure class="center-circle-icon"><img src="{{ asset('assets/img/master/document.png') }}" alt=""></figure> 
                        </div>
                        <div class="figure-caption">
                            <h4>Formation Continue</h4>
                            <p>Développement des compétences de vos équipes pour l'autonomie.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Articles récents -->
    <div class="container">
        <div class="section-title">
            <h2>Articles Récents</h2>
            <hr class="center">
            <p>Découvrez nos dernières publications et conseils d'experts</p>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="front-blogs">
                    <div class="thumb-pic">
                        <figure class="post-prev-thumb"><a href="#"><img src="{{ asset('assets/img/images/fiscalite.jpg') }}" alt=""></a></figure> 
                        <div class="date-label">
                            <h6>15 DÉC 2024</h6>
                        </div>
                    </div>
                    <div class="post-caption">
                        <h4><a href="#">Nouveautés fiscales 2025 en Afrique de l'Ouest</a></h4>
                        <p>Découvrez les principales évolutions réglementaires qui impacteront votre entreprise cette année.</p>
                        <h5><a href="#">LIRE PLUS</a></h5>
                    </div>
                </div>  
            </div>
            <div class="col-lg-4">
                <div class="front-blogs">
                    <div class="thumb-pic">
                        <figure class="post-prev-thumb"><a href="#"><img src="{{ asset('assets/img/images/img5.jpg') }}" alt=""></a></figure> 
                        <div class="date-label">
                            <h6>8 DÉC 2024</h6>
                        </div>
                    </div>
                    <div class="post-caption">
                        <h4><a href="#">Optimiser sa trésorerie en période d'incertitude</a></h4>
                        <p>Stratégies et outils pour une gestion optimale de votre trésorerie d'entreprise.</p>
                        <h5><a href="#">LIRE PLUS</a></h5>
                    </div>
                </div>  
            </div>
            <div class="col-lg-4">
                <div class="news-feed">
                    <div class="feed-box">
                        <figure class="feed-thumb"><a href="#"><img src="{{ asset('assets/img/images/thumb1.jpg') }}" alt=""></a></figure>
                        <div class="post-caption">
                            <h5><a href="#">Guide pratique des déclarations fiscales trimestrielles</a></h5>
                            <p>1 Déc 2024</p>
                        </div>  
                    </div>
                    <hr class="feed">
                    <div class="feed-box">
                        <figure class="feed-thumb"><a href="#"><img src="{{ asset('assets/img/images/thumb2.jpg') }}" alt=""></a></figure>
                        <div class="post-caption">
                            <h5><a href="#">Formation en contrôle de gestion : inscriptions ouvertes</a></h5>
                            <p>28 Nov 2024</p>
                        </div>  
                    </div>
                    <hr class="feed">
                    <div class="feed-box">
                        <figure class="feed-thumb"><a href="#"><img src="{{ asset('assets/img/images/thumb3.jpg') }}" alt=""></a></figure>
                        <div class="post-caption">
                            <h5><a href="#">Éviter les erreurs courantes en audit interne</a></h5>
                            <p>25 Nov 2024</p>
                        </div>  
                    </div>
                </div>  
            </div>
        </div>
    </div>

@endsection

@section('scripts')
<script>
    // Initialisation des onglets Bootstrap
    $(function () {
        $('#myTab a').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    })
</script>
@endsection
