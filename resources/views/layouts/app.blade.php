<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="{{ asset('images/logo_sc.png') }}" />
	<title>SmartContact | Trouvez des professionnels pour vos différents besoins</title>

	<link href="{{ asset('bootstrap4/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/style_orange.css') }}" title="style_orange" rel="alternate stylesheet" type="text/css" />
	<link href="{{ asset('css/style_blue.css') }}" title="style_blue" rel="alternate stylesheet" type="text/css" />
	<link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/ele-style.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('line-awesome/css/line-awesome.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('js/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('js/dist/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />
	<script src="jquery.min.js"></script>
	<script>
		$(document).ready(function () {

            $(".profession2").hide();
            $(".profession3").hide();

            jQuery('#desc1').change(function() {
                if ($(this).prop('checked')) {
                    $('.profession1').show();
                    $(".profession2").hide();
                    $(".profession3").hide();
                }
            });

            jQuery('#desc2').change(function() {
                if ($(this).prop('checked')) {
                    $('.profession1').hide();
                    $(".profession2").show();
                    $(".profession3").hide();
                }
            });

            jQuery('#desc3').change(function() {
                if ($(this).prop('checked')) {
                    $('.profession1').hide();
                    $(".profession2").hide();
                    $(".profession3").show();
                }
            });

        });
	</script>
	<style>
		@media only screen and (max-width: 600px) {
			.img-smart-contact {
				width: 250px;
				height: 250px;
			}
		}

		@media only screen and (min-width: 768px) {
			.img-smart-contact {
				width: 410px;
				height: 480px;
				justify-content: center;
			}
		}
	</style>
	<link rel="stylesheet" href="select2.css" type="text/css" media="all">
	<script src="country.js"></script>
	<link rel="stylesheet" href="build/css/intlTelInput.css">

    <style>
        #first::before, .second::before {
            width: 100% !important;
            background: #FED700 !important;
        }

        .third::before {
            width: 100% !important;
            background: white !important;
        }

        #first {
            font-size: 18px !important;
        }

        .second {
            font-size: 18px !important;
        }
        #first, .second {
            color: #333E44 !important;
        }

         
    </style>

    <style>
        @media only screen and (min-width: 678px) {
            .company-logo {
                left: -15px;
            }

            .scan-case {
                /* margin-top:15px; */
                transform: translateY(20px)
            }
        }

        @media only screen and (max-width: 600px) {
            .image .row .profil {
                padding-left: 0px;
                padding: 25px;
            }

            .job {
                padding-bottom: 15px;
            }

            .image .row .qrcode {
                padding-right: 0px;
                padding: 25px;
            }

            .caption .row .infos .des,
            .caption .row .details .des {
                text-align: center !important;
            }

            .caption .row .infos {
                padding-bottom: 10px;
            }

            .caption .row .infos h4,
            .caption .row .details h4 {
                text-align: center !important;
                font-size: 20px;
            }

        }

        .img-circle {
            border-radius: 50%;
            /* border:3px solid #adb5bd; */
            margin-bottom: 5px;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link href="{{ asset('css/boxicon.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

	<style>
		#qrCodeStyle div {
			/* width: 50px !important;
			height: 53px !important;
			border: 2px solid red; */
		}
	</style>
@livewireStyles
</head>

<body>

	

    @yield('content')

    <footer style="padding: 10px !important;">
		
		<div class="powered" style="margin: 1px !important;">
			<div class="container" >
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12 matter">
						<img src="images/logo-smart.png" class="img-fluid logochange" alt="logo" title="logo" />
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 text-right" style="padding-top: 10px;">
						<p><span>Copyright © Blue Square Sarl- 2022</span><span></span></p>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<script src="build/js/intlTelInput.js"></script>
	<script>
		var input = document.querySelector("#phone");
		window.intlTelInput(input, {
		
		utilsScript: "build/js/utils.js",
		});
	</script>
	
	<script>
		$(document).ready(function () {
			$('#countySel').select2();
			$('#stateSel').select2();
			$('#districtSel').select2();

			$('#countySel1').select2();
			$('#stateSel1').select2();

			$('.js-example-basic-single').select2();

		});
	</script>


	<script>
        function populate(s1, s2) {
            var s1 = document.getElementById(s1);
            var s2 = document.getElementById(s2);

            s2.innerHTML = "";

            if(s1.value == "Agriculture - Paysage") {
                var optionArray = [
                'Agent de chai / Ouvrier caviste',
                'Agriculture urbain / Agricultrice urbaine',
                'Aquaculteur / Aquacultrice',
                'Arboriculteur / Arboricultrice',
                'Chef / Cheffe d’exploitation laitière',
                'Chef / Cheffe de culture',
                'Conchyliculteur / Conchylicultrice',
                'Conducteur / Conductrice d’engins d’exploitation agricole',
                'Conducteur / Conductrice d’engins forestiers',
                'Conseiller agricole / Conseillère agricole',
                'Horticulteur / Horticultrice',
                'Ingénieur / Ingénieure agronome',
                'Ingénieur / Ingénieure de recherche produit',
                'Ingénieur / Ingénieure des ponts, des eaux et forêts',
                'Jardinier / Jardinière',
                'Maître / Maîtresse de chai',
                'Maraîcher / Maraîchère',
                'Marin pêcheur',
                'Mécanicien / Mécanicienne en machinisme agricole',
                'Oenologue',
                'Ouvrier / Ouvrière agricole',
                'Ouvrier / Ouvrière de production sous serre',
                'Ouvrier / Ouvrière viticole tractoriste',
                'Paysagiste',
                'Pépiniériste',
                'Pisciculteur /Piscicultrice',
                'Technicien / Technicienne en système d’arrosage automatique',
                'Viticulteur / Viticultrice',
                ];
                
                }else if (s1.value == "Alimentation - Agroalimentaire" ) {
                
                var optionArray = [
                'Boucher / Bouchère',
                'Boulanger / Boulangère',
                'Brasseur - malteur',
                'Caissière / Caissier',
                'Charcutier-traiteur / Charcutière-traiteuse',
                'Chef / Cheffe de rayon',
                'Chocolatier - confiseur / Chocolatière - confiseuse',
                'Commerçant / Commerçante en alimentation',
                'Détaillant / Détaillante en fruits et légumes',
                'Employé / Employée drive',
                'Employée / Employé de libre service',
                'Fromager / Fromagère',
                'Glacier',
                'Ingénieur / Ingénieure de recherche produit',
                'Ingénieur agroalimentaire / Ingénieure agroalimentaire',
                'Opérateur / Opératrice de fabrication agroalimentaire',
                'Ouvrier / Ouvrière d’abattoir',
                'Pâtissier / Pâtissière',
                'Pilote d’installations automatisées',
                'Pizzaiolo / Pizzaiola',
                'Poissonnier / Poissonnière',
                'Préparateur / Préparatrice de recettes',
                'Préparateur / Préparatrice en produits de la mer',
                'Qualiticien / Qualiticienne',
                'Technicien / Technicienne biologiste',
                ];
                
                }else if (s1.value == "Animaux" ) {
                
                var optionArray = [
                'Accompagnateur / Accompagnatrice de tourisme équestre',
                'Accouveur / Accouveuse',
                'Agent / Agente de prévention du risque animalier',
                'Animalier / Animalière de laboratoire',
                'Apiculteur / Apicultrice',
                'Aquaculteur / Aquacultrice',
                'Auxiliaire vétérinaire',
                'Berger / Bergère',
                'Chef / Cheffe d’exploitation laitière',
                'Conchyliculteur / Conchylicultrice',
                'Conseiller / Conseillère en élevage',
                'Contrôleur / Contrôleuse de performance en élevage',
                'Educateur / Educatrice de chiens guides d’aveugles',
                'Educateur canin / Educatrice canine',
                'Eleveur / Eleveuse canin ou félin',
                'Eleveuse / Eleveur de chevaux',
                'Equithérapeute',
                'Ethologue',
                'Garde républicain',
                'Garde-chasse / Garde-pêche',
                'Ingénieur / Ingénieure en élevage et production animale',
                'Inséminateur / Inséminatrice',
                'Jockey / lad jockey / lad driver',
                'Maître-chien',
                'Maréchal-ferrant / Maréchal ferrante',
                'Marin pêcheur',
                'Monitrice d’équitation / Moniteur d’équitation',
                'Musher',
                'Ostéopathe animalier',
                'Palefrenier soigneur / Palefrenière soigneuse',
                'Pet-sitter',
                'Pisciculteur /Piscicultrice',
                'Soigneur animalier / Soigneuse animalière',
                'Technicien / Technicienne dentaire équin – TDE',
                'Toiletteur d’animaux / Toiletteuse d’animaux',
                'Vendeur / Vendeuse en animalerie',
                'Vétérinaire',
                'Zoologiste',
                ];
                }else if (s1.value == "Architecture - Décoration") {
                
                var optionArray = [
                'Agenceur / Agenceuse de cuisine ou de salle de bain',
                'Antiquaire',
                'Architecte',
                'Architecte d’intérieur',
                'Architecte naval',
                'Décorateur d’intérieur / Décoratrice d’intérieur',
                'Dessinateur projeteur / Dessinatrice projeteuse',
                'Etalagiste - décorateur / décoratrice',
                'Installateur / Installatrice de magasin',
                'Matiériste - coloriste',
                ];
                
                }else if (s1.value == "Armée – Sécurité - Secours") {
                
                var optionArray = [
                'Agent / Agente de la sûreté ferroviaire',
                'Agent / Agente de prévention et de sécurité',
                'Agent / Agente de sûreté aéroportuaire',
                'Agent secret / Espion',
                'Agent vérificateur / Agente vérificatrice d’appareils extincteurs',
                'Analyste SOC (security operation center)',
                'Commissaire de police',
                'Contrôleur / Contrôleuse de défense aérienne',
                'Démineur',
                'Détective privé',
                'Douanier / Douanière',
                'Électronicien / Electronicienne de l’armée de l’air et de l’espace',
                'Exploitant / Exploitante renseignements de l’armée de l’air et de l’espace',
                'Fusilier commando de l’armée de l’air et de l’espace',
                'Garde du corps',
                'Garde républicain',
                'Gardien / Gardienne de la paix',
                'Gardien / Gardienne d’immeuble',
                'Gendarme',
                'Gendarme adjoint volontaire',
                'Gendarme motocycliste',
                'Ingénieur / Ingénieure de la police technique et scientifique',
                'Ingénieur / Ingénieure sécurité sanitaire',
                'Installateur / Installatrice d’alarmes',
                'Intercepteur technique et graphie de l’armée de l’air et de l’espace',
                'Intercepteur traducteur de l’armée de l’air et de l’espace',
                'Logisticien / Logisticienne humanitaire',
                'Maître-chien',
                'Maître-nageur sauveteur / Maître-nageuse sauveteuse',
                'Mécanicien / Mécanicienne avionique de l’armée de l’air et de l’espace',
                'Moniteur / Monitrice de simulateur de vol de l’armée de l’air et de l’espace',
                'Officier de carrière',
                'Officier de police',
                'Patrouilleur autoroutier / Patrouilleuse autoroutière',
                'Pilote de chasse',
                'Pilote militaire d’hélicoptère',
                'Pisteur secouriste',
                'Policier municipal / Policière municipale',
                'Profiler',
                'Sapeur-pompier',
                'Superviseur / Superviseuse de trafic autoroutier',
                'Surveillant / Surveillante de baignade',
                'Technicien / Technicienne armement de l’armée de l’air et de l’espace',
                'Technicien / Technicienne en radioprotection',
                'Technicien de la police technique et scientifique',
                'Technicien photo-communication de l’armée de l’air et de l’espace',
                'Technicien principal / Technicienne principale de la police technique et scientifique',
                ];
                
                }else if (s1.value == "Artisanat d’art – Design - Mode") {
                
                var optionArray = [
                'Antiquaire',
                'Armurier / Armurière',
                'Bijoutier-joaillier / Bijoutière-joallière',
                'Bottier /Bottière',
                'Bronzier / Bronzière',
                'Canneur-rempailleur / Canneuse rempailleuse',
                'Céramiste à la main',
                'Cordonnier / Cordonnière',
                'Costumière / Costumier',
                'Coutelier / Coutelière',
                'Designer / Designeuse automobile',
                'Designer de produit de lunetterie',
                'Designer textile',
                'Directeur / Directrice artistique mode',
                'Doreur / Doreuse',
                'Ebéniste',
                'Encadreur / Encadreuse',
                'Facteur / Factrice d’orgues',
                'Facteur / Factrice de piano',
                'Facteur instrumental / Factrice instrumentale',
                'Ferronnier / Ferronnière d’art',
                'Fourreur',
                'Gemmologue',
                'Graveur / Graveuse',
                'Horloger / Horlogère',
                'Ingénieur / Ingénieur textile',
                'Luthier / Luthière',
                'Maroquinier / Maroquinière',
                'Matiériste - coloriste',
                'Menuisier / Menuisière',
                'Menuisier / Menuisière en sièges',
                'Menuisier agenceur nautique / Menuisière agenceuse nautique',
                'Miroitier / Miroitière',
                'Modéliste / Prototypiste',
                'Modiste - Chapelier / Chapelière',
                'Orfèvre',
                'Ouvrier / Ouvrière des tanneries et mégisseries',
                'Peintre en décors',
                'Relieur-doreur',
                'Réparateur / Réparatrice d’instruments de musique',
                'Responsable de collection textile habillement',
                'Restaurateur d’œuvres d’art',
                'Retoucheuse / Retoucheur',
                'Sculpteur',
                'Serrurier dépanneur',
                'Shaper',
                'Staffeur ornemaniste / Staffeuse ornemaniste',
                'Styliste',
                'Tailleur / Tailleuse de pierre',
                'Tapissier / Tapissière d’ameublement',
                'Taxidermiste',
                'Verrier / Verrière au chalumeau',
                'Vitrailliste',
                ];
                
                }else if (s1.value == "Banque - Finance - Assurance") {
                var optionArray = [
                'Actuaire',
                'Agent / Agente général d’assurances',
                'Analyste de crédit',
                'Analyste financier / financière',
                'Analyste fusions acquisitions',
                'Analyste KYC (know your customer)',
                'Analyste quantitatif - Quant',
                'Assistant / Assistante comptable',
                'Auditeur / Auditrice externe',
                'Chargé / Chargée de clientèle bancaire',
                'Chargé / Chargée de communication financière',
                'Chargé / Chargée de financement de projet',
                'Comptable',
                'Conseiller / Conseillère en microcrédit',
                'Conseiller / Conseillère en patrimoine',
                'Conseiller en assurance / Conseillère en assurance',
                'Consolideur / Consolideuse',
                'Contrôleur / Contrôleuse des finances publiques',
                'Contrôleur de gestion / Contrôleuse de gestion',
                'Courtier / Courtière en assurances',
                'Dabiste',
                'Directeur financier / Directrice financière',
                'Expert / Experte en assurance',
                'Expert-comptable / Experte-comptable',
                'Fiscaliste',
                'Gérant / Gérante de portefeuille',
                'Gestionnaire back office',
                'Gestionnaire middle office',
                'Guichetier chargé d’accueil bancaire / Guichetière chargée d’accueil bancaire',
                'Inspecteur / Inspectrice des finances publiques',
                'Inspecteur commercial / Inspectrice commerciale assurance',
                'Opérateur / Opératrice de traitement de valeurs',
                'Rédacteur / Rédactrice en assurances',
                'Responsable d’agence bancaire',
                'Responsable de la communication financière',
                'Sales - Vendeur / Vendeuse salle de marché',
                'Structureur',
                'Trader',
                ];
                
                }else if (s1.value == "Biologie - Chimie") {
                
                var optionArray = [
                'Agent / Agente de stérilisation',
                'Animalier / Animalière de laboratoire',
                'Aromaticien / Aromaticienne',
                'Bio-informaticien / Bio-informaticienne',
                'Botaniste',
                'Employé / Employée technique de laboratoire',
                'Ingénieur / Ingénieure de recherche produit',
                'Microbiologiste',
                'Parfumeur / Parfumeuse',
                'Technicien / Technicienne analyse et la qualité de l’eau',
                'Technicien / Technicienne biologiste',
                'Technicien / Technicienne chimiste',
                'Technicien / Technicienne de la qualité de l’air',
                'Technicien / Technicienne galéniste',
                'Technicien principal / Technicienne principale de la police technique et scientifique',
                'Technicienne / Technicien de laboratoire',
                'Thanatopracteur / Thanatopractrice',
                ];
                
                }else if (s1.value == "BTP - Urbanisme") {
                
                var optionArray = [
                'Acousticien / Acousticienne',
                'Agent / Agente de maintenance du bâtiment',
                'Architecte',
                'BIM coordinateur / BIM coordinatrice',
                'BIM Manager',
                'BIM modeleur / BIM modeleuse',
                'Canalisateur / Canalisatrice',
                'Carreleur / Carreleuse',
                'Charpentier bois / Charpentière bois',
                'Charpentier métallique / Charpentière métallique',
                'Chef de chantier / Cheffe de chantier',
                'Coffreur-boiseur / Coffreuse-boiseuse',
                'Conducteur / Conductrice d’engins de BTP',
                'Conducteur / Conductrice de travaux',
                'Constructeur / Constructrice de route',
                'Couvreur / Couvreuse',
                'Dessinateur / Dessinatrice en bâtiment',
                'Diagnostiqueur / Diagnostiqueuse immobilier',
                'Domoticien / Domoticienne',
                'Echafaudeur / Echafaudeuse',
                'Economiste de la construction',
                'Electricien / Electricienne du bâtiment',
                'Etanchéiste',
                'Façadier / Façadière',
                'Foreur',
                'Géomaticien',
                'Géomètre Expert',
                'Géomètre topographe',
                'Grutier / Grutière',
                'Ingénieur / Ingénieure bois',
                'Ingénieur / Ingénieure en efficacité énergétique',
                'Installateur / Installatrice de panneaux solaires',
                'Maçon / Maçonne',
                'Matiériste - coloriste',
                'Mécanicien / Mécanicienne d’engins de chantier et de manutention',
                'Menuisier / Menuisière',
                'Miroitier / Miroitière',
                'Monteur / Monteuse en installations sanitaires',
                'Monteur / Monteuse en installations thermiques',
                'Monteur levageur / Monteuse levageuse',
                'Opérateur / Opératrice de démolition',
                'Opérateur tunnelier / Opératrice tunnelière',
                'Parqueteur / Parqueteuse',
                'Peintre en bâtiment',
                'Peintre en décors',
                'Pilote de tunnelier',
                'Piscinier / Piscinière',
                'Plaquiste',
                'Plâtrier / Plâtrière',
                'Plombier / Plombière',
                'Plongeur professionnel / Plongeuse professionnelle',
                'Serrurier metallier/ Serrurière metallière',
                'Solier-moquettiste / Solière-moquettiste',
                'Staffeur ornemaniste / Staffeuse ornemaniste',
                'Technicien / Technicienne CVC',
                'Terrassier',
                'Urbaniste',
                ];
                
                }else if (s1.value == "Cinéma – Audiovisuel - Jeux vidéo") {
                
                var optionArray = [
                'Agent / Agente d’exploitation des équipements audiovisuels',
                'Animateur / Animatrice 2D-3D',
                'Assistant / Assistante de production cinéma audiovisuel',
                'Assistant / Assistante son',
                'Assistant opérateur / Assistante opératrice',
                'Cadreur / Cadreuse',
                'Chargé / Chargée de diffusion',
                'Chargé / Chargée de production cinéma-audiovisuel',
                'Chargé / Chargée de programmation',
                'Chargé / Chargée d’habillage et d’autopromotion',
                'Chef / Cheffe machiniste',
                'Chef opérateur / Cheffe opératrice',
                'Comédien / Comédienne',
                'Designer UX / UI',
                'Dialoguiste',
                'Directeur / Directrice artistique 3D',
                'Directeur de casting / Directrice de casting',
                'Directrice artistique / Directeur artistique',
                'Documentariste',
                'Doubleur voix',
                'Game designer / Lead game designer',
                'Gestionnaire d’antenne',
                'Graphiste illustrateur 2D- 3D / Graphiste illustratrice 2D-3D',
                'Graphiste multimédia',
                'Habilleuse / Habilleur',
                'Ingénieur / Ingénieure du son',
                'Ingénieur / Ingénieure en réalité virtuelle, réalité augmentée',
                'Level designer',
                'Maquilleuse artistique / Maquilleur artistique',
                'Mixeur / Mixeuse son',
                'Modeleur 3D',
                'Monteur / Monteuse image et son',
                'Monteur / Monteuse truquiste',
                'Motion designer',
                'Opérateur synthétiseur',
                'Producer',
                'Programmeur technique de jeux vidéo',
                'Réalisateur 3D / Réalisatrice 3D',
                'Scénariste multimédia',
                'Scripte',
                'Scripte de jeux vidéo',
                'Sound designer / Designer sonore',
                'Story-boarder',
                'Technicien / Technicienne lumière',
                'Technicien / Technicienne son',
                'Technicien vidéo',
                'Testeur / Testeuse de jeux vidéo',
                ];
                
                }else if (s1.value == "Commerce - Immobilier") {
                
                var optionArray = [
                'Acheteur / Acheteuse',
                'Acheteur / Acheteuse d’espaces publicitaires',
                'Administrateur de biens / Administratrice de biens',
                'Agent / Agente de maintenance multi-technique immobilière',
                'Agent immobilier / Agente immobilière',
                'Aménageur foncier / Aménageuse foncière',
                'Antiquaire',
                'Assistant immobilier / Assistante immobilière',
                'Caissière / Caissier',
                'Chef / Cheffe de produit marketing',
                'Chef / Cheffe de projet e-commerce livre',
                'Chef / Cheffe de projet e-CRM',
                'Chef / Cheffe de rayon',
                'Client mystère professionnel / Cliente mystère professionnelle',
                'Commercial / Commerciale',
                'Conseiller / Conseillère dermocosmétique',
                'Coordinateur retail / Coordinatrice retail',
                'Délégué / Déléguée commercial édition',
                'Détaillant / Détaillante en fruits et légumes',
                'Développeur foncier / Développeuse foncière',
                'Diagnostiqueur / Diagnostiqueuse immobilier',
                'Directeur / Directrice de grand magasin',
                'Directeur / Directrice du marketing',
                'Directeur commercial / Directrice commerciale',
                'E-merchandiser',
                'Employé / Employée de pressing',
                'Employé / Employée de station service',
                'Employée / Employé de libre service',
                'Expert immobilier / Experte immobilier',
                'Fleuriste',
                'Fromager / Fromagère',
                'Gestionnaire de proximité en immobilier social locatif',
                'Gestionnaire locatif',
                'Glacier',
                'Growth hacker',
                'Horloger / Horlogère',
                'Ingénieur technico-commercial / Ingénieure technico-commerciale',
                'Libraire',
                'Loueur / Loueuse de bateaux',
                'Loueur / Loueuse de voitures',
                'Marchand ambulant / Marchande ambulante',
                'Marchand de biens',
                'Marchandiseur',
                'Monteur-vendeur / Monteuse vendeuse en optique lunetterie',
                'Pricing manager',
                'Représentant / vendeur de véhicules',
                'Responsable affiliation et partenariats sur le web',
                'Responsable caisse',
                'Responsable de magasin',
                'Responsable de plateforme téléphonique',
                'Responsable de produits voyages',
                'Responsable de projets immobiliers',
                'Responsable d’agence immobilière',
                'Responsable e-commerce',
                'Skiman',
                'Syndic de copropriété',
                'Technico commercial / commerciale',
                'Téléconseillère / Téléconseiller',
                'Télévendeur / Télévendeuse',
                'Vendeur / Vendeuse d’articles de sport',
                'Vendeur / Vendeuse de jouets',
                'Vendeur / Vendeuse en animalerie',
                'Vendeur / Vendeuse en micro-informatique et multimédia',
                'Vendeur export / Vendeuse export',
                'Vendeuse / Vendeur en magasin',
                'Yield manager',
                ];
                
                }else if (s1.value == "Communication - Journalisme - Marketing") {
                var optionArray = [
                'Archiviste',
                'Assistant / Assistante de communication',
                'Assistant / Assistante événementiel',
                'Attaché / Attachée de presse',
                'Chargé / Chargée de communication financière',
                'Chargé / Chargée de mécénat et de partenariats',
                'Chargé / Chargée de relations publiques',
                'Chargé / Chargée de veille stratégique',
                'Chef / Cheffe de projet e-CRM',
                'Chef / Cheffe de publicité',
                'Collecteur de fonds / Collectrice de fonds',
                'Community manager - CM',
                'Concepteur rédacteur / Concepteur rédactrice',
                'Content manager',
                'Creative technologist / Technologue créatif',
                'Dessinateur / Dessinatrice de presse',
                'Digital brand manager',
                'Directeur / Directrice de clientèle',
                'Directrice artistique / Directeur artistique',
                'Document controller',
                'Documentaliste',
                'Écrivain public',
                'Enquêteur / Enquêtrice',
                'Influenceur/ Influenceuse',
                'Interprète de liaison / Interprète de conférence',
                'Interprète en LSF',
                'Journaliste',
                'Journaliste d’entreprise',
                'Journaliste reporter d’images - JRI',
                'Journaliste télé ou radio',
                'Lobbyiste',
                'Média-planner',
                'Pigiste',
                'Planneur stratégique',
                'Rédacteur en chef / Rédactrice en chef',
                'Rédacteur technique',
                'Responsable de communication',
                'Responsable de la communication financière',
                'Responsable du mécénat / Responsable partenariats',
                'Responsable événementiel',
                'Responsable marketing / Responsable marketing digital',
                'Secrétaire de rédaction',
                'Standardiste',
                'Sténotypiste de conférences',
                'Traducteur / Traductrice',
                'Web evangelist / Evangéliste web',
                'Wedding planner',
                ];
                
                }else if (s1.value == "Culture – Spectacle- Patrimoine") {
                
                var optionArray = [
                'Accessoiriste de spectacles',
                'Agent / Agente artistique',
                'Archéologue',
                'Archéologue territorial / territoriale',
                'Artificier / Artificière',
                'Artiste peintre',
                'Booker / Bookeuse',
                'Cascadeur / Cascadeuse',
                'Chanteur / Chanteuse',
                'Chargé / Chargée de mécénat et de partenariats',
                'Chargé / Chargée de mission patrimoine culturel',
                'Chef / Cheffe d’orchestre',
                'Chef constructeur / Cheffe constructrice',
                'Clerc de commissaire-priseur',
                'Comédien / Comédienne',
                'Commissaire d’exposition',
                'Commissaire-priseur',
                'Conservateur / Conservatrice du patrimoine',
                'Consultant / Consultante en ingénierie culturelle',
                'Costumière / Costumier',
                'Courtier d’art / Courtière d’art',
                'Danseuse / Danseur',
                'Décorateur-scénographe / Décoratrice scénographe',
                'Directeur de casting / Directrice de casting',
                'Disc-jockey / DJ',
                'Expert d’art / Experte d’art',
                'Galeriste (art)',
                'Habilleuse / Habilleur',
                'Iconographe',
                'Ingénieur / Ingénieure du son',
                'Ludothécaire',
                'Machiniste',
                'Magasinier / Magasinière d’archive ou de bibliothèque',
                'Mannequin',
                'Maquilleuse artistique / Maquilleur artistique',
                'Marionnettiste',
                'Médiateur culturel / Médiatrice culturelle',
                'Metteur / Metteuse en scène',
                'Musicien intervenant / Musicienne intervenante',
                'Musicien professionnel / Musicienne professionnelle',
                'Musicologue',
                'Organisateur / Organisatrice de tournées',
                'Photographe',
                'Projectionniste',
                'Réalisatrice / Réalisateur',
                'Régisseur / Régisseuse de spectacles',
                'Régisseur / Régisseuse d’œuvres d’art',
                'Responsable événementiel',
                'Restaurateur d’œuvres d’art',
                'Restaurateur du patrimoine / Restauratrice du patrimoine',
                'Technicien / technicienne de labo photo',
                'Technicien / Technicienne lumière',
                'Technicien / Technicienne son',
                ];
                
                }else if (s1.value == "Droit - Justice") {
                
                var optionArray = [
                'Directeur / Directrice des services pénitentiaires',
                'Administratrice / Administrateur judiciaire',
                'Assistant / Assistante parlementaire',
                'Avocat / Avocate',
                'Clerc de commissaire-priseur',
                'Clerc de notaire',
                'Collaborateur / collaboratrice de notaire',
                'Collaborateur / Collaboratrice d’huissier',
                'Conseiller / Conseillère pénitentiaire d’insertion et de probation - CPIP',
                'Consultant / Consultante en politiques publiques',
                'Directeur / Directrice des services de greffe judiciaires',
                'Directeur juridique / Directrice juridique',
                'Educatrice / Educateur de la Protection judiciaire de la jeunesse',
                'Expert juridique en cybersécurité',
                'Greffier / Greffière',
                'Huissier de justice / Huissière de justice',
                'Juge aux affaires familiales — JAF',
                'Juge d’instruction',
                'Juge des contentieux de la protection - JCP',
                'Juge des libertés et de la détention - JLD',
                'Juge d’application des peines - JAP',
                'Juge pour enfants',
                'Juriste d’entreprise',
                'Lieutenant/ Lieutenante pénitentiaire',
                'Magistrat / Magistrate',
                'Médecin légiste',
                'Notaire',
                'Procureur / Procureure',
                'Secrétaire juridique',
                'Surveillant / Surveillante pénitentiaire',
                ];
                
                }else if (s1.value == "Edition - Imprimerie - Livre") {
                
                var optionArray = [
                'Auteur / Autrice',
                'Bibliothécaire',
                'Chef / Cheffe de fabrication des industries graphiques',
                'Chef / Cheffe d’atelier des industries graphiques',
                'Chef / Cheffe de projet e-commerce livre',
                'Chef / Cheffe de projet numérique édition',
                'Conducteur / Conductrice de machines d’assemblage',
                'Conducteur / Conductrice de presse numérique',
                'Conducteur / Conductrice de presse offset',
                'Conservateur / Conservatrice de bibliothèque',
                'Correcteur / Correctrice',
                'Délégué / Déléguée commercial édition',
                'Directeur / Directrice de collection édition',
                'Directrice artistique / Directeur artistique',
                'Documentaliste',
                'Iconographe',
                'Illustrateur / Illustratrice',
                'Libraire',
                'Maquettiste',
                'Opérateur / Opératrice en PAO',
                'Opératrice de saisie / Opérateur de saisie',
                'Packager éditorial',
                'Rédacteur technique',
                'Relieur-doreur',
                'Secrétaire d’édition',
                'Sérigraphe',
                'Technicien / technicienne de fabrication dans l’industrie graphique',
                'Technicien PAO / Technicienne PAO',
                'Traducteur / Traductrice',
                ];
                
                }else if (s1.value == "Electricité - Electronique - Robotique") {
                var optionArray = [
                'Bobinier / Bobinière',
                'Coboticien / Coboticienne',
                'Contrôleur / Contrôleuse en électricité et électronique',
                'Domoticien / Domoticienne',
                'Electronicien / Electronicienne',
                'Électronicien / Electronicienne de l’armée de l’air et de l’espace',
                'Ingénieur / Ingénieure de recherche produit',
                'Installateur / Installatrice antenniste',
                'Monteur électricien / Monteuse électricienne réseau',
                'Monteur raccordeur / Monteuse raccordeuse fibre optique',
                'Monteur-câbleur / Monteuse-câbleuse',
                'Technicien / Technicienne de ligne à haute tension',
                'Technicien / Technicienne de maintenance de machines à sous',
                'Technicien / Technicienne de maintenance en distribution automatique',
                ];
                
                }else if (s1.value == "Energie") {
                
                var optionArray = [
                'Conducteur / Conductrice d’unité de valorisation énergétique',
                'Conseiller / Conseillère énergie',
                'Econome de flux',
                'Hydraulicien / Hydraulicienne',
                'Ingénieur / Ingénieure de recherche produit',
                'Ingénieur / Ingénieure en énergies renouvelables',
                'Ingénieur / Ingénieure nucléaire',
                'Ingénieur / ingénieure unité de valorisation énergétique',
                'Installateur / Installatrice de panneaux solaires',
                'Releveur / Releveuse de compteur',
                'Technicien / Technicienne de maintenance sur éolienne',
                'Technicien / Technicienne d’intervention clientèle gaz',
                ];
                
                }else if (s1.value == "Enseignement - Formation - Insertion") {
                var optionArray = [
                'Animateur / Animatrice de formation',
                'Assistant / Assistante d’éducation - AED',
                'Chercheur / Chercheuse',
                'Conseiller / Conseillère en insertion sociale et professionnelle',
                'Conseiller principale / Conseillère principale d’éducation',
                'Directeur / Directrice d’établissement d’éducation adaptée et spécialisée',
                'Economiste',
                'Un économiste est un spécialiste des sciences économiques. ',
                'Éducateur spécialisé / Éducatrice spécialisée',
                'Éducateur technique spécialisé / Educatrice technique spécialisée - ETS',
                'Enseignant coordonnateur / Enseignante coordonnatrice ULIS',
                'Formateur / Formatrice d’enseignant de la conduite et de la sécurité routière',
                'Formateur / Formatrice multimédia',
                'Formatrice / Formateur',
                'Learning community manager - LCM',
                'Maître de conférences',
                'Moniteur / Monitrice d’auto-école',
                'Moniteur / Monitrice de permis bateau de plaisance',
                'Musicien intervenant / Musicienne intervenante',
                'Professeur / Professeure d’arts plastiques',
                'Professeur / Professeure d’éducation physique et sportive (EPS)',
                'Professeur / Professeure d’université',
                'Professeur / Professeure de français langue étrangère (FLE)',
                'Professeur / Professeure de lycée et collège',
                'Professeur / Professeure de musique',
                'Professeur / Professeure documentaliste',
                'Proviseur / Proviseure de lycée – Principal / Principale de collège',
                'Responsable pédagogique',
                ];
                }

            for( var option in optionArray) {
                var pair = optionArray[option].split("|");
                var newoption = document.createElement("option");

                newoption.value = pair[0];
                newoption.innerHTML = pair[0];
                s2.options.add(newoption);
            }

        }
    </script>

	<script src="{{ asset('js/popper.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('bootstrap4/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/dist/js/bootstrap-select.js') }}"></script>
	<script src="{{ asset('js/holder.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/owlinternal.js') }}"></script>
	<script src="{{ asset('js/internal.js') }}"></script>
	<script src="{{ asset('js/switcher.js') }}"></script>

@livewireScripts
@stack('scripts')
</body>

</html>