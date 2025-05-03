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
                <h2 class="text-uppercase">Demande de collecte</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index-2.html">Accueil</a></li>
                    <li><span>Demande de collecte</span></li>
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
                                    <p><span>Formulaire de demande</span></p>
                                    <h3>Demande de collecte des déchets</h3>
                                </div><!-- /.block-title -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="reference">Référence (automatique)</label>
                                        <input type="text" class="form-control" name="reference" id="reference" placeholder="Référence (automatique)" readonly>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-12">
                                        <label for="reference">Numéro d'abonné *</label>
                                        <input type="text" class="form-control" name="reference" id="reference"
                                            placeholder="Votre numéro d'abonné (ex: RABI-240101-123)" required>
                                    </div><!-- /.col-md-12 -->
                                    
                                    <div class="col-md-6">
                                        <label for="nom">Nom *</label>
                                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom *" required>
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <label for="prenom">Prénom *</label>
                                        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom *" required>
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <label for="telephone">Téléphone *</label>
                                        <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Téléphone *" required>
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-12">
                                        <label for="adresse">Adresse complète *</label>
                                        <textarea class="form-control" name="adresse" id="adresse" placeholder="Adresse complète *" required></textarea>
                                    </div><!-- /.col-md-12 -->
                                   
                                 <div class="col-md-12">
                                        <label for="type_dechet">Type de déchets *</label>
                                        <select class="form-control" name="type_dechet" id="type_dechet" required>
                                            <option value="">-- Sélectionnez le type --</option>
                                            <option value="menager">Déchets ménagers</option>
                                            <option value="plastique">Plastiques</option>
                                            <option value="papier">Papiers/Cartons</option>
                                            <option value="verre">Verre</option>
                                            <option value="metal">Métaux</option>
                                            <option value="dangereux">Déchets dangereux</option>
                                            <option value="vegetal">Déchets végétaux</option>
                                            <option value="autres">Autres</option>
                                        </select>
                                    </div><!-- /.col-md-12 -->
                                    <div class="col-md-12">
                                        <label for="quantite">Quantité estimée *</label>
                                        <select class="form-control" name="quantite" id="quantite" required>
                                            <option value="">-- Sélectionnez la quantité --</option>
                                            <option value="petit">Petit sac (5-10kg)</option>
                                            <option value="moyen">Sac moyen (10-25kg)</option>
                                            <option value="grand">Grand sac (25-50kg)</option>
                                            <option value="conteneur">Conteneur (50kg+)</option>
                                        </select>
                                    </div><!-- /.col-md-12 -->
                                    <div class="col-md-12">
                                        <label for="date_collecte">Date souhaitée de collecte *</label>
                                        <input type="date" class="form-control" name="date_collecte" id="date_collecte" required min="">
                                    </div><!-- /.col-md-12 -->
                                    <div class="col-md-12">
                                        <label for="creneau_horaire">Créneau horaire préféré *</label>
                                        <select class="form-control" name="creneau_horaire" id="creneau_horaire" required>
                                            <option value="">-- Sélectionnez un créneau --</option>
                                            <option value="matin">Matin (8h-12h)</option>
                                            <option value="midi">Midi (12h-14h)</option>
                                            <option value="aprem">Après-midi (14h-18h)</option>
                                        </select>
                                    </div><!-- /.col-md-12 -->
                                    <div class="col-md-12">
                                        <label for="commentaires">Commentaires supplémentaires</label>
                                        <textarea class="form-control" name="commentaires" id="commentaires" placeholder="Précisez toute information utile..."></textarea>
                                    </div><!-- /.col-md-12 -->
                                    <div class="col-lg-12">
                                        <button type="submit" class="thm-btn">Demander la collecte</button>
                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.subscription-one__form-inner -->
                        </form><!-- /.subscription-one__form -->
                    </div><!-- /.col-lg-6 -->
                    
                    <div class="col-lg-6">
                        <div class="subscription-one__info">
                            <div class="block-title">
                                <p><span>Informations de collecte</span></p>
                                <h3>Comment ça marche ?</h3>
                                <div class="block-title__text">
                                    Notre service de collecte des déchets est rapide, efficace et respectueux de l'environnement.
                                    Voici comment procéder pour une demande de collecte.
                                </div>
                            </div><!-- /.block-title -->
                            <div class="subscription-one__info-content">
                              
                                <div class="subscription-benefits">
                                    <h4>Processus de collecte :</h4>
                                    <ul>
                                        <li>Remplissez le formulaire avec vos informations</li>
                                        <li>Précisez le type et la quantité de déchets</li>
                                        <li>Choisissez une date et un créneau horaire</li>
                                        <li>Notre équipe vous confirme la collecte par SMS/email</li>
                                        <li>Préparez vos déchets pour le jour J</li>
                                        <li>Notre équipe passe les récupérer à l'adresse indiquée</li>
                                    </ul>
                                </div>
                                
                                <h4>Tarifs de collecte :</h4>
                                <div class="subscription-one__info-list">
                                    <li><i class="fas fa-check-circle"></i> <span>Déchets ménagers:</span> À partir de 5$</li>
                                    <li><i class="fas fa-check-circle"></i> <span>Plastiques/Papiers:</span> À partir de 3$</li>
                                    <li><i class="fas fa-check-circle"></i> <span>Verre/Métaux:</span> À partir de 4$</li>
                                    <li><i class="fas fa-check-circle"></i> <span>Déchets dangereux:</span> Sur devis</li>
                                    <li><i class="fas fa-check-circle"></i> <span>Grandes quantités:</span> Tarifs dégressifs</li>
                                </div>
                                
                                <div class="contact-info">
                                    <p>Pour une demande urgente :</p>
                                    <p><i class="fas fa-phone"></i> <a href="tel:+243999000111">+243 999 000 111</a></p>
                                    <p><i class="fas fa-envelope"></i> <a href="mailto:collecte@rabisarl.com">collecte@rabisarl.com</a></p>
                                    <p><i class="fas fa-clock"></i> Service disponible du lundi au samedi, 8h-18h</p>
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
        // Génère une référence unique au chargement de la page
        document.addEventListener('DOMContentLoaded', function () {
            const referenceField = document.querySelector('input[name="reference"]');
            if (referenceField) {
                const prefix = "COL";
                const date = new Date();
                const y = date.getFullYear().toString().slice(-2);
                const m = String(date.getMonth() + 1).padStart(2, '0');
                const d = String(date.getDate()).padStart(2, '0');
                const h = String(date.getHours()).padStart(2, '0');
                const mi = String(date.getMinutes()).padStart(2, '0');
                const s = String(date.getSeconds()).padStart(2, '0');
                const rand = Math.floor(Math.random() * 900 + 100); // 3 chiffres aléatoires
                const reference = `${prefix}-${y}${m}${d}${h}${mi}${s}-${rand}`;
                referenceField.value = reference;
            }
            
            // Définit la date minimale pour la collecte (demain)
            const today = new Date();
            const tomorrow = new Date(today);
            tomorrow.setDate(tomorrow.getDate() + 1);
            
            const dd = String(tomorrow.getDate()).padStart(2, '0');
            const mm = String(tomorrow.getMonth() + 1).padStart(2, '0');
            const yyyy = tomorrow.getFullYear();
            const minDate = yyyy + '-' + mm + '-' + dd;
            
            document.getElementById('date_collecte').min = minDate;
        });
    </script>    

</body>

</html>