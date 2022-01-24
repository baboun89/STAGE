<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stage</title>
    <link rel="shortcut icon" type="image/png" href="images/logo/logomin.png" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles_clair.css" id="theme-link">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin="" defer></script>
    <script src="js/scripts.js" defer></script>
</head>

<body>
    <header>
        <div id="scrollUp">
            <a href="#top"><img class="remonte" src="images/logo/remonte.png" alt="remonter" width="20"></a>
        </div>
        <div id="nav">
            <a href="ajoutrealisation.php" width="100"><img src="images/logo/logo.png" alt="logo" width="100"></a>
            <div id="tel">
                <p><img src="images/logo/tel.png" alt="logotel" width="18"> 06 83 77 62 92</p>
            </div>
            <nav class="navbar">
                <label for="btn" class="icon">
                    <div class="burger">
                        <span></span>
                    </div>
                </label>
                <input type="checkbox" id="btn">
                <ul class="nav-menu">
                    <li class="nav-item">
                        <label for="btn2" class="show">FOSSE SEPTIQUE</label>
                        <input type="checkbox" id="btn2">
                        <ul class="dropdown2">
                            <li class="drop-item">
                                <a href="services.html">Vidange</a>
                            </li>
                            <li class="drop-item">
                                <a href="services.html#canalisation">Débouchage canalisation</a>
                            </li>
                            <li class="drop-item">
                                <a href="services.html#assainissement">Entretien et nettoyage</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <label for="btn3" class="show">SERVICES </label>
                        <input type="checkbox" id="btn3">
                        <ul class="dropdown">
                            <li class="drop-item">
                                <a href="services.html">Terrassement en tout genre</a>
                            </li>
                            <li class="drop-item">
                                <a href="services.html#canalisation">Remplacement de canalisations</a>
                            </li>
                            <li class="drop-item">
                                <a href="services.html#assainissement">Assainissement</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="realisations.php">REALISATIONS</a>
                    </li>
                    <li class="nav-item">
                        <a href="contacts.php">CONTACT</a>
                    </li>
                </ul>
            </nav>
        </div>
        <img src="images/logo/navbar.png" alt="navbar" width="100%">
    </header>
    <main>
        <section id="diaporama">
            <div class="titre">
                <h1>Fosse septique</h1>
            </div>
            <!-- diapo1 -->
            <div class="diapo" data-speed="5000" data-transition="500">
                <div class="elements">
                    <div class="element">
                        <img src="images/images/diap.jpg" alt="photo1">
                        <legend>
                            <h1>vidange</h1>
                            <p>La vidange de fosse septique est une opération qu’il est recommandé d'effectuer tous les 4 ans environ. Elle permet d’éviter l’engorgement des tuyaux, l'engorgement du bac à graisse et le cas échéant de tous les tuyaux de l’installation de votre maison. Vidanger la fosse est donc un acte primordial que nous assurons . Il est ainsi impératif d'effectuer la vidange de fosse septique avant que le volume de fosse n’atteigne un niveau critique qui empêcherait le processus de liquéfaction.

                            </p>
                        </legend>
                    </div>
                    <div class="element">
                        <img src="images/images/diap.jpg" alt="photo2">
                        <legend>
                            <h1>Débouchage canalisation</h1>
                            <p>Le débouchage de canalisation est une intervention qui consiste à dégager le chemin à l’intérieur de vos canalisations, de façon à ce que l’eau et les déchets (papier toilette par exemple) puissent circuler correctement jusqu’à être évacués complètement.</p>
                        </legend>
                    </div>
                    <div class="element">
                        <img src="images/images/diap.jpg" alt="photo3">
                        <legend>
                            <h1>Entretien et nettoyage</h1>
                            <p>En entretenant régulièrement votre fosse septique, vous allongez sa durée de vie, facilitez l’évacuation et évitez les situations d’urgence. Pour cela, l’utilisation régulière d'activateur (activateur biologique ou activateurs chimiques) est recommandée.
                                Après chaque vidange de fosse septique effectuée par un vidangeur, il convient d’injecter des activateurs pour nettoyer en profondeur les canalisations et stimuler les bactéries utiles. Vous pouvez également verser chaque semaine un sachet d’activateurs biologiques de fosse ou d'activateurs chimiques au fond de vos canalisations pour éviter les mauvaises odeurs et faciliter l’assainissement des boues.</p>
                        </legend>
                    </div>
                </div>
                <img src="images/logo/navg.png" alt="avant" id="gauche" width="20">
                <img src="images/logo/navd.png" alt="apres" id="droite" width="20">
            </div>
            <!-- diapo2 -->
            <div class="titre">
                <h1>Nos Services</h1>
            </div>
            <div class="diapo" data-speed="5000" data-transition="500">
                <div class="elements">
                    <div class="element">
                        <img src="images/images/diap.jpg" alt="photo1">
                        <legend>
                            <h1>Terrassement</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus distinctio incidunt,
                                aperiam dicta nisi repellat sequi repudiandae eos nihil quia?</p>
                        </legend>
                    </div>
                    <div class="element">
                        <img src="images/images/diap.jpg" alt="photo2">
                        <legend>
                            <h1>Terrassement</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus distinctio incidunt,
                                aperiam dicta nisi repellat sequi repudiandae eos nihil quia?</p>
                        </legend>
                    </div>
                    <div class="element">
                        <img src="images/images/diap.jpg" alt="photo3">
                        <legend>
                            <h1>Terrassement</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus distinctio incidunt,
                                aperiam dicta nisi repellat sequi repudiandae eos nihil quia?</p>
                        </legend>
                    </div>
                    <div class="element">
                        <img src="images/images/diap.jpg" alt="photo4">
                        <legend>
                            <h1>Terrassement</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus distinctio incidunt,
                                aperiam dicta nisi repellat sequi repudiandae eos nihil quia?</p>
                        </legend>
                    </div>
                    <div class="element">
                        <img src="images/images/diap.jpg" alt="photo5">
                        <legend>
                            <h1>Terrassement</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus distinctio incidunt,
                                aperiam dicta nisi repellat sequi repudiandae eos nihil quia?</p>
                        </legend>
                    </div>
                </div>
                <img src="images/logo/navg.png" alt="avant" id="gauche" width="20">
                <img src="images/logo/navd.png" alt="apres" id="droite" width="20">
            </div>
        </section>
        <section id="realisations">
            <div class="titre">
                <h1>Nos Réalisations</h1>
            </div>
            <div class="grid grid-5">
                <?php

                // On se connecte à la base
                require_once 'includes/connect.php';

                // On écrit la requête
                // On ne met JAMAIS une donnée extérieure ($id) directement dans la requête
                $sql = "SELECT * FROM `realisations` ";

                // Une requête contenant des paramètres SQL doit être "préparée"

                $requete = $db->query($sql);


                $realisations = $requete->fetchAll();
                foreach ($realisations as $realisation) {

                    echo "
                    <article class='card'>
                    <div class='overlay'>
                    <h2>{$realisation['title']}</h2>
                    </div>
                    <img src='uploads/realisations/{$realisation['featureimage']}' alt=''>
                    </article>";
                }

                ?>
            </div>
        </section>
        <section id="contact">
            <div class="titre">
                <h1>Contactez Nous</h1>
            </div>
            <div id="flex">
                <article id="agrement">
                    <img src="images/logo/Logo_de_la_République_française.png" alt="Logo de la République française" width="100">
                    <p>Agrément: 2017/N89/ 0034</p>
                </article>
                <article id="adress">
                    <img src="images/logo/logo.png" alt="logo" width="150">
                    <h2>tel: 06 83 77 62 92</h2>
                    <p>email:</p>
                    <p>"Les Marquets"</p>
                    <p>89116 Cudot</p>
                </article>
            </div>
        </section>
        <section id="zone">
            <div class="titre">
                <h1>Notre zone d'intervention</h1>
            </div>
            <article id="carte">
            </article>
        </section>
    </main>
    <footer>
        <div id="nav">
            <div id="foothaut">
                <img src="images/logo/logo.png" alt="logo" width="30%">
                <label>
                    <p>Mode clair/sombre</p>
                    <input type="checkbox" id="case" checked="">
                    <span id="theme" class="check"></span>
                </label>
            </div>
        </div>
        <div id="text">
            <p><a href="#">Mentions légales</a> <a href="#">Protection de la vie privée</a> <a href="#">Infos
                    cookies</a></p>
        </div>
        <img src="images/logo/navbar.png" alt="navbar footer" width="100%" id="navfoot">
    </footer>
</body>

</html>