<?php

session_start();
if (!empty($_POST)) {
    $_SESSION['post'] = $_POST;
    if (
        isset($_POST['title'])
        && !empty($_POST['title'])
        
        ) {
        $title = strip_tags($_POST['title']);
        $nomFichier = NULL;
        if ($_FILES['fichier']['error'] == 0) {
            $extensions = ['pdf', 'txt', 'jpg', 'jpeg', 'jfif', 'png'];
            $types = ['application/pdf', 'text/plain', 'image/jpeg', 'image/png'];
            $extFichier = strtolower(pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION));

            if (!in_array($extFichier, $extensions) || !in_array($_FILES['fichier']['type'], $types)) {
                $_SESSION['message'][] = 'Le type de fichier n\'est pas autorisé (pdf, txt, jpg et png sont acceptés)';
            }

            if ($_FILES['fichier']['size'] > 4194304) {
                $_SESSION['message'][] = 'Le fichier dépasse le maximum de 4Mo autorisé';
            }

            if (!empty($_SESSION['message'])) {
                header('Location: ajoutrealisation.php');
                exit;
            }

            $nomFichier = md5(uniqid()) . '.' . $extFichier;

            $chemin = __DIR__ . '/uploads/realisations/' . $nomFichier;

            if (!move_uploaded_file($_FILES['fichier']['tmp_name'], $chemin)){
                $_SESSION['message'][] = 'La copie de la pièce jointe a échoué';
                header('Location: ajoutrealisation.php');
                exit;
            }
        }
        require_once 'includes/connect.php';

        $sql = "INSERT INTO `realisations`(`title`,`featureimage`) VALUES (:title,:nomfichier)";

        $requete = $db->prepare($sql);

        $requete->bindValue(':title', $title);
        $param = ($nomFichier != NULL) ? PDO::PARAM_STR : PDO::PARAM_NULL;
        $requete->bindValue(':nomfichier', $nomFichier, $param);

        $requete->execute();


        header('Location: index.html');
        exit;
    } else {
        $_SESSION['message'][] = 'Il faut tout remplir';
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="images/logo/logomin.png" />
    <title>Ajout d'un projet</title>
    <link rel="shortcut icon" type="image/png" href="images/logo/logomin.png" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

</head>

<body>
    <div>

        <h1>Ajout d'une réalisation</h1>
        <?php
        if (isset($_SESSION['message'])) {
            foreach ($_SESSION['message'] as $message) {
                echo "<p>$message</p>";
            }
            unset($_SESSION['message']);
        }
        ?>
        <form method="post" enctype="multipart/form-data">
            <div>
                <label for="titre">titre</label>
                <input type="text" name="title" id="titre" value="<?php
                                                                    // if(isset($_SESSION['post']['pseudo'])){
                                                                    //     echo $_SESSION['post']['pseudo'];
                                                                    // }
                                                                    echo $_SESSION['post']['titre'] ?? "";
                                                                    ?>">
            </div>
            <div>
                <label for="fichier">image</label>
                <input type="file" name="fichier" id="fichier" value="<?php
                                                                        echo $_SESSION['post']['fichier'] ?? "";
                                                                        ?>">
            </div>
            <button type="submit">M'inscrire</button>
        </form>
        <?php unset($_SESSION['post']); ?>
    </div>
    <div id="flex">
        <?php

// On se connecte à la base
require_once 'includes/connect.php';

// On écrit la requête
// On ne met JAMAIS une donnée extérieure ($id) directement dans la requête
$sql = "SELECT * FROM `contacts` ";

// Une requête contenant des paramètres SQL doit être "préparée"

$requete = $db->query($sql);


$contacts = $requete->fetchAll();
foreach ($contacts as $contact) {
    
    echo "
    
    <div>
    <h1>contact</h1>
    <p>nom: {$contact['firstname']}</p>
    <p>prénom: {$contact['lastname']}</p>
    <p>email: {$contact['email']}</p>
    <p>message: {$contact['message']}</p>
    </div>";
}  

?>

    </div>
</body>

</html>