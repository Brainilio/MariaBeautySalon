<?php
include_once 'links.php';
include_once 'session.php';
include_once 'dbh.inc.php';



$id = $_GET['ID'];


if(isset($_POST['submit'])) {
    $first = mysqli_escape_string($conn,$_POST['afspraakName']);
    $last = mysqli_escape_string($conn,$_POST['afspraakLast']);
    $phone = mysqli_escape_string($conn, $_POST['afspraakTelefoon']);
    $email = mysqli_escape_string($conn, $_POST['afspraakEmail']);
    $date = mysqli_escape_string($conn, $_POST['afspraakDatum']);
    $time = mysqli_escape_string($conn, $_POST['afspraakTijd']);
    $afspraak = mysqli_escape_string($conn, $_POST['afspraakAfspraak']);

    $sqli = "INSERT INTO reserveringen(naam, achternaam,  telefoon, Email, datum, tijd, afspraken, werknemer) VALUES('$first', '$last', '$phone', '$email', '$date', '$time', '$afspraak', '$login_session');";


    mysqli_query($conn, $sqli);

    header("Location: agenda.php?add_succesful");

}

?>

<html>
<head>
    <title>Voeg afspraak toe</title>
</head>

<body>
<main>
    <div class="container"><h1>Afspraak maken voor <?= $id ?></h1></div>
    <div class="container">
<form action="" method="post">

               Voornaam: <input type="text" name="afspraakName">
               Achternaam:<input type="text" name="afspraakLast">
               Telefoon: <input type="text" name="afspraakTelefoon">
               Datum: <input type="text" name="afspraakDatum">
               Afspraak: <input type="text" name="afspraakAfspraak">
               E-mail: <input type="text" name="afspraakEmail">
               Tijd:<input type="text" name="afspraakTijd">
        <button class="btn waves-effect waves-light" type="submit"name="submit">Voeg toe
                <i class="material-icons right">send</i>
            </button>



</form>
    </div>
</main>
<footer>
    <a href="agenda.php">Terug</a>
</footer>
</body>
</html>
