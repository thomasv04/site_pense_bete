<?php if($_SERVER['REQUEST_URI'] == '/index.php') header('Location:/');

include '../../connexion.php';
$requete = mysqli_query($link,'SELECT * FROM article where type_zone = "css"')or die('Erreur SQL !' .mysql_error());
?>



<!doctype html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Pense-bête / CSS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
        <link href="https://fonts.googleapis.com/css?family=Lemonada" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <script type='text/javascript' src="js/script.js"></script>

    </head>



    <body>

        <div class="retour">
            <a class="grey" href="../../index.php">RETOUR</a>
        </div>

        <div class="section">
            <h3 class="green">CSS</h3>
        </div>

        <div class="liste_articles">



            <?php while ($donnees = mysqli_fetch_array($requete)){  $titre = $donnees['titre']; $id = $donnees['id'];

                  echo '<div class="articles_css articles">';
                  echo '<a href="code.php?id='.$id.'">'.$titre.'</a>';
                  echo '</div>';  }?>

            <div class="articles_css articles ">
                <a href="#" >Test</a>
            </div>
            <div class="articles_css articles ">
                <a href="#" >Test</a>
            </div>

            <div class="articles_css articles ajouter_articles">
                <a href="#" class="ajouter"><span>+</span>Ajouter un article</a>
            </div>





        </div>

    </body>

</html>
