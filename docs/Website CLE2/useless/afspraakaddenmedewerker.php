<?php
include_once 'dbh.inc.php';

//sql beveiliging//

$first = mysqli_escape_string($conn,$_POST['afspraakName']);
$last = mysqli_escape_string($conn,$_POST['afspraakLast']);
$phone = mysqli_escape_string($conn,$_POST['afspraakTelefoon']);
$email = mysqli_escape_string($conn,$_POST['afspraakDatum']);
$date = mysqli_escape_string($conn,$_POST['afspraakAfspraak']);
$werknemer = mysqli_escape_string($conn,$_POST['afspraakEmail']);
$time = mysqli_escape_string($conn,$_POST['afspraakTijd']);



$sql = "INSERT INTO reserveringen(naam, achternaam,  telefoon, Email, datum, tijd, werknemer) VALUES('$first', '$last', '$phone', '$email', '$date', '$time', '$werknemer');";

mysqli_query($conn, $sql);

header("Location: agenda.php?signup=succes");

