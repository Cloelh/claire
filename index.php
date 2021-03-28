<?php
    include('config/actions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claire Goossaert</title>
    <link rel="stylesheet" href="asset/styles.css">
    <link rel="stylesheet" href="asset/styleMobile.css">

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<div class="content">
    <nav class="navbar navbartop navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-ellipsis-v"></i></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=photo">Photos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=video">Vidéos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=realisation">Autres réalisations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="mb-3">
        <div>
            <!--<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">-->
            <div>
                <?php
                // Quelle est l'action à faire ?
                if (isset($_GET["action"])) {
                    $action = $_GET["action"];
                } else {
                    $action = "home";
                }

                // Est ce que cette action existe dans la liste des actions
                if (array_key_exists($action, $listeDesActions) == false) {
                    include("vues/404.php"); // NON : page 404
                } else {
                    include($listeDesActions[$action]); // Oui, on la charge
                }

                ob_end_flush(); // Je ferme le buffer, je vide la mémoire et affiche tout ce qui doit l'être
                ?>


            </div>
        </div>
    </div>
    <div class="footer fixed-bottom">
        <div class="d-flex align-items-center justify-content-between border-top border-1 mx-5 h-100">
            <div>@claireGoossaert</div>
            <div>
                <a target="_BLANK" href="https://www.linkedin.com/in/claire-goossaert/"><i class="fab fa-linkedin"></i></a>
                <a target="_BLANK" href="https://www.instagram.com/claireg_art/"><i class="fab fa-instagram"></i></a>
                <a target="_BLANK" href="https://www.youtube.com/channel/UCHvN09PDdsTbXFDdU4-7dEg"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>



<!-- TODO : 
    - mettre le target sur tous les link amenant sur une autre page  A VERIFIER
    - faire le responsive 
        -> home
        -> photo
        -> video
        -> real
        -> contact
    - link des reseaux sociaux 
-->