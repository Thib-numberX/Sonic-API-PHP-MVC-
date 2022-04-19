<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">

    <title>Sonic The Hedgehog</title>
</head>

<body>
    
    <img class="btn--menu--phone modal-trigger" src="assets/image/Sonic-Logo.png" alt="logo sonic">

    <header>
        <img class="logo--header" src="assets/image/1200px-Sonic_The_Hedgehog.svg.png" alt="Sonic The Hedgehog">
        <div class="menu-responsive modalContainer">
            <div class="overlay modal-trigger"></div>
            <nav class="nav__ul">
                <ul class="nav--ul__li">
                    <li class="ul--li"><a class="ul--li" href="<?= $router->generate('home') ?>"> Accueil</a> </li>
                    <li class="ul--li"><a class="ul--li" href="<?= $router->generate('createur') ?>" > Créateurs</a> </li>
                </ul>
            </nav>
        </div>
        
    </header>

    <!-- end header -->