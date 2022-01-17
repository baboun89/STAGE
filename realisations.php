<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>réalisations</title>
    <link rel="shortcut icon" type="image/png" href="images/logo/logomin.png" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="js/scriptsnav.js" defer></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="js/scriptsmap.js" defer></script>
</head>

<body>
    <header>
        <div id="scrollUp">
            <a href="#top"><img class="remonte" src="images/logo/remonte.png" alt="remonter" width="20"></a>
        </div>
        <div id="nav">
            <a href="index.html" width="100"><img src="images/logo/logo.png" alt="logo" width="100"></a>
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
                        <label for="btn2" class="show">NOS SERVICES</label>
                        <input type="checkbox" id="btn2">
                        <ul class="dropdown">
                            <li class="drop-item">
                                <a href="services.html">Terrassement en tout genre</a>
                            </li>
                            <li class="drop-item">
                                <a href="#canalisation">Remplacement de canalisations</a>
                            </li>
                            <li class="drop-item">
                                <a href="#assinissement">Assainissement</a>
                            </li>
                            <li class="nav-item">
                                <a href="realisations.php">Nos réalisations</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="contacts.html">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
        <img src="images/logo/navbar.png" alt="navbar" width="100%">
    </header>
    <main>
        <section id="realisations">
            <div id="titrepage">
                <h1>NOS REALISATIONS</h1>
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
        <section id="adress">
            <img src="images/logo/logo.png" alt="logo" width="200px">
            <h2>tel: 06 83 77 62 92</h2>
            <p>email:</p>
            <p>"Les Marquets"</p>
            <p>89116 Cudot</p>
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
            </div>
            <div id="text">
                <p><a href="#">Mentions légales</a> <a href="#">Protection de la vie privée</a> <a href="#">Infos
                        cookies</a> </p>
            </div>
        </div>
        <img src="images/logo/navbar.png" alt="navbar footer" width="100%" id="navfoot">
    </footer>

    </main>
</body>

</html>