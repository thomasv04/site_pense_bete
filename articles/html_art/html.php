<?php if($_SERVER['REQUEST_URI'] == '/index.php') header('Location:/'); ?>



<!doctype html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Pense-bête / HTML</title>
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
            <h3 class="yellow">HTML</h3>
        </div>

        <div class="liste_articles">

            <?php
            $dirname = 'articles/';
            $dir = opendir($dirname);

            while($file = readdir($dir)) {
                if($file != '.' && $file != '..' && !is_dir($dirname.$file))
                {
                    echo '<div class="articles articles_html">';
                    echo '<a href="'.$dirname.$file.'">'.basename($file,".php").PHP_EOL.'</a>';
                    echo '</div>';
                }

            }

            closedir($dir);
            ?>






        </div>

    </body>

</html>
