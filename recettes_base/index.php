<?php 
var_dump ($_GET);

$lien = isset($_GET["lien"])? $_GET["lien"] : "accueil";

    switch ($lien) {
        case "accueil":
           $page = "recettes/accueil.html";
            break;
        case "entree":
            $page = "recettes/entree.html";
            break;
        case "plat":
            $page = "recettes/plat.html";
            break;
        case "dessert":
            $page = "recettes/dessert.html";
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
        
        
<?php require "$page"; ?>
    </body>

</html>