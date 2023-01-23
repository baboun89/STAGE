<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Aide à Domicile Informatique</title>
    <meta name="description" content="Aide à la personne en informatique,tout âge et tout support.Toutes initiations internet, procédure ou résaux sociaux.Maintenance et réparation ordinateur.Et si vous desirez un site internet personnel.">
    <link rel="shortcut icon" type="image/png" href="images/logo/pb.png" />
=======
    <title>Accueil/SAS VALLEE</title>
    <link rel="shortcut icon" type="image/png" href="images/logo/logomini.png" />
    <link rel="stylesheet" href="css/normalize.css">
>>>>>>> cfa6713d1c2d8d978a3a1e433f94001628d732cd
    <link rel="stylesheet" href="css/styles_clair.css" id="theme-link">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin="" defer></script>
    <script src="js/diapo.js" defer></script>
    <script src="js/scripts.js" defer></script>
</head>

<body>
    <header>
        <div id="scrollUp">
            <a href="#top"><img class="remonte" src="images/logo/remonte.png" alt="remonter" width="20"></a>
        </div>
        <div id="nav">
            <a href="#" width="100"><img src="images/logo/pb.png" alt="logo" width="40"></a>
            <div id="tel">
                <p>Philippe Babouhot</p>
                <img src="images/logo/tel.png" alt="logotel" width="18">
                <p> 06 13 30 86 56</p>
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
                        <label for="btn2" class="show">Aide à la personne</label>
                        <input type="checkbox" id="btn2">
                        <ul class="dropdown2">
                            <li class="drop-item">
                                <a href="index.php#vid">Initiation PC et Internet</a>
                            </li>
                            <li class="drop-item">
                                <a href="index.php#deb">Entretien et nettoyage</a>
                            </li>
                            <li class="drop-item">
                                <a href="index.php#net">Réparation informatique</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
<<<<<<< HEAD
=======
                        <label for="btn3" class="show">SERVICES </label>
                        <input type="checkbox" id="btn3">
                        <ul class="dropdown">
                            <li class="drop-item">
                                <a href="services.html#terrassement">Terrassement en tout genre</a>
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
                        <a href="realisations.php">RÉALISATIONS</a>
                    </li>
                    <li class="nav-item">
>>>>>>> cfa6713d1c2d8d978a3a1e433f94001628d732cd
                        <a href="contacts.php">CONTACT</a>
                    </li>
                </ul>
            </nav>
        </div>
        <img src="images/logo/navbar.png" alt="navbar" width="100%">
    </header>
    <main>
        <div id="titre">
            <h1>AIDE à la PERSONNE INFORMATIQUE</h1>
        </div>
        <section id="diaporama">
            <div class="titre">
                <h1>Aide à domicile internet</h1>
            </div>
            <div class="titre">
                <h1>Nettoyage numérique</h1>
            </div>
            <div class="titre">
                <h1>Réparation ordinateur</h1>
            </div>
            <div class="titre">
                <h1>Elaboration site internet</h1>
            </div>

            <!-- diapo1 -->
            <div class="diapo" data-speed="5000" data-transition="500">
                <div class="elements">
                    <div class="element" id="vid">
                        <img src="images/images/hands.jpg" alt="photo1">
                        <legend>
                            <h1>Initiation PC et Internet</h1>
                            <p>Découverte de l'outil internet dans la vie de tous les jours.Création de comptes divers(réseaux sociaux)</p>
                        </legend>
                    </div>
                    <div class="element" id="deb">
                        <img src="images/images/dog.jpg" alt="photo2">
                        <legend>
                            <h1>maintenance informatique et mise a jour de l'outil.</h1>
                            <p>Pour une meilleur sécurité, l'anti virus et l'ordinateur doit avoir une veille permanente pour rester efficace. </p>
                        </legend>
                    </div>
                    <div class="element" id="net">
                        <img src="images/images/workshop.jpg" alt="photo3">
                        <legend>
                            <h1>Entretien et nettoyage</h1>
                            <p>En entretenant régulièrement votre pc , vous allongez sa durée de vie, évitez les situations d’urgence. Pour cela un ordinateur a jour recommandé.
                            </p>
                        </legend>
                    </div>
                    <div class="element" id="site">
                        <img src="images/images/woman.jpg" alt="photo3">
                        <legend>
                            <h1>Elaboration de site internet</h1>
                            <p>Vous désirez avoir votre propre site internet, ou bien logo,flyers</p>
                        </legend>
                    </div>

                </div>
                <img src="images/logo/navg.png" alt="avant" id="gauche" width="20">
                <img src="images/logo/navd.png" alt="apres" id="droite" width="20">
            </div>
            <div class="titre">
                <h1>Mes Services</h1>
            </div>
            <div class="grid grid-5" data-speed="5000" data-transition="500">
                <div class="element">
                    <img src="images/images/laptop.jpg" alt="photo1">
                    <legend>
                        <h1>Initiation Internet</h1>
                        <p>Pour toute procédure à faire via internet, un accompagne et une aide au quotidien. </p>
                        <p>Tarif:</p>
                        <p>20€ le déplacement plus 20€ de l'heure</p>
                    </legend>
                </div>
                <div class="element">
                    <img src="images/images/computer.jpg" alt="photo2">
                    <legend>
                        <h1>Veille informatique</h1>
                        <p>La veille du matériel informatique est trés important.  </p>
                        <p>Tarif:</p>
                        <p>30€ le déplacement plus 30€ de l'heure</p>
                    </legend>
                </div>
                <div class="element">
                    <img src="images/images/macbook.jpg" alt="photo3">
                    <legend>
                        <h1>Réparation informatique</h1>
                        <p>Réparations en tout genre,remise en état de fonctionnement.</p>
                        <p>Tarif:</p>
                        <p>40€ le déplacement plus 40€ de l'heure</p>
                    </legend>
                </div>
                <div class="element">
                    <img src="images/images/google.jpg" alt="photo3">
                    <legend>
                        <h1>Designer Web</h1>
                        <p>Elaboration d'un site internet de A à Z. </p>
                        <p>Tarif:</p>
                        <p>suivant devis</p>
                    </legend>
                </div>

            </div>
        </section>
        <section id="zone">
            <div class="titre">
                <h1>Ma zone d'intervention</h1>
            </div>
            <figure id="carte">
            </figure>
        </section>
        <section id="contact">
            <div class="titre">
                <h1>Mes coordonnées</h1>
            </div>
            <div id="flex">
                <article id="adress">
                    <img id="clair" src="images/logo/pb.png" alt="logo" width="150">
                    <img id="sombre" src="images/logo/pb.png" alt="logo" width="150">
                    <h1>Philippe Babouhot</h1>
                    <h2>tel: 06 13 30 86 56</h2>
                    <p>email: Philbab@live.fr</p>
                    <p>11bis rue des fossés st jean</p>
                    <p>89300 Joigny</p>
                </article>
            </div>
        </section>
    </main>
    <footer>
        <div id="nav">
            <div id="foothaut">
                <img src="images/logo/pb.png" alt="logo" width="40">
                <label>
                    <p>Mode clair/sombre</p>
                    <input type="checkbox" id="case" checked="">
                    <span id="theme" class="check"></span>
                </label>
            </div>
        </div>
        <img src="images/logo/navbar.png" alt="navbar footer" width="100%" id="navfoot">
    </footer>
</body>

</html>