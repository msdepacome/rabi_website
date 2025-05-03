<!DOCTYPE html>
<html lang="fr">

<head>
    @include('user_frontend.layouts.head')
    <style>
        /* --------------------------------------- */
        /* Styles pour la section Calendar */
        /* --------------------------------------- */
        
        .collection-calendar {
            padding: 80px 0;
            background-color: #f8f9fa;
            position: relative;
            overflow: hidden;
        }
        
        .collection-calendar::before {
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
        
        .calendar-header {
            background-color: #105B7E;
            color: white;
            padding: 20px;
            border-radius: 10px 10px 0 0;
            margin-bottom: 0;
        }
        
        .calendar-info-bar {
            background-color: #e9f5fb;
            padding: 15px 20px;
            border-left: 4px solid #105B7E;
            margin-bottom: 30px;
            border-radius: 5px;
        }
        
        .commune-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .commune-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        }
        
        .commune-title {
            background-color: #1783b8;
            color: white;
            padding: 15px 20px;
            font-weight: 600;
            margin: 0;
        }
        
        .calendar-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .calendar-table th {
            background-color: #f1f9ff;
            color: #105B7E;
            padding: 12px 8px;
            text-align: center;
            font-weight: 600;
        }
        
        .calendar-table td {
            padding: 12px 8px;
            text-align: center;
            border-bottom: 1px solid #e9ecef;
        }
        
        .calendar-table tr:last-child td {
            border-bottom: none;
        }
        
        .check-mark {
            color: #28a745;
            font-size: 1.2rem;
            font-weight: bold;
        }
        
        .team-assignment {
            margin-top: 50px;
        }
        
        .team-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 20px;
            overflow: hidden;
        }
        
        .team-header {
            background-color: #105B7E;
            color: white;
            padding: 15px 20px;
            font-weight: 600;
        }
        
        .team-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .team-table th {
            background-color: #f1f9ff;
            color: #105B7E;
            padding: 12px 8px;
            text-align: left;
            font-weight: 600;
            white-space: nowrap;
        }
        
        .team-table td {
            padding: 12px 8px;
            border-bottom: 1px solid #e9ecef;
            vertical-align: top;
        }
        
        .team-table tr:last-child td {
            border-bottom: none;
        }
        
        .contact-footer {
            background-color: #e9f5fb;
            padding: 30px;
            border-radius: 10px;
            margin-top: 40px;
            text-align: center;
            border-left: 4px solid #105B7E;
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .calendar-table th,
            .calendar-table td {
                padding: 8px 5px;
                font-size: 14px;
            }
            
            .team-table th,
            .team-table td {
                padding: 8px 5px;
                font-size: 14px;
            }
        }
        
        @media (max-width: 768px) {
            .collection-calendar {
                padding: 50px 0;
            }
            
            .calendar-table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }
            
            .team-table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }
        }
        
        @media (max-width: 576px) {
            .calendar-info-bar {
                padding: 10px;
            }
            
            .commune-title {
                padding: 10px 15px;
                font-size: 1.1rem;
            }
            
            .contact-footer {
                padding: 20px;
            }
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

        <section class="page-header page-header__calendar"
            style="background-image: url(assets/images/backgrounds/page-header-bg-1.jpg);">
            <div class="container">
                <h2 class="text-uppercase">Calendrier de collecte</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index-2.html">Accueil</a></li>
                    <li><span>Calendrier</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="collection-calendar">
            <div class="container">
                <div class="calendar-header text-center">
                    <h3>Programme de collecte des déchets</h3>
                </div>
                
                <div class="calendar-info-bar">
                    <div class="row">
                        <div class="col-md-4">
                            <p><strong>Période :</strong> Semaine du 05 juin 2023 au 11 juin 2023</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>Horaires de collecte :</strong> 8h00 - 17h30</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>Chef des opérations :</strong> Jean-Baptiste K.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Commune d'Ibanda -->
                <div class="commune-card">
                    <h4 class="commune-title">1. Commune d'Ibanda</h4>
                    <div class="table-responsive">
                        <table class="calendar-table">
                            <thead>
                                <tr>
                                    <th>Jour</th>
                                    <th>Ménages</th>
                                    <th>Boutiques, Alimentation, Entreprises</th>
                                    <th>Hôtels & Bistros</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lundi</td>
                                    <td><span class="check-mark">✓</span></td>
                                    <td><span class="check-mark">✓</span></td>
                                    <td><span class="check-mark">✓</span></td>
                                </tr>
                                <tr>
                                    <td>Mercredi</td>
                                    <td></td>
                                    <td><span class="check-mark">✓</span></td>
                                    <td><span class="check-mark">✓</span></td>
                                </tr>
                                <tr>
                                    <td>Jeudi</td>
                                    <td><span class="check-mark">✓</span></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Vendredi</td>
                                    <td></td>
                                    <td><span class="check-mark">✓</span></td>
                                    <td><span class="check-mark">✓</span></td>
                                </tr>
                                <tr>
                                    <td>Samedi</td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="check-mark">✓</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Commune de Kadutu -->
                <div class="commune-card">
                    <h4 class="commune-title">2. Commune de Kadutu</h4>
                    <div class="table-responsive">
                        <table class="calendar-table">
                            <thead>
                                <tr>
                                    <th>Jour</th>
                                    <th>Ménages</th>
                                    <th>Boutiques, Alimentation, Entreprises</th>
                                    <th>Hôtels & Bistros</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lundi</td>
                                    <td><span class="check-mark">✓</span></td>
                                    <td><span class="check-mark">✓</span></td>
                                    <td><span class="check-mark">✓</span></td>
                                </tr>
                                <tr>
                                    <td>Mercredi</td>
                                    <td></td>
                                    <td><span class="check-mark">✓</span></td>
                                    <td><span class="check-mark">✓</span></td>
                                </tr>
                                <tr>
                                    <td>Jeudi</td>
                                    <td><span class="check-mark">✓</span></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Vendredi</td>
                                    <td></td>
                                    <td><span class="check-mark">✓</span></td>
                                    <td><span class="check-mark">✓</span></td>
                                </tr>
                                <tr>
                                    <td>Samedi</td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="check-mark">✓</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Commune de Bagira -->
                <div class="commune-card">
                    <h4 class="commune-title">3. Commune de Bagira</h4>
                    <div class="table-responsive">
                        <table class="calendar-table">
                            <thead>
                                <tr>
                                    <th>Jour</th>
                                    <th>Ménages</th>
                                    <th>Boutiques, Alimentation, Entreprises</th>
                                    <th>Hôtels & Bistros</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lundi</td>
                                    <td><span class="check-mark">✓</span></td>
                                    <td><span class="check-mark">✓</span></td>
                                    <td><span class="check-mark">✓</span></td>
                                </tr>
                                <tr>
                                    <td>Mercredi</td>
                                    <td></td>
                                    <td><span class="check-mark">✓</span></td>
                                    <td><span class="check-mark">✓</span></td>
                                </tr>
                                <tr>
                                    <td>Jeudi</td>
                                    <td><span class="check-mark">✓</span></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Vendredi</td>
                                    <td></td>
                                    <td><span class="check-mark">✓</span></td>
                                    <td><span class="check-mark">✓</span></td>
                                </tr>
                                <tr>
                                    <td>Samedi</td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="check-mark">✓</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Affectation des équipes -->
                <div class="team-assignment">
                    <div class="team-card">
                        <h4 class="team-header">Affectation des équipes - Semaine du 05 juin 2023 au 11 juin 2023</h4>
                        <div class="table-responsive">
                            <table class="team-table">
                                <thead>
                                    <tr>
                                        <th>Jour</th>
                                        <th>Commune</th>
                                        <th>Équipe</th>
                                        <th>Responsable</th>
                                        <th>Zones couvertes</th>
                                        <th>Type de clients</th>
                                        <th>Conducteur & Camion</th>
                                        <th>Transporteurs</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Lundi</td>
                                        <td>Ibanda</td>
                                        <td>Équipe 1</td>
                                        <td>Jean K.</td>
                                        <td>Tous les quartiers</td>
                                        <td>Ménages, commerces, hôtels</td>
                                        <td>Camion N°1</td>
                                        <td>4 transporteurs</td>
                                    </tr>
                                    <tr>
                                        <td>Lundi</td>
                                        <td>Kadutu</td>
                                        <td>Équipe 2</td>
                                        <td>Patrick M.</td>
                                        <td>Tous les quartiers</td>
                                        <td>Ménages, commerces, hôtels</td>
                                        <td>Camion N°2</td>
                                        <td>7 transporteurs</td>
                                    </tr>
                                    <tr>
                                        <td>Lundi</td>
                                        <td>Bagira</td>
                                        <td>Équipe 3</td>
                                        <td>André T.</td>
                                        <td>Tous les quartiers</td>
                                        <td>Ménages, commerces, hôtels</td>
                                        <td>Camion N°3</td>
                                        <td>9 transporteurs</td>
                                    </tr>
                                    <tr>
                                        <td>Mercredi</td>
                                        <td>Ibanda</td>
                                        <td>Équipe 1</td>
                                        <td>Jean K.</td>
                                        <td>Zones commerciales</td>
                                        <td>Commerces, hôtels</td>
                                        <td>Camion N°1</td>
                                        <td>4 transporteurs</td>
                                    </tr>
                                    <tr>
                                        <td>Mercredi</td>
                                        <td>Kadutu</td>
                                        <td>Équipe 2</td>
                                        <td>Patrick M.</td>
                                        <td>Zones commerciales</td>
                                        <td>Commerces, hôtels</td>
                                        <td>Camion N°2</td>
                                        <td>7 transporteurs</td>
                                    </tr>
                                    <tr>
                                        <td>Mercredi</td>
                                        <td>Bagira</td>
                                        <td>Équipe 3</td>
                                        <td>André T.</td>
                                        <td>Zones commerciales</td>
                                        <td>Commerces, hôtels</td>
                                        <td>Camion N°3</td>
                                        <td>9 transporteurs</td>
                                    </tr>
                                    <tr>
                                        <td>Jeudi</td>
                                        <td>Ibanda</td>
                                        <td>Équipe 1</td>
                                        <td>Jean K.</td>
                                        <td>Tous les quartiers</td>
                                        <td>Ménages</td>
                                        <td>Camion N°1</td>
                                        <td>4 transporteurs</td>
                                    </tr>
                                    <tr>
                                        <td>Jeudi</td>
                                        <td>Kadutu</td>
                                        <td>Équipe 2</td>
                                        <td>Patrick M.</td>
                                        <td>Tous les quartiers</td>
                                        <td>Ménages</td>
                                        <td>Camion N°2</td>
                                        <td>7 transporteurs</td>
                                    </tr>
                                    <tr>
                                        <td>Jeudi</td>
                                        <td>Bagira</td>
                                        <td>Équipe 3</td>
                                        <td>André T.</td>
                                        <td>Tous les quartiers</td>
                                        <td>Ménages</td>
                                        <td>Camion N°3</td>
                                        <td>9 transporteurs</td>
                                    </tr>
                                    <tr>
                                        <td>Vendredi</td>
                                        <td>Ibanda</td>
                                        <td>Équipe 1</td>
                                        <td>Jean K.</td>
                                        <td>Zones commerciales</td>
                                        <td>Commerces, hôtels</td>
                                        <td>Camion N°1</td>
                                        <td>4 transporteurs</td>
                                    </tr>
                                    <tr>
                                        <td>Vendredi</td>
                                        <td>Kadutu</td>
                                        <td>Équipe 2</td>
                                        <td>Patrick M.</td>
                                        <td>Zones commerciales</td>
                                        <td>Commerces, hôtels</td>
                                        <td>Camion N°2</td>
                                        <td>7 transporteurs</td>
                                    </tr>
                                    <tr>
                                        <td>Vendredi</td>
                                        <td>Bagira</td>
                                        <td>Équipe 3</td>
                                        <td>André T.</td>
                                        <td>Zones commerciales</td>
                                        <td>Commerces, hôtels</td>
                                        <td>Camion N°3</td>
                                        <td>9 transporteurs</td>
                                    </tr>
                                    <tr>
                                        <td>Samedi</td>
                                        <td>Ibanda</td>
                                        <td>Équipe 1</td>
                                        <td>Jean K.</td>
                                        <td>Zones hôtelières</td>
                                        <td>Hôtels, bistros</td>
                                        <td>Camion N°1</td>
                                        <td>4 transporteurs</td>
                                    </tr>
                                    <tr>
                                        <td>Samedi</td>
                                        <td>Kadutu</td>
                                        <td>Équipe 2</td>
                                        <td>Patrick M.</td>
                                        <td>Zones hôtelières</td>
                                        <td>Hôtels, bistros</td>
                                        <td>Camion N°2</td>
                                        <td>7 transporteurs</td>
                                    </tr>
                                    <tr>
                                        <td>Samedi</td>
                                        <td>Bagira</td>
                                        <td>Équipe 3</td>
                                        <td>André T.</td>
                                        <td>Zones hôtelières</td>
                                        <td>Hôtels, bistros</td>
                                        <td>Camion N°3</td>
                                        <td>9 transporteurs</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="contact-footer">
                    <h4>Service client</h4>
                    <p>Pour toute question ou demande spécifique concernant les collectes, contactez RABI Sarl</p>
                    <p><i class="fas fa-phone"></i> <a href="tel:+243999000111">+243 999 000 111</a> | 
                    <i class="fas fa-envelope"></i> <a href="mailto:contact@rabisarl.com">contact@rabisarl.com</a></p>
                </div>
            </div><!-- /.container -->
        </section><!-- /.collection-calendar -->

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
        // Script pour mettre à jour dynamiquement la période affichée
        document.addEventListener('DOMContentLoaded', function() {
            // Vous pouvez remplacer ce code par une récupération dynamique des dates
            const startDate = new Date();
            const endDate = new Date();
            endDate.setDate(startDate.getDate() + 6);
            
            const options = { day: '2-digit', month: 'long', year: 'numeric' };
            const startDateStr = startDate.toLocaleDateString('fr-FR', options);
            const endDateStr = endDate.toLocaleDateString('fr-FR', options);
            
            // Mise à jour des éléments avec les dates
            document.querySelectorAll('.calendar-info-bar p strong:first-child').forEach(el => {
                el.nextSibling.textContent = ` Semaine du ${startDateStr} au ${endDateStr}`;
            });
            
            document.querySelector('.team-header').textContent = 
                `Affectation des équipes - Semaine du ${startDateStr} au ${endDateStr}`;
        });
    </script>
</body>

</html>