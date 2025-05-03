
<!DOCTYPE html>
<html lang="fr">

<head>
    @include('user_frontend.layouts.head')
    <style>
        /* --------------------------------------- */
        /* Styles pour la section Suivi Abonné */
        /* --------------------------------------- */
        
        .tracking-section {
            padding: 80px 0;
            background-color: #f8f9fa;
            position: relative;
            overflow: hidden;
        }
        
        .tracking-section::before {
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
        
        .tracking-header {
            background-color: #105B7E;
            color: white;
            padding: 20px;
            border-radius: 10px 10px 0 0;
            margin-bottom: 0;
        }
        
        .tracking-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .tracking-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        }
        
        .tracking-form {
            padding: 30px;
            background-color: #f1f9ff;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .tracking-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .tracking-table th {
            background-color: #105B7E;
            color: white;
            padding: 12px 15px;
            text-align: left;
            font-weight: 500;
        }
        
        .tracking-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #e9ecef;
            vertical-align: middle;
        }
        
        .tracking-table tr:last-child td {
            border-bottom: none;
        }
        
        .status-badge {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }
        
        .status-processing {
            background-color: #cce5ff;
            color: #004085;
        }
        
        .status-resolved {
            background-color: #d4edda;
            color: #155724;
        }
        
        .status-cancelled {
            background-color: #f8d7da;
            color: #721c24;
        }
        
        .problem-details {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-top: 10px;
            border-left: 3px solid #105B7E;
        }
        
        .no-records {
            text-align: center;
            padding: 40px;
            color: #6c757d;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .tracking-table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }
            
            .tracking-form .row > div {
                margin-bottom: 15px;
            }
        }
        
        @media (max-width: 576px) {
            .tracking-card {
                border-radius: 0;
            }
            
            .tracking-header, 
            .tracking-form {
                padding: 15px;
            }
        }

        .thm-btn {
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

        <section class="page-header page-header__tracking"
            style="background-image: url(assets/images/backgrounds/page-header-bg-1.jpg);">
            <div class="container">
                <h2 class="text-uppercase">Suivi des demandes</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index-2.html">Accueil</a></li>
                    <li><span>Espace abonné</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="tracking-section">
            <div class="container">
                <div class="tracking-card">
                    <div class="tracking-header text-center">
                        <h3>Espace de suivi des demandes</h3>
                        <p class="mb-0">Consultez l'état de vos demandes et signalements</p>
                    </div>
                    
                    <div class="tracking-form">
                        <form id="trackingForm" class="wow fadeIn">
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="matricule">Numéro d'abonné *</label>
                                    <input type="text" class="form-control" name="matricule" id="matricule" 
                                        placeholder="Votre numéro d'abonné (ex: RABI-240101-123)" required>
                                </div>
                                <div class="col-md-4 d-flex align-items-end">
                                    <button type="submit" class="thm-btn w-100">Rechercher</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Résultats de la recherche -->
                    <div id="trackingResults">
                        <div class="p-4 text-center">
                            <i class="fas fa-search fa-3x text-muted mb-3"></i>
                            <h4>Entrez votre numéro d'abonné</h4>
                            <p class="text-muted">Veuillez saisir votre numéro d'abonné pour afficher l'historique de vos demandes</p>
                        </div>
                    </div>
                </div>
                
                <!-- Tableau des signalements -->
                <div class="tracking-card mt-4">
                    <div class="tracking-header">
                        <h4 class="mb-0">Historique des signalements</h4>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="tracking-table">
                            <thead>
                                <tr>
                                    <th>N° Signalement</th>
                                    <th>Date</th>
                                    <th>Type</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="problemHistory">
                                <!-- Contenu dynamique -->
                            </tbody>
                        </table>
                    </div>
                    
                    <div id="noProblems" class="no-records" style="display: none;">
                        <i class="fas fa-info-circle fa-3x mb-3"></i>
                        <h4>Aucun signalement trouvé</h4>
                        <p>Vous n'avez effectué aucun signalement pour le moment.</p>
                    </div>
                </div>
                
                <div class="contact-footer mt-4 text-center p-4" style="background-color: #e9f5fb; border-radius: 10px;">
                    <h4>Besoin d'aide ?</h4>
                    <p>Notre équipe client est disponible pour répondre à vos questions</p>
                    <p>
                        <i class="fas fa-phone"></i> <a href="tel:+243999000111">+243 999 000 111</a> | 
                        <i class="fas fa-envelope"></i> <a href="mailto:client@rabisarl.com">client@rabisarl.com</a>
                    </p>
                </div>
            </div><!-- /.container -->
        </section><!-- /.tracking-section -->

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
        // Simulation de données pour la démo
        const sampleData = {
            "RABI-240101-123": {
                subscriber: {
                    name: "Jean KABILA",
                    subscriptionDate: "15/01/2023",
                    subscriptionType: "Ménage (5$)",
                    address: "Avenue Kilela Balanda, N°45, Quartier Résidentiel, Commune d'Ibanda"
                },
                requests: [
                    {
                        id: "COL-20230601-001",
                        date: "01/06/2023",
                        type: "Collecte spéciale",
                        status: "completed",
                        details: "Demande de collecte supplémentaire pour encombrants"
                    }
                ],
                problems: [
                    {
                        id: "PRO-20230515-001",
                        date: "15/05/2023",
                        type: "Non-collecte",
                        status: "resolved",
                        details: "Collecte manquée le 15/05 - Résolu le 17/05 par une collecte exceptionnelle"
                    },
                    {
                        id: "PRO-20230520-002",
                        date: "20/05/2023",
                        type: "Bac endommagé",
                        status: "processing",
                        details: "Demande de remplacement de bac - En cours de traitement"
                    },
                    {
                        id: "PRO-20230610-003",
                        date: "10/06/2023",
                        type: "Retard de collecte",
                        status: "pending",
                        details: "Collecte avec 3h de retard - En attente de traitement"
                    }
                ]
            }
        };

        document.getElementById('trackingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const matricule = document.getElementById('matricule').value.trim();
            
            if (matricule === '') return;
            
            // Simulation de recherche - en production vous feriez une requête AJAX
            const subscriberData = sampleData[matricule];
            
            if (subscriberData) {
                // Afficher les informations de l'abonné
                const subscriberInfo = `
                    <div class="p-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Informations abonné</h4>
                                <p><strong>Nom :</strong> ${subscriberData.subscriber.name}</p>
                                <p><strong>Type d'abonnement :</strong> ${subscriberData.subscriber.subscriptionType}</p>
                                <p><strong>Date d'abonnement :</strong> ${subscriberData.subscriber.subscriptionDate}</p>
                            </div>
                            <div class="col-md-6">
                                <h4>Adresse de collecte</h4>
                                <p>${subscriberData.subscriber.address}</p>
                            </div>
                        </div>
                        
                        ${subscriberData.requests.length > 0 ? `
                        <div class="mt-4">
                            <h5>Dernière demande de collecte</h5>
                            <div class="problem-details">
                                <p><strong>Référence :</strong> ${subscriberData.requests[0].id}</p>
                                <p><strong>Date :</strong> ${subscriberData.requests[0].date}</p>
                                <p><strong>Type :</strong> ${subscriberData.requests[0].type}</p>
                                <p><strong>Statut :</strong> <span class="status-badge status-resolved">Terminé</span></p>
                                <p><strong>Détails :</strong> ${subscriberData.requests[0].details}</p>
                            </div>
                        </div>
                        ` : '<p class="text-muted mt-4">Aucune demande de collecte récente</p>'}
                    </div>
                `;
                
                document.getElementById('trackingResults').innerHTML = subscriberInfo;
                
                // Afficher l'historique des signalements
                if (subscriberData.problems.length > 0) {
                    document.getElementById('noProblems').style.display = 'none';
                    let problemsHTML = '';
                    
                    subscriberData.problems.forEach(problem => {
                        let statusClass, statusText;
                        
                        switch(problem.status) {
                            case 'pending':
                                statusClass = 'status-pending';
                                statusText = 'En attente';
                                break;
                            case 'processing':
                                statusClass = 'status-processing';
                                statusText = 'En cours';
                                break;
                            case 'resolved':
                                statusClass = 'status-resolved';
                                statusText = 'Résolu';
                                break;
                            case 'cancelled':
                                statusClass = 'status-cancelled';
                                statusText = 'Annulé';
                                break;
                            default:
                                statusClass = 'status-pending';
                                statusText = 'En attente';
                        }
                        
                        problemsHTML += `
                            <tr>
                                <td>${problem.id}</td>
                                <td>${problem.date}</td>
                                <td>${problem.type}</td>
                                <td><span class="status-badge ${statusClass}">${statusText}</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary view-details" data-id="${problem.id}">
                                        <i class="fas fa-eye"></i> Détails
                                    </button>
                                </td>
                            </tr>
                            <tr class="detail-row" id="detail-${problem.id}" style="display: none;">
                                <td colspan="5">
                                    <div class="problem-details">
                                        <p><strong>Détails :</strong> ${problem.details}</p>
                                        ${problem.status === 'resolved' ? 
                                            `<p class="text-success"><i class="fas fa-check-circle"></i> Problème résolu le ${problem.date}</p>` : 
                                            ''}
                                    </div>
                                </td>
                            </tr>
                        `;
                    });
                    
                    document.getElementById('problemHistory').innerHTML = problemsHTML;
                    
                    // Gestion des boutons de détails
                    document.querySelectorAll('.view-details').forEach(button => {
                        button.addEventListener('click', function() {
                            const problemId = this.getAttribute('data-id');
                            const detailRow = document.getElementById(`detail-${problemId}`);
                            
                            if (detailRow.style.display === 'none') {
                                detailRow.style.display = 'table-row';
                                this.innerHTML = '<i class="fas fa-eye-slash"></i> Masquer';
                            } else {
                                detailRow.style.display = 'none';
                                this.innerHTML = '<i class="fas fa-eye"></i> Détails';
                            }
                        });
                    });
                } else {
                    document.getElementById('problemHistory').innerHTML = '';
                    document.getElementById('noProblems').style.display = 'block';
                }
            } else {
                document.getElementById('trackingResults').innerHTML = `
                    <div class="p-4 text-center">
                        <i class="fas fa-exclamation-triangle fa-3x text-warning mb-3"></i>
                        <h4>Abonné non trouvé</h4>
                        <p class="text-muted">Aucun abonné trouvé avec le numéro ${matricule}</p>
                        <p>Veuillez vérifier votre numéro ou contacter notre service client.</p>
                    </div>
                `;
                
                document.getElementById('problemHistory').innerHTML = '';
                document.getElementById('noProblems').style.display = 'block';
            }
        });
    </script>
</body>

</html>