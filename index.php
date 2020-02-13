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
  <meta property="og:title" content="Développeur Web et Mobile : Rachel Nething (06 Grasse)">
  <meta property="og:description" content="Portfolio : Site présentant les projets sur lesquels je travaille (ou ai travaillé). Réalisé en HTML5, CSS3, Bootstrap et une toute petite pincée de JS.">
  <meta property="og:image" content="http://www.rachelnething.dev/img/karroad_home.png">
  <meta property="og:url" content="http://www.rachelnething.dev">
</head>
<body>
    <div class="container">
        <header>
            
        <?php include("menu.php"); ?>
            
        </header>
    </div>

        <h1 class="ml9 center">
        <span class="text-animation">
            <span class="letters">Développeur web & mobile</span>
        </span>
        </h1>

        <h2 class="center">Portfolio</h2>

    <section>
        <div class="timeline-container">

            <div class="left text-wrapper">
                <a href="devio.php"><div class="text">
                <h3>JS(wiki)</h3>
                <p class="date">Janvier 2020</p>
                <p class="intitule">Projet personnel : passionnée de <span class="bold">Javascript</span>, cet espace web a pour but de partager tous les outils et services dédiés aux développeurs JS.</p>
                <div class="title-stack"><div class="yellow"></div><p class="stack">Stack</p></div>
                <p class="techno"><span class ="bold">Angular</span> + Bootstrap + FireBase</p>
                </div></a>
            </div>

            <div class="right text-wrapper">
                <a href="pierre-feuille-ciseaux-JS.php"><div class="text">
                <h3>Pierre Feuille Ciseaux</h3>
                <p class="date">Décembre 2019</p>
                <p class="intitule">Création du jeu <span class="bold">"Rock Paper Cisors"</span> dans le cadre d'un test technique. Directive : Il ne fallait utiliser ni bibliothèque, ni framework.</p>
                <div class="title-stack"><div class="yellow"></div><p class="stack">Stack</p></div>
                    <p class="techno">MEAN<span class="bold"> : MongoDB ExpressJS Angular NodeJS</span>
                </div></a>
            </div>

            <div class="left text-wrapper">
                    <a href="karroad.php"><div class="text">
                    <h3>Karroad</h3>
                    <p class="date">Novembre 2019</p>
                    <p class="intitule">Interface privée de <span class="bold">visualisation de données</span>, pour une start-up d'analyse de flux grâce à l'IA.</p>
                    <div class="title-stack"><div class="yellow"></div><p class="stack">Stack</p></div>
                    <p class="techno"><span class="bold">MERN</span> : MongoDB ExpressJS ReactJS NodeJS <br />+ D3JS (datavisualisation)<br />+ PassportJS (authentification)</p>
                </div></a>
            </div>

            <div class="right text-wrapper">
                    <a href="quote.php"><div class="text">
                    <h3>Quote</h3>
                    <p class="date">Projet personnel - Novembre 2019</p>
                    <p class="intitule">Création d'une <span class="bold">application mobile</span> de partage et stockage de citations inspirantes.</p>
                    <div class="title-stack"><div class="yellow"></div><p class="stack">Stack</p></div>
                    <p class="techno">Front-End : <span class="bold">React-Native</span><br />Back-End : MongoDB + ExpressJS + NodeJS <br />+ PassportJS (authentification)</p>
                </div></a>
            </div>

            <div class="left text-wrapper">
                <div class="text">
                    <h3>Hackathon Green Tech</h3>
                    <p class="date">Organisé par <a href="http://hackforwomen.com">WHAT06</a> - Novembre 2019</p>
                    <p class="intitule"><span class="bold">Application mobile</span> pour fédérér les jeunes autour d'actions "green" au travers de défis et animations.</p>
                    <div class="title-stack"><div class="yellow"></div><p class="stack">Stack</p></div>
                    <p class="techno">ReactNative</p>
                </div>
            </div>
            
            <div class="right text-wrapper">
                <a href="cena.php"><div class="text">
                    <h3>Cena-map.fr</h3>
                    <p class="date">Réalisé pour Talent In Tech - Novembre 2019</p>
                    <p class="intitule">Dans le cadre du salon Talent In Tech, création du <strong>site web </strong>: Cartographie de l'Ecosystème Numérique Azuréen, travail en équipe.</p>

                    <div class="title-stack"><div class="yellow"></div><p class="stack">Stack</p></div>
                    <p class="techno">MongoDB ExpressJS ReactJS NodeJS (MERN) + API Google Map</p>
                </div></a>
            </div>

            <div class="left text-wrapper">
                <div class="text">
                    <h3><a href="#">Portraitoupaysage.com</a></h3>
                    <p class="date">Septembre 2014</p>
                    <p class="intitule">Site d'inspiration et de partage pour les photographes professionnels. </p>
                    <div class="title-stack"><div class="yellow"></div><p class="stack">Stack</p></div>
                    <p class="techno">Wordpress - Woocommerce</p>
                </div>
            </div>
        </div>
    </section>
    <div class="divider"></div>
    <footer>
        <div class="container-fluid yellow-footer">

            <p class="center white">© Website réalisé en HTML5 / CSS3 / Javascript.</p>

        </div>
    </footer>
</body>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="./script.js"></script>
</html>