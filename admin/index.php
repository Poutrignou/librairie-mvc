<?php

session_start(); 
if(!isset($_SESSION['rank']) || $_SESSION['rank'] < 2 ) {
    header("Location: http://localhost*");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MySQL - Requetes php</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tablettes & Mobiles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/Content/style.css">
    <!-- SCRIPTS -->
    <script src="./js/commun.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</head>


<body>
    <?php

// controllers.php classe abstraite 
    require_once 'Controllers/Controller.php';
    require_once 'Models/Model.php';
    require_once 'Utils/Header4.php';
    

    $controllers=["home", "livre", "fournisseur", "commande", "user"];

    $controller_defaut="home";

    //$_GET : c'est elle qui vous donne les valeurs des informations indiquées dans l'url.

    if (isset($_GET['controller']) and in_array($_GET['controller'],$controllers)) {

        $nom_controller=$_GET['controller'];
    } else {

        $nom_controller=$controller_defaut;
    }

    $nom_classe="Controller_".$nom_controller;
    $nom_fichier="Controllers/".$nom_classe.".php";

    if(file_exists($nom_fichier)) {
        require_once($nom_fichier);
        $controller=new $nom_classe();
    } else {
        exit("Error 404 : not found");
    }
    require_once 'Utils/Footer.php';
    ?>
</body>
</html>

