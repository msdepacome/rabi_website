<!DOCTYPE html>
<html lang="fr">

<head>
    @include('user_frontend.layouts.head')
    <style>
        /* --------------------------------------- */
        /* Styles pour la section Problem Form */
        /* --------------------------------------- */

        .problem-form {
            padding: 100px 0;
            background-color: #f8f9fa;
            position: relative;
            overflow: hidden;
        }

        .problem-form::before {
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

        .problem-form .container {
            position: relative;
            z-index: 1;
        }

        .problem-one__form-inner,
        .problem-one__info {
            background-color: #fff !important;
            padding: 45px;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08) !important;
            border: 1px solid #e9ecef !important;
            margin-bottom: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .problem-one__form-inner:hover,
        .problem-one__info:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
        }

        /* --------------------------------------- */
        /* Styles du Formulaire */
        /* --------------------------------------- */

        .problem-one__form .block-title h3 {
            color: #2a2a2a;
            margin-bottom: 25px;
            font-weight: 700;
        }

        .problem-one__form .block-title p span {
            background-color: rgba(16, 91, 126, 0.15);
            color: #105B7E;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 10px;
        }

        /* Champs du formulaire */
        .problem-one__form input,
        .problem-one__form select,
        .problem-one__form textarea {
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

        .problem-one__form input::placeholder,
        .problem-one__form textarea::placeholder {
            color: #adb5bd;
            opacity: 1;
        }

        .problem-one__form input:focus,
        .problem-one__form textarea:focus,
        .problem-one__form select:focus {
            border-color: #105B7E !important;
            box-shadow: none !important;
        }

        /* Select spécifique */
        .problem-one__form select {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%236c757d' class='bi bi-chevron-down' viewBox='0 0 16 16'%3E%3Cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 1em 1em;
            padding-right: 3rem;
            cursor: pointer;
            min-height: 50px !important;
        }

        .problem-one__form select option {
            height: 60px !important;
            padding: 10px;
        }

        /* Readonly field */
        .problem-one__form input[readonly] {
            background-color: #e9ecef;
            cursor: not-allowed;
            box-shadow: none;
        }

        /* Textarea */
        .problem-one__form textarea {
            min-height: 130px;
            resize: vertical;
        }

        /* Bouton d'envoi */
        .problem-one__form .thm-btn {
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

        .problem-one__form .thm-btn:hover {
            background-image: linear-gradient(to right, #0d4c64, #106f98);
            box-shadow: 0 12px 20px rgba(16, 91, 126, 0.4);
            transform: translateY(-3px);
        }

        .problem-one__form .thm-btn:active {
            transform: translateY(-1px);
            box-shadow: 0 5px 10px rgba(16, 91, 126, 0.3);
        }

        /* --------------------------------------- */
        /* Bloc Info à droite ou dessous */
        /* --------------------------------------- */

        .problem-one__info {
            background-color: #fff !important;
            border-left: 5px solid #105B7E !important;
            border: 1px solid #e0e0e0 !important;
        }

        .problem-one__info .block-title h3 {
            color: #333 !important;
            margin-bottom: 10px;
        }

        .problem-one__info .block-title .block-title__text {
            font-size: 16px;
            color: #555 !important;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .problem-one__info h4 {
            font-size: 1.3rem;
            color: #105B7E !important;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px dashed #b0ccd8 !important;
        }

        .problem-one__info-list,
        .problem-benefits ul {
            list-style: none;
            padding-left: 0;
            margin-bottom: 30px;
        }

        .problem-one__info-list li,
        .problem-benefits ul li {
            margin-bottom: 15px;
            font-size: 16px;
            color: #333;
            display: flex;
            align-items: flex-start;
        }

        .problem-one__info-list li i {
            color: #105B7E;
            margin-right: 12px;
            font-size: 1.1em;
            margin-top: 3px;
        }

        .problem-one__info-list li span {
            font-weight: 600;
            margin-right: 5px;
            color: #1a1a1a;
        }

        .problem-benefits ul {
            list-style: disc;
            padding-left: 25px;
        }

        .problem-benefits ul li {
            display: list-item;
            color: #444;
        }

        .contact-info {
            margin-top: 30px;
            padding-top: 25px;
            border-top: 1px solid #dcecdc;
        }

        .c-file-upload-group {
}

.c-file-upload-group__label {
    font-weight: 500;
    color: #343a40;
}

.c-file-upload-group__input.form-control {
    padding: 0.75rem 1rem;
    border-radius: 0.375rem;
    border: 1px solid #ced4da;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.c-file-upload-group__input.form-control::file-selector-button {
    padding: 0.75rem 1rem;
    margin: -0.90rem -1rem;
    margin-inline-end: 1rem;
    color: #054f66;
    background-color: #eef7f0;
    border: none;
    border-inline-end: 1px solid #ced4da;
    border-radius: 0;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
}

.c-file-upload-group__input.form-control:hover::file-selector-button {
    background-color: #dceddd;
    color: #38768e;
}

.c-file-upload-group__input.form-control:focus {
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

.c-file-upload-group__help {
    margin-top: 0.5rem;
    font-size: 0.875em;
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

        <section class="page-header page-header__problem"
            style="background-image: url(assets/images/backgrounds/page-header-bg-1.jpg);">
            <div class="container">
                <h2 class="text-uppercase">Signaler un problème</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index-2.html">Accueil</a></li>
                    <li><span>Problème de collecte</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="problem-form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="" class="wow fadeInLeft problem-one__form" data-wow-duration="1500ms">
                            <div class="problem-one__form-inner">
                                <div class="block-title">
                                    <p><span>Formulaire de signalement</span></p>
                                    <h3>Signaler un problème de collecte</h3>
                                </div><!-- /.block-title -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="reference">Numéro d'abonné *</label>
                                        <input type="text" class="form-control" name="reference" id="reference"
                                            placeholder="Votre numéro d'abonné (ex: RABI-240101-123)" required>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-6">
                                        <label for="nom">Nom *</label>
                                        <input type="text" class="form-control" name="nom" id="nom"
                                            placeholder="Votre nom *" required>
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-6">
                                        <label for="telephone">Téléphone *</label>
                                        <input type="text" class="form-control" name="telephone" id="telephone"
                                            placeholder="Votre téléphone *" required>
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-12">
                                        <label for="type_probleme">Type de problème *</label>
                                        <select class="form-control" name="type_probleme" id="type_probleme" required>
                                            <option value="">-- Sélectionnez le type de problème --</option>
                                            <option value="non_collecte">Non-collecte à la date prévue</option>
                                            <option value="retard">Retard important dans la collecte</option>
                                            <option value="dechet_oublie">Déchets oubliés ou partiellement collectés
                                            </option>
                                            <option value="bac_endommage">Bac endommagé ou volé</option>
                                            <option value="autre">Autre problème</option>
                                        </select>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-12">
                                        <label for="date_probleme">Date du problème *</label>
                                        <input type="date" class="form-control" name="date_probleme"
                                            id="date_probleme" required>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-12">
                                        <label for="adresse">Adresse exacte du problème *</label>
                                        <input type="text" class="form-control" name="adresse" id="adresse"
                                            placeholder="Adresse exacte où le problème est survenu *" required>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-12">
                                        <label for="description">Description détaillée *</label>
                                        <textarea class="form-control" name="description" id="description"
                                            placeholder="Décrivez en détail le problème rencontré *" required></textarea>
                                    </div><!-- /.col-md-12 -->

                                   
                                    <div class="col-12 c-file-upload-group mb-4 mt-4"> <label for="problemPhotoInput"
                                            class="c-file-upload-group__label form-label">Photo du problème
                                            (optionnel)</label>
                                        <input type="file" class="c-file-upload-group__input form-control"
                                            name="photo" id="problemPhotoInput" accept="image/*">
                                        <small class="c-file-upload-group__help form-text text-muted">
                                            Joignez une photo illustrant le problème (max 5MB, formats: JPG, PNG, GIF).
                                        </small>
                                    </div>


                                    <div class="col-lg-12">
                                        <button type="submit" class="thm-btn">Envoyer le signalement</button>
                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.problem-one__form-inner -->
                        </form><!-- /.problem-one__form -->
                    </div><!-- /.col-lg-6 -->

                    <div class="col-lg-6">
                        <div class="problem-one__info">
                            <div class="block-title">
                                <p><span>Informations importantes</span></p>
                                <h3>Comment signaler un problème</h3>
                                <div class="block-title__text">
                                    Utilisez ce formulaire pour nous informer de tout problème concernant notre service
                                    de collecte des déchets.
                                </div>
                            </div><!-- /.block-title -->
                            <div class="problem-one__info-content">

                                <div class="problem-benefits">
                                    <h4>Types de problèmes à signaler :</h4>
                                    <ul>
                                        <li>Collecte manquée à la date prévue</li>
                                        <li>Retard important dans le passage du camion</li>
                                        <li>Déchets oubliés ou partiellement collectés</li>
                                        <li>Bacs endommagés ou volés</li>
                                        <li>Problèmes avec le personnel de collecte</li>
                                        <li>Tout autre problème concernant notre service</li>
                                    </ul>
                                </div>

                                <h4>Ce qui se passe après votre signalement :</h4>
                                <div class="problem-one__info-list">
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        Vous recevrez un accusé de réception par SMS/email
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        Notre équipe traitera votre demande sous 24h (48h les weekends)
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        Nous vous informerons des mesures prises pour résoudre le
                                        problème
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle"></i>
                                        Si nécessaire, une équipe sera envoyée pour une intervention
                                    </li>
                                </div>

                                <div class="contact-info">
                                    <h4>Contact urgent :</h4>
                                    <p>Pour les problèmes nécessitant une intervention immédiate (déversement dangereux,
                                        accident, etc.), contactez-nous directement :</p>
                                    <p><i class="fas fa-phone"></i> <a href="tel:+243999000111">+243 999 000 111</a>
                                        (24h/24)</p>
                                    <p><i class="fas fa-envelope"></i> <a
                                            href="mailto:urgence@rabisarl.com">urgence@rabisarl.com</a></p>
                                </div>
                            </div><!-- /.problem-one__info-content -->
                        </div><!-- /.problem-one__info -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.problem-form -->

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
    
        // Définit la date du jour comme valeur par défaut
        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date();
            const dateStr = today.toISOString().split('T')[0];
            document.getElementById('date_probleme').value = dateStr;
        });
    </script>

</body>

</html>
