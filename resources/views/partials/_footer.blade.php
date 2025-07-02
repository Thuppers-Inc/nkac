<footer>
    <div class="container">
        <div class="row">

            <!-- Colonne 1 : Présentation -->
            <div class="col-lg-4">
                <div class="footer-col">
                    <figure class="footer-logo" style="margin-top: -18px;">
                        <a href="index.html"><img src="{{asset('assets/img/logo.png')}}" alt="NKAC Consulting Logo"></a>
                    </figure>
                    <p>NKAC Consulting West Africa vous accompagne dans vos démarches comptables, fiscales, financières et en audit grâce à une expertise reconnue en Afrique de l'Ouest.</p>
                    <p><a class="btn btn-custom" href="about.html" role="button">En savoir plus</a></p>
                </div>  
            </div>

            <!-- Colonne 2 : Liens rapides -->
            <div class="col-lg-2">
                <div class="footer-col">  
                    <h5>Liens utiles</h5> 
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fa fa-angle-right"></i>&nbsp; <a href="about.html">À propos</a></li>
                        <li class="list-group-item"><i class="fa fa-angle-right"></i>&nbsp; <a href="services.html">Services</a></li>
                        <li class="list-group-item"><i class="fa fa-angle-right"></i>&nbsp; <a href="blogs.html">Articles</a></li>
                        <li class="list-group-item"><i class="fa fa-angle-right"></i>&nbsp; <a href="carriere.html">Recrutement</a></li>
                        <li class="list-group-item"><i class="fa fa-angle-right"></i>&nbsp; <a href="faq.html">FAQ</a></li>
                    </ul>
                </div>
            </div>

            <!-- Colonne 3 : Coordonnées -->
            <div class="col-lg-3">
                <div class="footer-col"> 
                    <h5>Coordonnées</h5>
                    <div class="location-box">
                        <figure class="bottom-location-icon"><img src="{{ asset('assets/img/master/location-footer.png') }}" alt=""></figure>
                        <h6>Adresse :</h6>
                        <p>Angré 8ème Tranche</p>
                    </div>
                    
                    <div class="location-box location-phone">
                        <figure class="bottom-location-icon"><img src="{{ asset('assets/img/master/call-footer.png') }}" alt=""></figure>
                        <h6>Téléphone :</h6>
                        <p>+2250757403960</p>
                    </div>
                </div>
            </div>

            <!-- Colonne 4 : Newsletter -->
            <div class="col-lg-3">
                <div class="footer-col last-col">
                    <h5>Newsletter</h5>
                    <p>Inscrivez-vous pour recevoir nos actualités, conseils et ressources professionnelles directement par email.</p>
                    <div class="newsletter-box">
                        <form action="#" method="post" name="sign-up">
                            <input type="email" class="input" id="email" name="email" placeholder="Votre adresse email" required>
                            <input type="submit" class="button" id="submit" value="S'inscrire">
                        </form>           
                    </div>
                    <p class="cursive">Votre adresse email restera confidentielle. Aucun spam garanti.</p>
                </div>  
            </div>
        </div>

        <hr class="footer">

        <!-- Bas de page -->
        <div class="bottom-footer">
            <div class="copytight">
                <p>© {{ date('Y') }} NKAC Consulting West Africa. Tous droits réservés.</p>
            </div>
            <div class="social-footer">
                <div class="social-items"><a href="#"><div class="icon-fa"><i class="fab fa-facebook-f" aria-hidden="true"></i></div></a></div>
                <div class="social-items"><a href="#"><div class="icon-fa"><i class="fab fa-twitter" aria-hidden="true"></i></div></a></div>
                <div class="social-items"><a href="#"><div class="icon-fa"><i class="fab fa-instagram" aria-hidden="true"></i></div></a></div>
                <div class="social-items"><a href="#"><div class="icon-fa"><i class="fas fa-rss" aria-hidden="true"></i></div></a></div>
            </div>
        </div>
    </div>
</footer>



<a href="#0" class="cd-top">Top</a>
<!-- ==============================================
JAVASCRIPTS
=============================================== -->
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/loader.js')}}"></script>
<script src="{{asset('assets/js/top.js')}}"></script>
<script src="{{asset('assets/js/jquery.isotope.pkgd.js')}}"></script>
<script src="{{asset('assets/js/filter.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/magnific.popup.gallery.js')}}"></script>
<script src="{{asset('assets/js/counter.js')}}"></script>    
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.js')}}"></script>
<script src="{{asset('assets/js/flickity.pkgd.min.js')}}"></script> 
<script src="{{asset('assets/js/testimonials.js')}}"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src="{{asset('assets/js/analytics.js')}}";m.parentNode.insertBefore(a,m)
    })(window,document,'script','{{asset("assets/js/analytics.js")}}','ga');
    ga('create', 'UA-101241150-1', 'auto');
    ga('send', 'pageview');
</script> 