<?php

include '../connexion.php';
//$id = $_GET['id'];
//$requete = mysqli_query($link,'SELECT * FROM article where id = '.$id)or die('Erreur SQL !' .mysql_error());
?>



<!doctype html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Pense-bête / CSS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
        <link href="https://fonts.googleapis.com/css?family=Lemonada" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <script type='text/javascript' src="js/script.js"></script>

    </head>



    <body>

        <div class="retour">
            <a class="grey" href="css.php">RETOUR</a>
        </div>

        <?php /**while ($donnees = mysqli_fetch_array($requete)){  $titre = $donnees['titre'];$id = $donnees['id'];$code = $donnees['code'];$affichage = $donnees['affichage'];$type = $donnees['type_zone'];}


        if($type=="css"){
            $color = "green";
        }
        else if($type=="html"){
            $color = "yellow";
        }**/



        ?>


        <div class="section-articles">
            <select id="select">
                <option value="valeur1">HTML</option>
                <option value="valeur2" selected>CSS</option>
                <option value="valeur3">JAVASCRIPT</option>
            </select>
        </div>

        <div class="code">
            <textarea class="textarea"><?php //echo utf8_encode($code); ?></textarea>
        </div>

        <div class="affichage">
            <?php// echo $affichage; ?>
        </div>

    </body>



</html>
