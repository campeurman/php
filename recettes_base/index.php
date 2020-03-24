<?php 


$lien = isset($_GET["lien"])? $_GET["lien"] : "accueil";

    switch ($lien) {
        case "accueil":
           $page = "recettes/accueil.html";
            break;
        case "entree":
            $page = "recettes/entree.php";
            break;
            case "entree1":
                $page = "recettes/recette.php";
                break;
            case "entree2":
                $page = "recettes/recette.php";
                break;
            case "entree3":
                $page = "recettes/recette.php";
                break;
        case "plat":
            $page = "recettes/plat.php";
            break;
            case "plat1":
                $page = "recettes/recette.php";
                break;
            case "plat2":
                $page = "recettes/recette.php";
                break;
            case "plat3":
                $page = "recettes/recette.php";
                break;
        case "dessert":
            $page = "recettes/dessert.php";
            break;
            case "dessert1":
                $page = "recettes/recette.php";
                break;
            case "dessert2":
                $page = "recettes/recette.php";
                break;
            case "dessert3":
                $page = "recettes/recette.php";
                break;
        default : $page = "recettes/accueil.html";
    }

?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Mon livre de recettes</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body>
        <header>
            <?php require "menu.php"; ?>
        </header>
        
<?= var_dump($_GET); ?>
<?php require "$page"; ?>
    </body>

</html>