<?php
//dit is de database connectie voor de reserveringen met conn//
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "reservationsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

