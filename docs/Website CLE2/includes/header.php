
<!DOCTYPE html>
<html>
<head>
    <title>Maria Brazilian Wax - Reserveren</title>
<?php

include_once "links.php";
include_once "weather.php";

?>


</head>
<body>

<main>
    <div name="topside">
        <nav class="black">
            <div class="nav-wrapper">
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="" class="waves-effect waves-light"><i class="material-icons left">local_phone</i>+3134500512</a></li>
                    <li><a href="" class="waves-effect waves-light"><i class="material-icons left">location_on</i>2e Middelandstraat 10a, 3021AA Rotterdam</a></li>
                    <li><a href="index.php" class="active waves-effect waves-light"><i class="material-icons left">watch</i>Reserveer</a></li>
                    <li><a href="loginpage.php" class="waves-effect waves-light"><i class="material-icons left">person</i>Medewerker login</a></li>
                </ul>
                <ul class="left hide-on-med-and-down">
                    <li><a href="" class="waves-effect waves-light"><i class="material-icons left">cloud_circle</i><?= $data->main->temp?>°C, <?= $data->name?> </a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo" class="button-collapse">
                    <li><a href="">+3134500512</a></li>
                    <li><a href="">Locatie</a></li>
                    <li><a href="index.php">Reserveer</a></li>
                    <li><a href="loginpage.php">Medewerker Login</a></li>
                    <li><a href="">Het weer: <?= $data->main->temp ?> °C</a></li>
                </ul>
            </div>
        </nav>
        <br>

        <div class="container">
<div class="center-align">
            <img src="img/logo.png" class="responsive-img">
</div>
        </div>
        <br>
        <div>
            <nav class="black">
                <div class="nav-wrapper container black">
                </div>
            </nav>
            </nav>
        </div>
    </div>

<div id="1234">
    <div id="slider" class="slider">

        <ul id="slider1" class="slides center-align">
            <li id="image1">
                <img src="img/blackwhite.gif" class="valign-wrapper">
            </li>
            <li id="image2">
                <img src="img/model.gif">
            </li>
            <li id="image3">
                <img src="img/hair.png">
            </li>
            <li id="image4">
                <img src="img/girl.jpg">
            </li>

        </ul>

    </div>
</div>

    <span id="button2" class="card-title modal-action model-close waves-effect waves-green btn-flat">Hide</span>
    <span  id="button1" class="card-title modal-action model-close waves-effect waves-green btn-flat">Show</span>
    


    <br>

