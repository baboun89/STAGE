<?php

if (!empty($_POST)) {
    if (
        isset($_POST['telephone'])
        && empty($_POST['telephone'])
    ) {

        // Ici $_POST n'est pas vide
        // On vérifie que tous les champs "obligatoires" sont remplis
        if (
            isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['message'])
            && !empty($_POST['nom'])
            && !empty($_POST['prenom'])
            && !empty($_POST['email'])
            && !empty($_POST['message'])
        ) {
            // Tous les champs existent et ne sont pas vides
            // On vérifie si les critères de remplissage sont respectés
            // Email -> email
            // On "nettoie" le contenu des champs texte -> protection contre les failles XSS (Cross Site Scripting)
            // On retire toute balise HTML ou on encode les caractères <, > en leurs équivalents HTML &lt;, &gt;...
            $prenom =  strip_tags($_POST['prenom']);
            $nom = strip_tags($_POST['nom']);
            $message = htmlspecialchars($_POST['message']);
        }

        // On vérifie si l'email est un email
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            die('Email invalide');
        }

        // Les données sont prêtes à être stockées
        // On se connecte à la base
        require_once 'includes/connect.php';

        // On écrit la requête
        $sql = "INSERT INTO `contacts`( `firstname`, `lastname`, `email`,`message`) VALUES (:nom, :prenom, :email, :message);";

        // On prépare la requête
        $requete = $db->prepare($sql);

        // On injecte les données
        $requete->bindValue(':nom', $nom);
        $requete->bindValue(':prenom', $prenom);
        $requete->bindValue(':email', $_POST['email']);
        $requete->bindValue(':message', $message);

        // On exécute la requête
        $requete->execute();
        // On redirige vers la page d"acceuil
        header('location: index.php');
        exit;
    } else {
        // Au moins 1 champ est inexistant ou vide
        header('location: contacts.php#textchamps');
        exit;
    }
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacts</title>
    <link rel="shortcut icon" type="image/png" href="images/logo/logomini.png" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles_clair.css" id="theme-link">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="js/scripts.js" defer></script>
</head>

<body>
    <header>
        <div id="scrollUp">
            <a href="#top"><img class="remonte" src="images/logo/remonte.png" alt="remonter" width="20"></a>
        </div>
        <div id="nav">
            <a href="index.php" width="100"><img src="images/logo/pb.png" alt="logo" width="40"></a>
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
                        <a href="contacts.php">CONTACT</a>
                    </li>
                </ul>
            </nav>
        </div>
        <img src="images/logo/navbar.png" alt="navbar" width="100%">
    </header>
    <main>
        <section class="form">
            <form method="POST">
                <label for="nom">Nom</label>
                <input type="text" name="nom" placeholder="Votre nom ">

                <label for="nom">Prénom</label>
                <input type="text" name="prenom" placeholder="votre prénom">

                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Votre email">

                <input type="hidden" name="telephone">

                <label for="message">Message</label>
                <textarea name="message" id="textchamps" cols="30" rows="10" placeholder="Votre message"></textarea>

                <button type="submit" class="bouton_contact">Envoyer</button>
                <div id="red">
                    <P>TOUS LES CHAMPS SONT OBLIGATOIRE</P>
                </div>
            </form>
        </section>
        <section id="adress">
            <img id="clair" src="images/logo/pb.png" alt="logo" width="150">
            <img id="sombre" src="images/logo/pb.png" alt="logo" width="150">
            <h2>tel: 06 13 30 86 56</h2>
            <p>email: philbab@live.fr</p>
            <p>11bis rue des fossés st jean</p>
            <p>89300 Joigny</p>
        </section>
        <section id="zone">
            <div class="titre">
                <h1>Ma zone d'intervention</h1>
            </div>
            <article id="carte">
            </article>
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