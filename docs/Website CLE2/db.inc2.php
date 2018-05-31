<?php

//Dit is de database connectie voor de login geassist met conn1//

$dbServername1 = "localhost";
$dbUsername1 = "root";
$dbPassword1 = "";
$dbName1 = "loginsystem";

$conn1 = mysqli_connect($dbServername1, $dbUsername1, $dbPassword1, $dbName1);


if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>

