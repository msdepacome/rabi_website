<!DOCTYPE html>
<html lang="fr">

<head>
    @include('user_frontend.layouts.head')
</head>

<body>
    @include('user_frontend.layouts.preloader')
    <div class="page-wrapper">

        @include('user_frontend.layouts.topbar')
        @include('user_frontend.layouts.header')

        <section class="page-header page-header__contact"
            style="background-image: url(assets/images/backgrounds/page-header-bg-1.jpg);">
            <div class="container">
                <h2 class="text-uppercase">Présentation générale</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index-2.html">Accueil</a></li>
                    <li><span>Présentation générale</span></li>
                </ul>
            </div>
        </section>

        <section class="industries-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="industries-details__main">
                            <div class="industries-details__content">
                                <div class="block-title">
                                    <p><span>Présentation</span></p>
                                    <h3>RABI SARL : Une entreprise au service de l’efficacité</h3>
                                </div>

                                <p>La société <strong>RABI SARL</strong> est une société à responsabilité limitée fondée en 2014 par 
                                    <strong>Madame Brigitte - YOHALI OKEWE</strong>. Elle a son siège social au 
                                    <strong>154, Av. Route Kipopo, Quartier Golf Malela, Commune de Lubumbashi</strong>, en République Démocratique du Congo.</p>

                                <p>Depuis sa création, RABI SARL poursuit une mission claire : <em>« accroître et pérenniser la capacité opérationnelle de ses partenaires 
                                    grâce à des solutions adaptées »</em>. Elle œuvre pour créer de la valeur ajoutée et garantir la réussite à long terme de ses clients.</p>

                                <p>En réponse à la croissance de ses activités, RABI SARL a étendu sa présence à Bukavu, avec une antenne située 
                                    au <strong>35, Avenue Saio, Quartier Ndendere, Commune d’Ibanda</strong>.</p>

                                <div class="block-title">
                                    <p><span>Valeurs & Objectifs</span></p>
                                    <h3>Nos Fondements</h3>
                                </div>

                                <p><strong>Valeurs fondamentales :</strong></p>
                                <ul>
                                    <li>Intégrité</li>
                                    <li>Loyauté</li>
                                    <li>Qualité</li>
                                    <li>Ponctualité</li>
                                </ul>

                                <p><strong>Objectifs :</strong></p>
                                <ul>
                                    <li><strong>But :</strong> Créer de la valeur pour les partenaires</li>
                                    <li><strong>Vision :</strong> Assurer la réussite pour tous</li>
                                    <li><strong>Mission :</strong> Apporter des solutions durables et adaptées aux besoins</li>
                                </ul>

                                <p>Grâce à son expertise et à la qualité de ses prestations, RABI SARL se positionne comme un partenaire de confiance 
                                    pour ses clients en RDC et à l’étranger.</p>

                                <div class="block-title">
                                    <p><span>Contacts</span></p>
                                </div>
                                <p><strong>Adresse :</strong> 154, Route Kipopo, Golf Malela, Lubumbashi / 35, Av. Saio, Bukavu</p>
                                <p><strong>Téléphones :</strong> +243 991 572 091 / +234 811 463 661 / +243 825 525 537</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="industries-sidebar">
                            <div class="industries-sidebar__single">
                                <ul class="industries-sidebar__categories list-unstyled">
                                    <li class="active"><a href="#">Présentation générale</a></li>
                                    <li><a href="/nos-services">Nos services</a></li>
                                    <li><a href="/notre-equipe">Notre équipe</a></li>
                                    <li><a href="/nous-contacter">Contact</a></li>
                                </ul>
                            </div>

                            <div class="industries-sidebar__single industries-sidebar__cta thm-black-bg text-center">
                                <div class="industries-sidebar__cta-icon">
                                    <img src="assets/images/shapes/industries-icon-1-1.png" alt="">
                                </div>
                                <h3>Contactez RABI SARL</h3>
                                <p><strong><a href="tel:+243991572091">+243 991 572 091</a></strong></p>
                                <p><a href="mailto:contact@rabisarl.com">Email : contact@rabisarl.com</a></p>
                                <a href="/contact" class="thm-btn">Nous contacter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('user_frontend.layouts.footer')
    </div>

    @include('user_frontend.layouts.scroll-to')
    @include('user_frontend.layouts.side-menu__block')
    @include('user_frontend.layouts.scripts-js')

</body>

</html>
