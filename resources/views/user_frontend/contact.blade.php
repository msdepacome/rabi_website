<!DOCTYPE html>
<html lang="fr">

<head>
    @include('user_frontend.layouts.head')
</head>

<body>
    @include('user_frontend.layouts.preloader')
    <!-- /.preloader -->
    <div class="page-wrapper">

        @include('user_frontend.layouts.topbar')
        <!-- /.topbar-one -->
        @include('user_frontend.layouts.header')
        <!-- /.header-one -->

        <section class="page-header page-header__contact"
            style="background-image: url(assets/images/backgrounds/page-header-bg-1.jpg);">
            <div class="container">
                <h2 class="text-uppercase">Contactez-nous</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index-2.html">Accueil</a></li>
                    <li><span>Contact</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="contact-one__map">
            <div class="container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                    class="google-map__home" allowfullscreen></iframe>
            </div><!-- /.container -->
        </section><!-- /.contact-one__map -->

        <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <form action=""
                            class="wow fadeInLeft contact-one__form contact-form-validated" data-wow-duration="1500ms">
                            <div class="contact-one__form-inner">
                                <div class="block-title">
                                    <p><span>Contactez-nous</span></p>
                                    <h3>Envoyez votre message</h3>
                                </div><!-- /.block-title -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" name="name" placeholder="Votre nom *">
                                    </div><!-- /.col-md-12 -->
                                    <div class="col-md-6">
                                        <input type="text" name="email" placeholder="Email *">
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <input type="text" name="phone" placeholder="Téléphone">
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-12">
                                        <input type="text" name="subject" placeholder="Sujet">
                                    </div><!-- /.col-md-12 -->
                                    <div class="col-lg-12">
                                        <textarea name="message" placeholder="Écrivez votre message..."></textarea>
                                    </div><!-- /.col-lg-12 -->
                                    <div class="col-lg-12">
                                        <button type="submit" class="thm-btn">Envoyer le message</button>
                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.contact-one__form-inner -->
                        </form><!-- /.contact-one__form -->
                    </div><!-- /.col-lg-6 -->

                    <div class="col-lg-6">
                        <div class="contact-one__info">
                            <div class="block-title">
                                <p><span>Contact rapide</span></p>
                                <h3>Besoin d’aide ? Contactez-nous</h3>
                                <div class="block-title__text">
                                    Nous offrons un service rapide d’enlèvement et de recyclage des déchets.
                                    Disponible pour nos clients professionnels 24h/24.
                                </div>
                            </div><!-- /.block-title -->
                            <div class="contact-one__info-content">
                                <p class="contact-one__info-tagline">Ramassage d'urgence des déchets :</p>
                                <h3><a href="tel:+243 999 000 111">+243 999 000 111</a></h3>
                                <ul class="contact-one__info-list list-unstyled">
                                    <li>
                                        <i class="wastey-icon-2"></i>
                                        <span>Adresse</span>
                                        154, Av. Route Kipopo, Quartier Golf Malela, Commune de Lubumbashi, RDC
                                        <br>
                                        Antenne : Avenue SAIO N°35, Quartier Ndendere, Commune d’Ibanda, Bukavu                                        
                                    </li>
                                    <li>
                                        <i class="wastey-icon-4"></i>
                                        <span>Téléphone</span>
                                       <a href="tel:+243-999-000-111">+243 999 000 111</a>                                    </a>
                                    </li>
                                    <li>
                                        <i class="wastey-icon-3"></i>
                                        <span>Heures de bureau :</span>
                                        Lun - Sam : 9h00 à 20h00 <b>(Dim : Fermé)</b>
                                    </li>
                                </ul><!-- /.contact-one__info-list -->
                                <div class="contact-one__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div><!-- /.contact-one__social -->
                            </div><!-- /.contact-one__info-content -->
                        </div><!-- /.contact-one__info -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->

        @include('user_frontend.layouts.footer')
        <!-- /.footer -->

    </div><!-- /.page-wrapper -->

    @include('user_frontend.layouts.scroll-to')
    <!-- /.scroll-to -->

    @include('user_frontend.layouts.side-menu__block')
    <!-- /.side-menu__block -->


    <!-- plugins Scripts -->
    @include('user_frontend.layouts.scripts-js')

</body>

</html>
