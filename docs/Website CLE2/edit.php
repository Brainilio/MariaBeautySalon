<?php
include_once "dbh.inc.php";
include('session.php');

$id = $_REQUEST['ID'];
$query = "SELECT * from reserveringen where ID = '$id'";
$resultaten = mysqli_query($conn,$query);
$Afspraken = mysqli_fetch_assoc($resultaten);

if(isset($_POST['submit'])) {
    $datumid = mysqli_escape_string($conn, $_POST['newDatum']);
    $afspraakid = mysqli_escape_string($conn, $_POST['newAfspraak']);
    $tijdid = mysqli_escape_string($conn, $_POST['newTijd']);
    $medewerkerid = mysqli_escape_string($conn, $_POST['newMedewerker']);

    $newsqli = "UPDATE reserveringen SET datum = '$datumid', afspraken= '$afspraakid', tijd = '$tijdid', werknemer ='$medewerkerid' WHERE ID = $id";
    mysqli_query($conn, $newsqli);
   header("Location: agenda.php?=succesful");
}
?>

<html>
<head>
    <?php include_once 'links.php';
    ?>
</head>
<body>
<header>
    <div class="container center"><h3>Afspraak wijzigen voor klantnummer: <?= $id ?></h3></div>
</header>
<div class="container">
<form action="" method="post">
    Datum: <input type="text" name="newDatum" value="<?= htmlentities($Afspraken['datum'])?>">
    Afspraak: <input type="text" name="newAfspraak" value="<?= htmlentities($Afspraken['afspraken'])?>">
    Tijd: <input type="text" name="newTijd" value="<?= htmlentities($Afspraken['tijd']) ?>">
    Medewerker: <input type="text" name="newMedewerker" value="<?= htmlentities($Afspraken['werknemer'])?>">
    <input type="submit" value="Wijzig" name="submit" >
</form>
</div>
</body>
<footer>
    <a href="agenda.php">Terug</a>
</footer>
</html>





<!--    $id = $_POST['ID'];
    $datumid = $_POST['datum'];
    $afspraakid = $_POST['afspraken'];
    $tijdid = $_POST['tijd'];
    $medewerkerid = $_POST['werknemer'];


-->
