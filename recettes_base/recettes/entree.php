
        <?php
      
        $recette1 = [
            "titre"=>"Entree 1",
            "image"=>"img/entree1.jpg",
            "temp"=>"15sec",
            "personne"=>"8",
            "difficulte"=>"1/4",
            "cout"=>"1/4",
            "ingredients"=>"1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///1 branche de céleri///1 carotte",
            "etapes"=>"Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation."
        ];
            $recette2 = [
                "titre"=>"Entree 2",
                "image"=>"img/entree2.jpg",
                "temp"=>"15sec",
                "personne"=>"8",
                "difficulte"=>"1/4",
                "cout"=>"1/4",
                "ingredients"=>"1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///1 branche de céleri///1 carotte",
                "etapes"=>"Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation."
            ];
                $recette3 = [
                    "titre"=>"Entree 3",
                    "image"=>"img/entree3.jpg",
                    "temp"=>"15sec",
                    "personne"=>"8",
                    "difficulte"=>"1/4",
                    "cout"=>"1/4",
                    "ingredients"=>"1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///1 branche de céleri///1 carotte",
                    "etapes"=>"Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation."
                ];
     $recettes =[$recette1,$recette2,$recette3];           
var_dump($recettes);
$length = sizeof($recettes);
var_dump($length);
$list="";
for($i=0;$i<$length;$i++){ 
    $titre = $recettes[$i]["titre"];
    $image = $recettes[$i]["image"];
    $temp = $recettes[$i]["temp"];
    $personne = $recettes[$i]["personne"];
    $difficulte = $recettes[$i]["difficulte"];
    $cout = $recettes[$i]["cout"];
    $ingredients = $recettes[$i]["ingredients"];
    $etapes = $recettes[$i]["etapes"];
    
    $inter = explode("///", $ingredients);
    $inter2 = explode("///", $etapes);

$list.="<h1 class=\"recipe-head\">".$titre."</h1><div class=\"illustration img-block\"><img src=\"".$image."\" alt=\"\"></div><section class=\"row bg-light\">
<div class=\"col-6\">
                <table>
                    <tr>
                        <th>Temps de préparation</th>
                        <th>Personnes</th>
                        <th>Difficulté</th>
                        <th>Coût</th>
                    </tr>
                    <tr>
                        <td>".$temp."</td>
                        <td>".$personne."</td>
                        <td>".$difficulte."</td>
                        <td>".$cout."</td>
                    </tr>
                </table>

                <h2>Ingrédients</h2>
                <ul>      
                    <li>".$inter[0]."</li>
                    <li>".$inter[1]."</li>
                    <li>".$inter[2]."</li>
                    <li>".$inter[3]."</li>
                    <li>".$inter[4]."</li>
                    
                </ul>
            </div>

            <div class=\"col-6\">
                <h2>Etapes</h2>
                <ol>
                    <li>".$inter2[0]."</li>
                    <li>".$inter2[1]."</li>
                    <li>".$inter2[2]."</li>
                </ol>
            </div>
        </section>";

    };
    ?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Mon livre de recettes</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body>
      <?= $list ?>
        
        

    </body>

</html>