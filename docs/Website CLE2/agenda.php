<?php
include('session.php');
include 'dbh.inc.php';

$werknemer = "SELECT * FROM reserveringen WHERE werknemer = '$login_session'";
$results = mysqli_query($conn, $werknemer);
$Afspraken = [];
while($row = mysqli_fetch_array($results)) {
    $Afspraken[] = $row;
}

?>

<html>

<head>
    <title>Maria Brazilian Wax - Agenda</L></title>
    <?php

    include_once "links.php";

    ?>

</head>
<header>
    <div class="section center" style="padding: 100px;"><h1>Welcome <?= $login_session ?></h1></div>
</header>
<body>
<main>
<div class="container">
    <center>
<table class="centered highlight striped responsive-table">
    <thead>
    <tr>
        <th>#</th>
        <th>Naam</th>
        <th>Achternaam</th>
        <th>Telefoonnummer</th>
        <th>Datum</th>
        <th>Afspraak</th>
        <th>Email</th>
        <th>Tijd</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($Afspraken as $Afspraak) { ?>

    <tr>
        <td><?php echo htmlentities($Afspraak['ID']); ?></td>
        <td><?php echo htmlentities($Afspraak['naam']); ?></td>
        <td><?php echo htmlentities($Afspraak['achternaam']); ?></td> <!-- htmlentities = xss beveiliging -->
        <td><?php echo htmlentities($Afspraak['telefoon']); ?></td>
        <td><?php echo htmlentities($Afspraak['datum']); ?></td>
        <td><?php echo htmlentities($Afspraak['afspraken']); ?></td>
        <td><?php echo htmlentities($Afspraak['Email']); ?></td>
        <td><?php echo htmlentities($Afspraak['tijd']); ?></td>
        <td><a href="edit.php?ID=<?=htmlentities($Afspraak['ID'])?>">Wijzig</a></td>
        <td><a href="delete.php?ID=<?=htmlentities($Afspraak['ID'])?>">Verwijder</a></td>
    </tr>
    </tbody>
    <?php }
    ?>
</table>
        <a href="add.php?ID=<?=$login_session ?>">Voeg nieuwe afspraak toe!</a> <br>
        <?php
        if($login_session == 'Maria') {
            echo '<a href="registration.php?ID=<?=htmlentities($login_session)?>">Voeg nieuwe werknemer toe!</a>';
        }


        ?>

    </center>

</div>
</main>

<a style="" href="logout.php">Log uit</a>

</body>
</html>
