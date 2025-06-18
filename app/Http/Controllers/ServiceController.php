<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services');
    }

    public function show($slug)
    {
        // Liste des services disponibles avec leurs informations
        $services = [
            'conseil-financier' => [
                'title' => 'Conseil Financier',
                'description' => 'NKAC Consulting West Africa vous accompagne dans la structuration financière et l\'optimisation de vos ressources. Notre expertise couvre l\'ingénierie financière, l\'évaluation d\'entreprises et la structuration de levées de fonds.',
                'image' => 'assets/img/images/finances.jpg',
                'tabs' => [
                    [
                        'id' => 'evaluation',
                        'title' => 'Évaluation d\'entreprises',
                        'content' => 'Nous réalisons des évaluations complètes d\'entreprises selon les standards internationaux, adaptées au contexte africain et aux normes OHADA.',
                        'image' => 'assets/img/images/evaluation.jpg'
                    ],
                    [
                        'id' => 'levee-fonds',
                        'title' => 'Levée de fonds',
                        'content' => 'Accompagnement dans la structuration et la réalisation de levées de fonds, business plans et présentation aux investisseurs.',
                        'image' => 'assets/img/images/levee-fonds.jpg'
                    ],
                    [
                        'id' => 'business-plan',
                        'title' => 'Business Plans',
                        'content' => 'Élaboration de business plans robustes et de modèles financiers prévisionnels pour vos projets de développement.',
                        'image' => 'assets/img/images/business-plan.jpg'
                    ]
                ]
            ],
            'conseil-fiscal' => [
                'title' => 'Conseil Fiscal & Optimisation',
                'description' => 'NKAC Consulting West Africa vous accompagne dans la gestion et l\'optimisation de vos obligations fiscales. Notre expertise couvre l\'ensemble des problématiques fiscales des entreprises en Afrique de l\'Ouest.',
                'image' => 'assets/img/images/fiscalite.jpg',
                'tabs' => [
                    [
                        'id' => 'audit',
                        'title' => 'Audit Fiscal',
                        'content' => 'Nous réalisons des audits fiscaux complets pour identifier les risques et opportunités d\'optimisation.',
                        'image' => 'assets/img/images/audit-fiscal.jpg'
                    ],
                    [
                        'id' => 'conseil',
                        'title' => 'Conseil & Optimisation',
                        'content' => 'Notre conseil fiscal personnalisé vous aide à structurer vos opérations pour minimiser l\'impact fiscal.',
                        'image' => 'assets/img/images/conseil-fiscal.jpg'
                    ],
                    [
                        'id' => 'formation',
                        'title' => 'Formation Fiscale',
                        'content' => 'Nos formations fiscales permettent à vos équipes de maîtriser les enjeux fiscaux.',
                        'image' => 'assets/img/images/formation-fiscale.jpg'
                    ]
                ]
            ],
            'audit-expertise' => [
                'title' => 'Audit & Expertise Comptable',
                'description' => 'Services d\'audit et d\'expertise comptable conformes aux normes internationales et aux spécificités du droit OHADA.',
                'image' => 'assets/img/images/audit.jpg',
                'tabs' => [
                    [
                        'id' => 'audit-financier',
                        'title' => 'Audit Financier',
                        'content' => 'Audits financiers complets selon les normes internationales d\'audit (ISA) et les spécificités OHADA.',
                        'image' => 'assets/img/images/audit-financier.jpg'
                    ],
                    [
                        'id' => 'expertise-comptable',
                        'title' => 'Expertise Comptable',
                        'content' => 'Tenue de comptabilité, établissement des états financiers et conseil comptable permanent.',
                        'image' => 'assets/img/images/expertise-comptable.jpg'
                    ],
                    [
                        'id' => 'controle-interne',
                        'title' => 'Contrôle Interne',
                        'content' => 'Évaluation et amélioration des systèmes de contrôle interne de votre organisation.',
                        'image' => 'assets/img/images/controle-interne.jpg'
                    ]
                ]
            ],
            'externalisation-daf' => [
                'title' => 'Externalisation DAF',
                'description' => 'Direction financière externalisée pour PME et ETI. Notre équipe devient votre direction financière avec un service de proximité et une expertise pointue.',
                'image' => 'assets/img/images/daf.jpg',
                'tabs' => [
                    [
                        'id' => 'direction-financiere',
                        'title' => 'Direction Financière',
                        'content' => 'Prise en charge complète de la fonction financière : pilotage, reporting, analyse financière.',
                        'image' => 'assets/img/images/direction-financiere.jpg'
                    ],
                    [
                        'id' => 'controle-gestion',
                        'title' => 'Contrôle de Gestion',
                        'content' => 'Mise en place d\'outils de pilotage, tableaux de bord et analyse des performances.',
                        'image' => 'assets/img/images/controle-gestion.jpg'
                    ],
                    [
                        'id' => 'tresorerie',
                        'title' => 'Gestion de Trésorerie',
                        'content' => 'Optimisation de la trésorerie, prévisions de cash-flow et relations bancaires.',
                        'image' => 'assets/img/images/tresorerie.jpg'
                    ]
                ]
            ],
            'formation-metier' => [
                'title' => 'Formation Métier',
                'description' => 'Formations spécialisées en comptabilité, finance, contrôle de gestion et systèmes d\'information adaptées aux enjeux africains.',
                'image' => 'assets/img/images/formation.jpg',
                'tabs' => [
                    [
                        'id' => 'comptabilite-ohada',
                        'title' => 'Comptabilité OHADA',
                        'content' => 'Formation complète sur le système comptable OHADA et les normes comptables en vigueur.',
                        'image' => 'assets/img/images/formation-comptabilite.jpg'
                    ],
                    [
                        'id' => 'controle-gestion-formation',
                        'title' => 'Contrôle de Gestion',
                        'content' => 'Maîtrise des outils et techniques de contrôle de gestion pour optimiser les performances.',
                        'image' => 'assets/img/images/formation-controle.jpg'
                    ],
                    [
                        'id' => 'systemes-information',
                        'title' => 'Systèmes d\'Information',
                        'content' => 'Formation sur les SI financiers et les outils de gestion modernes.',
                        'image' => 'assets/img/images/formation-si.jpg'
                    ]
                ]
            ],
            'gestion-risques' => [
                'title' => 'Organisation & Gestion des Risques',
                'description' => 'NKAC Consulting West Africa vous accompagne dans l\'identification, l\'évaluation et la maîtrise des risques opérationnels, financiers et stratégiques. Notre expertise couvre la cartographie des risques, l\'excellence opérationnelle et la conduite du changement.',
                'image' => 'assets/img/images/risk.jpg',
                'tabs' => [
                    [
                        'id' => 'cartographie-risques',
                        'title' => 'Cartographie des Risques',
                        'content' => 'Identification et évaluation complète des risques de votre organisation pour une meilleure maîtrise des enjeux critiques.',
                        'image' => 'assets/img/images/cartographie-risques.jpg'
                    ],
                    [
                        'id' => 'excellence-operationnelle',
                        'title' => 'Excellence Opérationnelle',
                        'content' => 'Optimisation des processus métier et amélioration continue pour maximiser l\'efficacité opérationnelle.',
                        'image' => 'assets/img/images/excellence-operationnelle.jpg'
                    ],
                    [
                        'id' => 'conduite-changement',
                        'title' => 'Conduite du Changement',
                        'content' => 'Accompagnement dans la transformation organisationnelle et la gestion du changement.',
                        'image' => 'assets/img/images/conduite-changement.jpg'
                    ]
                ]
            ],
            'conseil-strategique' => [
                'title' => 'Conseil Stratégique',
                'description' => 'Accompagnement stratégique global pour définir et mettre en œuvre votre vision d\'entreprise. NKAC Consulting vous aide dans la planification stratégique, l\'excellence opérationnelle et vous offre un accompagnement de proximité.',
                'image' => 'assets/img/images/conseil-strategique.jpg',
                'tabs' => [
                    [
                        'id' => 'planification-strategique',
                        'title' => 'Planification Stratégique',
                        'content' => 'Élaboration de plans stratégiques cohérents et réalisables alignés sur vos objectifs business.',
                        'image' => 'assets/img/images/planification-strategique.jpg'
                    ],
                    [
                        'id' => 'analyse-performance',
                        'title' => 'Analyse de Performance',
                        'content' => 'Évaluation des performances et identification des leviers d\'amélioration pour votre organisation.',
                        'image' => 'assets/img/images/analyse-performance.jpg'
                    ],
                    [
                        'id' => 'accompagnement-proximite',
                        'title' => 'Accompagnement de Proximité',
                        'content' => 'Suivi personnalisé et accompagnement opérationnel dans la mise en œuvre de votre stratégie.',
                        'image' => 'assets/img/images/accompagnement-proximite.jpg'
                    ]
                ]
            ]
        ];

        // Vérifier si le service existe
        if (!array_key_exists($slug, $services)) {
            abort(404);
        }

        $service = $services[$slug];
        
        return view('service-details', compact('service', 'services'));
    }
}
