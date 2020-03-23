
        <?php
        $recette [
            "titre"=>"Entree 1",
            "image"=>"img/entree1.jpg",
            "temp"=>"15sec",
            "personne"=>"8",
            "difficulte"=>"1/4",
            "cout"=>"1/4",
            "ingredients"=>"1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///1 branche de céleri///1 carotte",
            "etapes"=>"Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout."///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation.,
            ];
           
$length=sizeof($recette);



    $titre=$recette"[titre]";
    $image = $recette"[image]";
    $temp = $recette"[temp]";
    $personne = $recette"[personne]";
    $difficulte = $recette"[difficulte]";
    $cout = $recette"[cout]";
    $ingrediants = $recette"[ingredients]";
    $etapes =$recette"[etapes]";

    $inter = explode("///",$ingredients);
    $inter2 = explode("///",$etapes);
    ?>
<h1 class="recipe-head\"><?=$titre?></h1><div class="illustration img-block"><img src=\"<?=$image?>\" alt=""></div><section class="row bg-light">
<div class="col-6">
                <table>
                    <tr>
                        <th>Temps de préparation</th>
                        <th>Personnes</th>
                        <th>Difficulté</th>
                        <th>Coût</th>
                    </tr>
                    <tr>
                        <td><?=$temp?></td>
                        <td><?=$personne?></td>
                        <td><?=$difficulte?></td>
                        <td><?=$cout?></td>
                    </tr>
                </table>

                <h2>Ingrédients</h2>
                <ul>"      
                    <li><?=$inter[0]?></li>
                    <li><?=inter[1]?></li>
                    <li><?=inter[2]?></li>
                    <li><?=inter[3]?></li>
                    <li><?=inter[4]?></li>
                    
                </ul>
            </div>

            <div class="col-6">
                <h2>Etapes</h2>
                <ol>
                    <li><?=$inter2[0]?></li>
                    <li><?=$inter2[1]?></li>
                    <li><?=$inter2[2]?></li>
                </ol>
            </div>
        </section>

