<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CENA : Cartographie de l'Ecosystème Numérique Azuréen</title>
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
        <p class="date align-right"><a href="karroad.php">Projet Karroad >></a></p>

        <h1 class="projet-title center">Développeur web & mobile</h1>
        <h2 class="center">Projet : CENA</h2>
    </div>
    <section>
        <div class="container-fluid grey-bg">
            <div class="center">
            <img src="img/cena.jpg" alt="Projet de formation / en équipe " class="img-fluid" />
            </div>
        </div>

    <div class="divider"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="img/logo-cena.png" class="img-fluid" />
            </div>
            <div class="col-md-7">
                <div class="divider"></div>
                <h3>Objectif :</h3>
                <br />
                <p>La création du site <span class="slogan">cena-map.fr</span> nous a été proposée en plus de nos cours et devoirs, durant la formation avec Le Bocal Academy. Ce projet a été réalisé dans le cadre du salon Talent In Tech et en partenariat avec la CCI Nice Côte d'Azur.</p>
                <p>L'objectif est de <span class="slogan">référencer les acteurs du numérique</span> ou de leur permettre d'ajouter leur entité en s'inscrivant via un formulaire.</p>
                <p>Pour une interface ludique, pratique et visuelle, nous avons fait le choix d'intégrer l'<span class="slogan">API Google Map </span>pour situer facilement les différents acteurs sur le département.</p>
                <br />
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
                <p><span class="slogan center">Front-End</span> : Nous avons réalisé cette interface avec le framework <strong>ReactJS</strong> afin de profiter de la souplesse de Javascript, la réactivité du DOM virtuel et la gestion du cycle de vie. Nous avons utilisé <strong>Materialize CSS</strong> pour une ergonomie responsive et moderne.</p>
            </div>
            <div class="col-md-6">
                <p><span class="slogan center">Back-End</span> : <strong>NodeJS</strong> et ExpressJS, nous assurent de profiter des qualités de Javascript de bout en bout. La couche <strong>Passport JS</strong> nous permet de gérer l'authentification des utilisateurs. Enfin, <strong>MongoDB</strong> sera le parfait allié sur la partie "base de données".</p>
            </div>
        </div>
    </div>
        <div class="divider"></div>
        <div class="container">

            <br />
            <h3 class="center">Découvrez notre présentation</h3>
            <h2 class="center">En vidéo</h2>
            <div class="underline"></div>
            <div class="divider"></div>

            <div class="center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/a5Ww25e8TYs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="divider"></div>
    </section>
    <footer>
        <div class="container-fluid yellow-footer">

            <p class="center white">© Website réalisé en HTML5 / CSS3 / Javascript.</p>

        </div>
    </footer>

</body>

</html>