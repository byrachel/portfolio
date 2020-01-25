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
    <div class="container">
        <header>
        
        <?php include("menu.php"); ?>
            
        </header>
    </div>

    <div class="projet container">
        <div id="up"></div>
        <br />
        <p class="date align-right"><a href="cena.php">Projet Cena >></a></p>
        <h1 class="projet-title center">Développeur web & mobile</h1>
        <h2 class="center">Projet : Dev.(io)</h2>
        <br />
        <div class="underline"></div>
    </div>
    <section>

        <div class="container img-container center pb-5">
            <img src="img/dev_io_js.jpg" alt="Communauté de développeurs JS" class="img-fluid " />
            <h3>Objectif :</h3>
            <div class="underline"></div>
            <p>Création d'un espace dédié aux <span class="slogan center">développeurs fans de Javascript</span>. Il s'agit de référencer de manière collaborative les outils et services autour de Javascript, tout ce qui peut faciliter la vie des développeurs Front-End et Back-End.</p>
            <p class="text-center">Version Bêta visible ici : <a href="https://byrachel.github.io/devio/">byrachel.github.io/devio/.</a></p>

        </div>

        <div class="container mt-2">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/dev_io.jpg" class="img-fluid shadow"/>
                </div>
                <div class="col-md-8">
                    <br />
                    <p class="slogan">Tel un wikipédia du développeur JS, chacun peut créer un compte et participer au site:</p>
                    <br />
                        <ul>
                            <li><p>Authentification (création d'un compte),</p></li>
                            <li><p>Création d'un post,</p></li>
                            <li><p>Modification d'un post existant,</p></li>
                            <li><p>Classement des posts par catégorie.</p></li>
                        </ul>
                    <br />
                    <p><span class="slogan center">Stack :</span></p>
                    <ul>
                        <li><p>Angular + Bootstrap + Firebase.</p></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="divider center">
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