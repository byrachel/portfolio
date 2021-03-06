<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Développeur Web & Mobile : Rachel Nething</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,700&display=swap" rel="stylesheet">

</head>
<body>
    <header>
            
        <?php include("menu.php"); ?>
                
    </header>

    <div class="projet container">
        <div id="up"></div>
        <br />
        <p class="date align-right"><a href="devio.php">Projet Dev.(io) >></a></p>
        <h1 class="projet-title center">Développeur web & mobile</h1>
        <h2 class="center">Projet : Karroad</h2>
    </div>
    <section>
        <div class="container center">
            <img src="img/karroad_home.png" alt="Création de site extranet avec React" class="img-fluid" />
        </div>
        <div class="container">
            <div class="row description">
                <div class="col-md-4">
                    <h3>Objectif : faciliter la visualisation des données récoltées.</h3>
                </div>
                <div class="col-md-8">
                    <p><a href="https://karroad.com"><span class="slogan">Karroad</span></a> est une start-up qui vise à aider les collectivités et groupes privés à <span class="slogan">analyser efficacement leurs flux de circulation</span>. Cela peut aller du nombre de véhicules sur une entrée d'autoroute au nombre de passants. Pour ce faire, ils utilisent l'IA (intelligence artificielle) couplée à une caméra.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <img src="img/heatmap.png" class="img-fluid shadow" />
                </div>
                <div class="col-md-5">
                    <br />
                    <p class="slogan">Cahier des charges :</p>
                    <br />
                    <ul>
                        <li><p>Utilisation de <a href="https://d3js.org"><strong>D3JS</strong></a> pour la datavisualisation,</p></li>
                        <li><p>Création au minimum d'un <strong>heatmap</strong> et d'un barchart,</p></li>
                        <li><p>Possibilité de filtrer les données,</p></li>
                        <li><p>Géolocalisation des périphériques avec <strong>Open Street Map,</strong></p></li>
                        <li><p>Sélection du dashboard via un menu déroulant dynamique,</p></li>
                        <li><p>Format des données reçues : .csv,</p></li>
                        <li><p>Accès différencié : Administrateur / Client.</p></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="divider">
                <br />
                <h3 class="center">L'environnement de travail</h3>
                <h2 class="center">Stack MERN</h2>
                <div class="underline"></div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p><span class="slogan center">Front-End</span> : Le framework D3JS nous étant imposé, nous avons choisi de réaliser cette interface avec le framework <strong>ReactJS</strong> afin de profiter de la souplesse de Javascript, la réactivité du DOM virtuel et la gestion du cycle de vie. Nous avons utilisé <strong>Semantic UI</strong> pour une ergonomie responsive et accès UX.</p>
                </div>
                <div class="col-md-6">
                    <p><span class="slogan center">Back-End</span> : Grâce au serveur <strong>NodeJS</strong> et au framework ExpressJS, nous nous assurons de profiter des qualités de Javascript de bout en bout. La couche <strong>Passport JS</strong> nous permettra de gérer l'authentification des utilisateurs. Enfin, <strong>MongoDB</strong> sera le parfait allié sur la partie "base de données".</p>
                </div>
            </div>
        </div>
        <div class="container center">

            <div class="divider">
                <h3 class="center">Dashboard client</h3>
                <h2 class="center">Ergonomie & UX</h2>
                <div class="underline"></div>
                <br />
                <p class="center">Pour <span class="slogan">faciliter la prise en main</span> de l'interface, seules les informations essentielles sont affichées :</p>
                    
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <img src="img/dashboard.png" class="img-fluid shadow" />
                </div>
                <div class="col-md-4">
                    <ul>
                        <li><p><strong>Header :</strong> Accès rapide au support, règlages et logout,</p></li>
                        <li><p><strong>BreadCrumb :</strong> Identifie le compte client et sa position,</p></li>
                        <li><p><strong>Sidebar :</strong> Un seul élément du menu est accessible et actif,</p></li>
                        <li><p><strong>Statistiques générales :</strong> Affichage du nombre de périphériques et de la date de fin de contrat (ces données sont issues de la base de données),</p></li>
                        <li><p><strong>Localisation</strong> des périphériques du client (affichage dynamique fonction de la base de données),</p></li>
                        <li><p><strong>Menu déroulant</strong> : Sélection du périphérique dont on veut voir les données.</p></li>
                    </ul>
                </div>

            </div>
            <div class="divider"></div>
            <p class="slogan">A savoir :</p> 
            <p>Toutes les données liées au client et à ses périphériques sont récupérées et affichées de façon dynamique. Cela signifie qu'elles proviennent de la base de données. Ainsi, il suffit d'ajouter ou de modifier un périphérique une seule fois pour que l'ajout ou le changement se répercute sur tous les dashboards.</p>
            <br />
        </div>
        <div class="container center">
            <div class="divider">
                <h3 class="center">Datavisualisation avec D3JS</h3>
                <h2 class="center">Dashboard périphérique</h2>
                <div class="underline"></div>
                <br />
                <p class="center">Les données liées au périphérique sont issues d'un <span class="slogan">fichier CSV</span> uploadé automatiquement toutes les dix minutes. La sidebar s'est enrichie afin de permettre l'accès au téléchargement du fichier CSV complet, aux photos du périphérique en situation, aux alertes et graphiques personnalisés.</p>
            </div>
            <div class="description">
                <img src="img/peripherique-dashboard.png" class="img-fluid shadow" />
            </div>
        </div>
        <div class="container center">
            <div class="divider">
                <h3 class="center">Espace administrateur</h3>
                <div class="underline"></div>
                <br />
                <p class="center">Interface permettant aux administrateurs de créer des comptes clients, de créer des périphériques et de les rattacher à un client, de visualiser les données générales telles que les dates de fin de fin de contrat...</p>
            </div>
            <div class="description">
                <img src="img/admin-dash-2.png" class="img-fluid shadow" />
            </div>

        <div class="divider"></div>
        <p><span class="slogan">Attention :</span> Les noms et données réelles des clients de cette start-up étant confidentielles, les informations affichées sur ces captures écran (nom des clients, localisaitons, données...) sont fictives.</p>
        <div class="divider"></div>

        <a href="#up"><img src="img/up.png" class="right" /></a>
        </div>

        

    </section>
    <div class="divider"></div>
    <footer>
        <div class="container-fluid yellow-footer">

            <p class="center white">© Website réalisé en HTML5 / CSS3 / Javascript.</p>

        </div>
    </footer>

</body>

</html>