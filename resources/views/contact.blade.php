@extends('layouts.master')
@section('title', 'Contact - NKAC Consulting West Africa')
@section('content')
    <div class="sections-contact">
        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6886.6071963836575!2d-3.978886327999284!3d5.394387406469877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb8822b154b5%3A0x8c240badad889f06!2sNKAC%20CONSULTING%20WEST%20AFRICA!5e0!3m2!1sfr!2sci!4v1749664088627!5m2!1sfr!2sci" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            {{-- <iframe src="https://snazzymaps.com/embed/116270" width="100%" height="400px" style="border:none;"></iframe> --}}
        </div>
        <div class="container">
            <div class="pages-title">
                <h1>Contactez-Nous</h1>
                <p>Accueil &nbsp; > &nbsp; Contact</p>
            </div>
        </div>
    </div>
    
    <section>
        
        <div class="container contact-box">
            <div class="row">
              <div class="col-lg-5 contact-left">
                  <div class="contact-information">
                    <h2>Entrons en Contact</h2>
                    <p>Vous êtes PMEs, Entreprises de grandes tailles, Entrepreneurs ou encore Fonds d'investissement ? NKAC CONSULTING WEST AFRICA met à votre disposition toute son expertise pour assurer le succès de votre organisation.</p>
                    <hr class="contact">
                    <h4>🏢 Adresse</h4>
                    <p class="address">ABIDJAN COCODY ANGRE 8ÈME TRANCHE<br>Côte d'Ivoire</p>
                    
                    <h4>📞 Téléphone</h4>
                    <p class="phone">+225 07 57 40 39 60</p>
                    
                    <h4>📧 Email</h4>
                    <p class="email">gaoussou.bakayoko@nkac-wa.com</p>
                    <p class="email">contact@nkac-wa.com</p>
                    
                    <h4>🆔 Informations Légales</h4>
                    <p>IDU: CI-2021-0005398 X</p>
                    <p>RCCM: CI-ABJ-03-2021-B16-00055</p>
                    
                    <hr class="contact">
                    <h4>📱 Suivez-nous</h4>
                    <div class="social-contact"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
                    <div class="social-contact"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
                    <div class="social-contact"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></div>
                    <div class="social-contact"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></div>
                  </div>
              </div>
              <div class="col-lg-7 contact-right">
                <div class="contact-form">
                  <h3>Demandez un Devis Gratuit</h3>
                  <p>Décrivez-nous votre projet et nous vous répondrons dans les plus brefs délais.</p>
                  <form id="contact-form" method="post" action="#">
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="name" class="form-control custome-form" placeholder="Nom complet *" required="required" data-error="Le nom est requis.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_company" type="text" name="company" class="form-control custome-form" placeholder="Entreprise">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" class="form-control custome-form" placeholder="Adresse email *" required="required" data-error="Email valide requis.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_phone" type="tel" name="phone" class="form-control custome-form" placeholder="Téléphone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select id="form_service" name="service" class="form-control custome-form" required="required">
                                            <option value="">Sélectionnez un service *</option>
                                            <option value="ingenierie-financiere">Ingénierie Financière</option>
                                            <option value="gestion-risques">Organisation & Gestion des Risques</option>
                                            <option value="tax-juridique">Tax & Assistance Juridique</option>
                                            <option value="direction-financiere">Direction Financière</option>
                                            <option value="formation">Formation</option>
                                            <option value="autre">Autre (préciser dans le message)</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" class="form-control custome-form" placeholder="Décrivez votre projet ou vos besoins *" rows="5" required="required" data-error="Veuillez décrire votre projet."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-send">
                                <p><input type="submit" class="btn btn-custom btn-custom-small" value="ENVOYER LA DEMANDE"></p>
                                <small class="text-muted">* Champs obligatoires</small>
                            </div>
                        </div>
                    </form>
                </div>

              </div>
            </div>

            <!-- Section des services d'urgence -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <h4>🚨 Service d'Urgence</h4>
                        <p>Pour les situations urgentes (audit, contrôle fiscal, assistance juridique d'urgence), contactez-nous directement au <strong>+225 07 57 40 39 60</strong>. Nous intervenons dans les plus brefs délais.</p>
                    </div>
                </div>
            </div>

        </div>
       
    </section>
@endsection    