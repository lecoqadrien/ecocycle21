<?php
    $url = "/ecocycle/src/";
    $path = "/Applications/MAMP/htdocs/" .$url;
    $title = "Accueil";

?>
<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <link rel="stylesheet" href="/ecocycle21/css/style.css">
            <link rel="stylesheet" href="/ecocycle21/css/equipe.css">
            <link rel="stylesheet" href="/ecocycle21/css/contact.css">
            <link rel="stylesheet" href="/ecocycle21/css/queries.css">
            <title>
                <?php if(isset($title)){
                    echo $title;
                }?>
            </title>
        </head>

        <header>
        <nav>
            <a href="/ecocycle21/index.php"><img src="/ecocycle21/img/logo_ecocycle.png"></a>
            <div class="openMenu">
                <img src="/ecocycle21/img/burger.png" alt="image">
            </div>
            <ul>
                <li><a href="index.php">Notre service</a></li><br>
                <li><a href="/ecocycle21/src/pages/team.php">Notre Equipe</a></li><br>
                <a href="/ecocycle21/src/pages/contact.php"><button>Contactez-nous</button></a>
                <div class="closeMenu"></div>
            </ul>
        </nav>
        </header>
        <body>
       
       