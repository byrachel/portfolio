<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Application Mobile : Quote</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,700&display=swap" rel="stylesheet">

</head>
<body>
        <div class="container">
            <header>
            
            <?php include("menu.php"); ?>
                
            </header>
            </div>

    <div class="projet container">
        <div id="up"></div>
        <br />
        <p class="date align-right"><a href="/karroad.html">Projet Karroad >></a></p>

        <h1 class="projet-title center">Développeur web & mobile</h1>
        <h2 class="center">Projet : Quote</h2>
    </div>
    <section>
        <div class="container center">
            <img src="img/quote.jpg" alt="Création d'une application mobile avec React-Native" class="img-fluid" />
        </div>

    <div class="divider"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="img/quote-flow.png" class="quote-preview" />
            </div>
            <div class="col-md-7">
                <div class="divider"></div>
                <h3>Objectif :</h3>
                <br />
                <p><span class="slogan">Quote</span> est un petit réseau social en devenir. Cette application mobile permet de stocker et de partager ses citations préférées, d'en découvrir de nouvelles et de se connecter à d'autres fans de citations. Il s'agit d'une version bêta, de nouvelles fonctionnalités sont en cours de développement.</p>
                <br />
                <h3>Environnement de travail </h3>
                <br />
                <p class="slogan">Front-End :</p>
                <ul>
                    <li><p>Le framework cross-platform <strong>React-Native</strong> permet de créer une application qui sera ensuite utilisable à la fois sur iOS et Androïd,</p></li>
                    <li><p>Le menu en bas de page est créé avec <strong>React Navigation</strong>.</p></li>
                </ul>
                <br />
                <p class="slogan">Back-End :</p>
                <br />
                <ul>
                    <li><p><strong>NodeJS & Express JS</strong> pour un environnement back-end réactif, agile et full JS,</p></li>
                    <li><p><strong>MongoDB</strong> pour le stockage des données,</p></li>
                    <li><p><strong>PassportJS</strong> pour gérer l'authentification et la création des utilisateurs,</p></li>
                </ul>

            </div>
        </div>
    </div>

    <div class="container">
            <div class="row">

                <div class="col-md-7">
                    <div class="divider">
                        <br />
                        <h3>Fonctionnalités</h3>
                        <br />
                        <p class="slogan">Version Bêta :</p>
                        <br />
                        <ul>
                            <li><p>Animation de lancement (splashscreen),</p></li>
                            <li><p>Création d'un nouveau compte utilisateur,</p></li>
                            <li><p>Connexion à un compte existant,</p></li>
                            <li><p>Affichage de toutes les citations enregistrées dans le "flow" par ordre antechonologique,</p></li>
                            <li><p>Accès à son compte utilisateur,</p></li>
                            <li><p>Stockage et affichage de ses propres citations,</p></li>
                        </ul>
                        <br />
                        <p class="slogan">En cours de développement :</p>
                        <br />
                        <ul>
                            <li><p>Indiquer une mention "j'aime" sur une citation,</p></li>
                            <li><p>Choisir si l'on souhaite partager sa citation dans le flow ou la garder privée,</p></li>
                            <li><p>Suivre le compte d'un autre utilisateur,</p></li>
                            <li><p>Choisir entre différents background,</p></li>
                            <li><p>Partager une citation sur un autre réseau social.</p></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="left">
                        <img src="img/quote-citation.png" class="quote-preview" />
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="container-fluid grey-bg">

            <br />
            <h3 class="center">Découvrez l'application QUOTE</h3>
            <h2 class="center">En vidéo</h2>
            <div class="underline"></div>
            <div class="divider"></div>

            <div class="center">
                <iframe src="https://player.vimeo.com/video/377037213" width="320" height="610" frameborder="0" allow="autoplay"></iframe>
            </div>
        </div>

    </section>
    <footer>
        <div class="container-fluid yellow-footer">

            <p class="center white">© Website réalisé en HTML5 / CSS3 / Javascript.</p>

        </div>
    </footer>

</body>

</html>