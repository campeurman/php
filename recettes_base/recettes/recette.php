<h1 class="recipe-head">Entree 1</h1>
        
        <div class="illustration img-block"><a href="entree1.html"><img src="img/entree1.jpg" alt="Image entrée 1">
        </a></div>

        <section class="row bg-light">
            <div class="col-6">
                <table>
                    <tr>
                        <th>Temps de préparation</th>
                        <th>Personnes</th>
                        <th>Difficulté</th>
                        <th>Coût</th>
                    </tr>
                    <tr>
                        <td>15sec</td>
                        <td>8</td>
                        <td>1/4</td>
                        <td>1/4</td>
                    </tr>
                </table>

                <h2>Ingrédients</h2>
                <ul>
                    <li>1 paquet de pâtes de lasagnes</li>
                    <li>3 oignons jaunes </li>
                    <li>3 gousses d'ail</li>
                    <li>1 branche de céleri</li>
                    <li>1 carotte</li>
                    <li>etc ...</li>
                </ul>
            </div>

            <div class="col-6">
                <h2>Etapes</h2>
                <ol>
                    <li>Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.</li>
                    <li> Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.</li>
                    <li>Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation.</li>
                </ol>
            </div>
        </section>
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
            ?>
$length=sizeof($recette);

$titre = "";
$image = "";
$temp = "";
$personne = "";
$difficulte = "";
$cout = "";
$ingrediants = "";
$etapes ="";
for($i=0;$i<$length;$i++){
    $titre="$recette[titre]";
    $image = "$recette[image]";
    $temp = "$recette[temp]";
    $personne = "$recette[personne]";
    $difficulte = "$recette[difficulte]";
    $cout = "$recette[cout]";
    $ingrediants = "$recette[ingredients]";
    $etapes ="$recette[etapes]";


}