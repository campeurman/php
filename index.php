<?php
/*include "$lien.php";
$length = sizeof($articles);


$titre = "";
$photo = "";
$contenu = "";
$liste = "";
for($i= 0; $i < $length; $i++) {
    $titre .= $articles[$i][0];
    $image .= $articles[$i][1];
    $contenu .= $articles[$i][2];

$liste .= "<article><h2>$titre</h2><img src=\"img\ ".$photo."\" alt=\"\"><p>".$contenu."</p></article>";
}*/
?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Les entrées</title>
    <link rel="stylesheet" type="text/css" href="vtechno.css">
</head>
<body>
<header id="entete">
    <img src="logo.jpg"alt="">
    <p>le futur est en marche ne nous laissons pas distancer</p>
</header>
<nav>
    <ul>
        <li id="menu-article"><a href="index.php?lien=article">article</a></li>
        <li id="menu-info"><a href="index.php?lien=info">info</a></li>
        <li id="menu-projet"><a href="index.php?lien=projet">projet</a></li>
    </ul>
</nav>
<section>
<?php  ?>
</section>
<footer>
    
</footer>
</body>
</html>