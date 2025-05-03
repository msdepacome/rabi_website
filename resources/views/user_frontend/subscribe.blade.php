<!DOCTYPE html>
<html lang="fr">

<head>
    @include('user_frontend.layouts.head')
    <style>
/* --------------------------------------- */
/* Styles pour la section Subscription Form */
/* --------------------------------------- */

.subscription-form {
    padding: 100px 0;
    background-color: #f8f9fa;
    position: relative;
    overflow: hidden;
}

.subscription-form::before {
    content: '';
    position: absolute;
    top: -50px;
    left: -50px;
    width: 200px;
    height: 200px;
    background: linear-gradient(135deg, rgba(16, 91, 126, 0.1), rgba(16, 91, 126, 0));
    border-radius: 50%;
    z-index: 0;
    opacity: 0.6;
}

.subscription-form .container {
    position: relative;
    z-index: 1;
}

.subscription-one__form-inner,
.subscription-one__info {
    background-color: #fff !important;
    padding: 45px;
    border-radius: 15px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08) !important;
    border: 1px solid #e9ecef !important;
    margin-bottom: 30px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
}

.subscription-one__form-inner:hover,
.subscription-one__info:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
}

/* --------------------------------------- */
/* Styles du Formulaire */
/* --------------------------------------- */

.subscription-one__form .block-title h3 {
    color: #2a2a2a;
    margin-bottom: 25px;
    font-weight: 700;
}

.subscription-one__form .block-title p span {
    background-color: rgba(16, 91, 126, 0.15);
    color: #105B7E;
    padding: 5px 10px;
    border-radius: 5px;
    font-weight: 600;
    display: inline-block;
    margin-bottom: 10px;
}

/* Champs du formulaire */
.subscription-one__form input,
.subscription-one__form select,
.subscription-one__form textarea {
    background-color: #fdfdfd;
    border: 1px solid #ced4da;
    border-radius: 8px;
    padding: 15px 20px;
    font-size: 16px;
    color: #495057;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05);
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
    font-family: inherit;
    outline: none;
    appearance: none;
}

.subscription-one__form input::placeholder,
.subscription-one__form textarea::placeholder {
    color: #adb5bd;
    opacity: 1;
}

.subscription-one__form input:focus,
.subscription-one__form textarea:focus,
.subscription-one__form select:focus {
    border-color: #105B7E !important;
    box-shadow: none !important;
}

/* Select spécifique */
.subscription-one__form select {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%236c757d' class='bi bi-chevron-down' viewBox='0 0 16 16'%3E%3Cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 1rem center;
    background-size: 1em 1em;
    padding-right: 3rem;
    cursor: pointer;
    min-height: 50px !important;
}

.subscription-one__form select option {
    height: 60px !important;
    padding: 10px;
}

/* Readonly field */
.subscription-one__form input[readonly] {
    background-color: #e9ecef;
    cursor: not-allowed;
    box-shadow: none;
}

/* Textarea */
.subscription-one__form textarea {
    min-height: 130px;
    resize: vertical;
}

/* Bouton d'envoi */
.subscription-one__form .thm-btn {
    background-image: linear-gradient(to right, #105B7E, #1783b8);
    border: none;
    padding: 15px 40px;
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    border-radius: 50px;
    color: #ffffff;
    cursor: pointer;
    transition: all 0.4s ease;
    box-shadow: 0 8px 15px rgba(16, 91, 126, 0.3);
    display: inline-block;
    width: auto;
    margin-top: 15px;
}

.subscription-one__form .thm-btn:hover {
    background-image: linear-gradient(to right, #0d4c64, #106f98);
    box-shadow: 0 12px 20px rgba(16, 91, 126, 0.4);
    transform: translateY(-3px);
}

.subscription-one__form .thm-btn:active {
    transform: translateY(-1px);
    box-shadow: 0 5px 10px rgba(16, 91, 126, 0.3);
}

/* --------------------------------------- */
/* Bloc Info à droite ou dessous */
/* --------------------------------------- */

.subscription-one__info {
    background-color: #fff !important;
    border-left: 5px solid #105B7E !important;
    border: 1px solid #e0e0e0 !important;
}

.subscription-one__info .block-title h3 {
    color: #333 !important;
    margin-bottom: 10px;
}

.subscription-one__info .block-title .block-title__text {
    font-size: 16px;
    color: #555 !important;
    line-height: 1.7;
    margin-bottom: 30px;
}

.subscription-one__info h4 {
    font-size: 1.3rem;
    color: #105B7E !important;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 1px dashed #b0ccd8 !important;
}

.subscription-one__info-list,
.subscription-benefits ul {
    list-style: none;
    padding-left: 0;
    margin-bottom: 30px;
}

.subscription-one__info-list li,
.subscription-benefits ul li {
    margin-bottom: 15px;
    font-size: 16px;
    color: #333;
    display: flex;
    align-items: flex-start;
}

.subscription-one__info-list li i {
    color: #105B7E;
    margin-right: 12px;
    font-size: 1.1em;
    margin-top: 3px;
}

.subscription-one__info-list li span {
    font-weight: 600;
    margin-right: 5px;
    color: #1a1a1a;
}

.subscription-benefits ul {
    list-style: disc;
    padding-left: 25px;
}
.subscription-benefits ul li {
    display: list-item;
    color: #444;
}

.contact-info {
    margin-top: 30px;
    padding-top: 25px;
    border-top: 1px solid #dcecdc;
}

    </style>
</head>

<body>
    @include('user_frontend.layouts.preloader')
    <!-- /.preloader -->
    <div class="page-wrapper">

        @include('user_frontend.layouts.topbar')
        <!-- /.topbar-one -->
        @include('user_frontend.layouts.header')
        <!-- /.header-one -->

        <section class="page-header page-header__subscription"
            style="background-image: url(assets/images/backgrounds/page-header-bg-1.jpg);">
            <div class="container">
                <h2 class="text-uppercase">Abonnement</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index-2.html">Accueil</a></li>
                    <li><span>Abonnement</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="subscription-form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="" class="wow fadeInLeft subscription-one__form" data-wow-duration="1500ms">
                            <div class="subscription-one__form-inner">
                                <div class="block-title">
                                    <p><span>Formulaire d'abonnement</span></p>
                                    <h3>Devenez abonné RABI Sarl</h3>
                                </div><!-- /.block-title -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="matricule">Matricule (automatique)</label>
                                        <input type="text" class="form-control" name="matricule" id="matricule" placeholder="Matricule (automatique)" readonly>
                                    </div><!-- /.col-md-12 -->
                                    <div class="col-md-6">
                                        <label for="nom">Nom *</label>
                                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom *" required>
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <label for="prenom">Prénom *</label>
                                        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom *" required>
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-12">
                                        <label for="adresse">Adresse complète *</label>
                                        <textarea class="form-control" name="adresse" id="adresse" placeholder="Adresse complète *" required></textarea>
                                    </div><!-- /.col-md-12 -->
                                   
                                    <div class="col-md-12">
                                        <label for="province">Province *</label>
                                        <select class="form-control" name="province" id="province" required onchange="updateCities()">
                                            <option value="">-- Sélectionnez la province --</option>
                                            <option value="haut_katanga">Haut-Katanga</option>
                                            <option value="sud_kivu">Sud-Kivu</option>
                                        </select>
                                    </div><!-- /.col-md-12 -->
                                    
                                    <div class="col-md-12">
                                        <label for="ville">Ville *</label>
                                        <select class="form-control" name="ville" id="ville" required>
                                            <option value="">-- Sélectionnez la ville --</option>
                                        </select>
                                    </div><!-- /.col-md-12 -->
                                    
                                    <script>
                                        function updateCities() {
                                            const province = document.getElementById('province').value;
                                            const villeSelect = document.getElementById('ville');
                                            
                                            let cities = [];
                                    
                                            if (province === 'haut_katanga') {
                                                cities = [
                                                    "Lubumbashi", 
                                                    "Kamina", 
                                                    "Kasumbalesa", 
                                                    "Likasi", 
                                                    "Kolwezi"
                                                ];
                                            } else if (province === 'sud_kivu') {
                                                cities = [
                                                    "Bukavu", 
                                                    "Uvira", 
                                                    "Baraka", 
                                                    "Kamituga"
                                                ];
                                            }
                                    
                                            // Clear current options
                                            villeSelect.innerHTML = '<option value="">-- Sélectionnez la ville --</option>';
                                            
                                            // Add new options
                                            cities.forEach(function(city) {
                                                let option = document.createElement("option");
                                                option.value = city.toLowerCase().replace(/\s+/g, '_');
                                                option.textContent = city;
                                                villeSelect.appendChild(option);
                                            });
                                        }
                                    </script>
                                    
                                    <div class="col-md-12">
                                        <label for="commune">Commune *</label>
                                        <input type="text" class="form-control" name="commune" id="commune" placeholder="Commune *" required>
                                    </div><!-- /.col-md-12 -->
                                    <div class="col-md-12">
                                        <label for="quartier">Quartier *</label>
                                        <input type="text" class="form-control" name="quartier" id="quartier" placeholder="Quartier *" required>
                                    </div><!-- /.col-md-12 -->
                                    <div class="col-md-12">
                                        <label for="avenue">Avenue *</label>
                                        <input type="text" class="form-control" name="avenue" id="avenue" placeholder="Avenue *" required>
                                    </div><!-- /.col-md-12 -->
                                    <div class="col-md-12">
                                        <label for="type_client">Sélectionner le Tarif</label>
                                        <select class="form-control" name="type_client" id="type_client" required>
                                            <option value="">-- Sélectionnez le Tarif --</option>
                                            <option value="menage">Ménage (5$)</option>
                                            <option value="petite_boutique">Petite boutique (10$)</option>
                                            <option value="grande_boutique">Grande boutique ou alimentation (15$)</option>
                                            <option value="petite_entreprise">Petite entreprise (20$)</option>
                                            <option value="grande_entreprise">Grande entreprise (50$)</option>
                                            <option value="petit_hotel">Petit hôtel et bistro (30$)</option>
                                            <option value="grand_hotel">Grand hôtel (50$)</option>
                                        </select>
                                    </div><!-- /.col-md-12 -->
                                    <div class="col-md-6">
                                        <label for="telephone">Téléphone *</label>
                                        <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Téléphone *" required>
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-lg-12">
                                        <button type="submit" class="thm-btn">Souscrire à l'abonnement</button>
                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.subscription-one__form-inner -->
                        </form><!-- /.subscription-one__form -->
                    </div><!-- /.col-lg-6 -->
                    
                    <div class="col-lg-6">
                        <div class="subscription-one__info">
                            <div class="block-title">
                                <p><span>Informations d'abonnement</span></p>
                                <h3>Tarifs et avantages</h3>
                                <div class="block-title__text">
                                    Choisissez l'abonnement qui correspond à vos besoins de gestion des déchets.
                                    Nous offrons des solutions adaptées à chaque type de client.
                                </div>
                            </div><!-- /.block-title -->
                            <div class="subscription-one__info-content">
                              
                                <div class="subscription-benefits">
                                    <h4>Avantages de l'abonnement :</h4>
                                    <ul>
                                        <li>Service régulier et fiable</li>
                                        <li>Prix fixe sans surprise</li>
                                        <li>Priorité sur les demandes spéciales</li>
                                        <li>Accès au service client dédié</li>
                                        <li>Rapports mensuels de collecte</li>
                                    </ul>
                                </div>
                                <div class="contact-info">
                                    <p>Pour plus d'informations :</p>
                                    <p><i class="fas fa-phone"></i> <a href="tel:+243999000111">+243 999 000 111</a></p>
                                    <p><i class="fas fa-envelope"></i> <a href="mailto:abonnement@rabisarl.com">abonnement@rabisarl.com</a></p>
                                </div>
                            </div><!-- /.subscription-one__info-content -->
                        </div><!-- /.subscription-one__info -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.subscription-form -->

        @include('user_frontend.layouts.footer')
        <!-- /.footer -->

    </div><!-- /.page-wrapper -->

    @include('user_frontend.layouts.scroll-to')
    <!-- /.scroll-to -->

    @include('user_frontend.layouts.side-menu__block')
    <!-- /.side-menu__block -->


    <!-- plugins Scripts -->
    @include('user_frontend.layouts.scripts-js')

    <script>
        // Génère un matricule unique au chargement de la page
        document.addEventListener('DOMContentLoaded', function () {
            const matriculeField = document.querySelector('input[name="matricule"]');
            if (matriculeField) {
                const prefix = "RABI";
                const date = new Date();
                const y = date.getFullYear().toString().slice(-2);
                const m = String(date.getMonth() + 1).padStart(2, '0');
                const d = String(date.getDate()).padStart(2, '0');
                const h = String(date.getHours()).padStart(2, '0');
                const mi = String(date.getMinutes()).padStart(2, '0');
                const s = String(date.getSeconds()).padStart(2, '0');
                const rand = Math.floor(Math.random() * 900 + 100); // 3 chiffres aléatoires
                const matricule = `${prefix}-${y}${m}${d}${h}${mi}${s}-${rand}`;
                matriculeField.value = matricule;
            }
        });
    </script>    

</body>

</html>