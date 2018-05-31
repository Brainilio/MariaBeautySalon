<?php
include_once 'dbh.inc.php';

// connection to database -> inserting values into database //


$first = mysqli_escape_string($conn, $_POST['first']);
$last = mysqli_escape_string($conn,$_POST['last']);
$phone = mysqli_escape_string($conn,$_POST['phone']);
$email = mysqli_escape_string($conn,$_POST['email']);
$date = mysqli_escape_string($conn,$_POST['date']);
$werknemer = mysqli_escape_string($conn,$_POST['werknemers']);
$time = mysqli_escape_string($conn,$_POST['tijd']);
$afspraak = mysqli_escape_string($conn,$_POST['Afspraken']);



    $sql = "INSERT INTO reserveringen(naam, achternaam,  telefoon, Email, datum, tijd, werknemer, afspraken) VALUES('$first', '$last', '$phone', '$email', '$date', '$time', '$werknemer', '$afspraak');";

    mysqli_query($conn, $sql);

    header("Location: index.php?signup=succes");




?>


