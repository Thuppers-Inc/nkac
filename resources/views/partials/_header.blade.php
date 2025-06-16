    {{-- <div class="top-header">
        <div class="container">
            <div class="top-header-left">
                <div class="inner-header-left"><p><a href="careers.html">CAREERS</a> </p></div>
                <div class="inner-header-left"><p><a href="pricing.html">PRICING</a> </p></div>
                <div class="inner-header-left"><p><a href="faq.html">FAQ</a> </p></div>
            </div>
            <div class="top-header-social">
                <div class="inner-header-social"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
                <div class="inner-header-social"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
                <div class="inner-header-social"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
                <div class="inner-header-social"><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></div>
            </div>
        </div>
    </div> --}}
    <header>
        <div class="container">
            <div class="header-left">
                <figure class="brand" style="margin-top: -13px;">
                    {{-- <img src="{{asset('assets/img/logo.png')}}" alt="Logo NKAC"> --}}
                    <a href="index.html">
                        <img src="{{asset('assets/img/logo.png')}}" alt="Logo NKAC" style="height: 80px;">   
                    </a>
                </figure> 
            </div>
            <div class="top-location">
                <div class="address">
                    <figure class="address-icon">
                        <img src="{{asset('assets/img/master/address.png')}}" alt="Adresse">
                    </figure>
                    <h6>Adresse :</h6>
                    <p>Angré 8ème Tranche</p>
                </div>
                <div class="email">
                    <figure class="mail-icon">
                        <img src="{{asset('assets/img/master/mail.png')}}" alt="Email">
                    </figure>
                    <h6>Email :</h6>
                    <p>contact@nkac-wa.com</p>
                </div>
                <div class="phone">
                    <figure class="phone-icon">
                        <img src="{{asset('assets/img/master/phone.png')}}" alt="Téléphone">
                    </figure>
                    <h6>Téléphone :</h6>
                    <p>+225 07 57 40 39 60</p>
                </div>
            </div>
        </div>
    </header> 
    
    <nav>
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html"><div class="logo-brand"><img src="{{asset('assets/img/logo.png')}}" alt=""></div></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home.index')}}">Accueil</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about.index')}}">À propos</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Nos services <span class="caret-drop"></span></a>
                            <ul class="dropdown-menu">
                                <li class="divider-top"></li>
                                <li><a class="dropdown-item" href="{{route('services')}}">Tous les services</a></li>
                                <li class="divider"></li>
                                <li><a class="dropdown-item" href="audit.html">Audit & Contrôle</a></li>
                                <li class="divider"></li>
                                <li><a class="dropdown-item" href="comptabilite.html">Comptabilité</a></li>
                                <li class="divider"></li>
                                <li><a class="dropdown-item" href="fiscalite.html">Fiscalité</a></li>
                                <li class="divider"></li>
                                <li><a class="dropdown-item" href="finance.html">Conseil financier</a></li>
                                <li class="divider"></li>
                                <li><a class="dropdown-item" href="formation.html">Formations professionnelles</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('blog.index')}}">Blog</a>
                        </li>

                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Ressources <span class="caret-drop"></span></a>
                            <ul class="dropdown-menu">
                                <li class="divider-top"></li>
                                <li><a class="dropdown-item" href="blogs.html">Articles</a></li>
                                <li class="divider"></li>
                                <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                                <li class="divider"></li>
                                <li><a class="dropdown-item" href="equipe.html">Notre équipe</a></li>
                                <li class="divider"></li>
                                <li><a class="dropdown-item" href="carriere.html">Recrutement</a></li>
                                <li class="divider"></li>
                                <li><a class="dropdown-item" href="tarifs.html">Nos tarifs</a></li>
                            </ul>
                        </li> --}}

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact</a>
                        </li>

                    </ul>

                    <form class="form-inline my-2 my-lg-0">
                        <button class="btn btn-nav" type="submit">Demander un devis</button>
                    </form>
                </div>

            </nav>
        </div>
    </nav>