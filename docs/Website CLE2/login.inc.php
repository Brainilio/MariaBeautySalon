<?php
include('db.inc2.php');
session_start();


$username = mysqli_escape_string($conn1,$_POST['uid']); //sql beveiliging//
$password = mysqli_escape_string($conn1,$_POST['pwd']); //sql beveiliging//

$sql = ("SELECT * FROM `users` WHERE username = '$username'
and password = '$password'");

$result = mysqli_query($conn1, $sql) or die(mysqli_error($conn1));
$rows = mysqli_fetch_array($result);


if($rows > 0) {
    $_SESSION['username'] = $username;

        header('Location: agenda.php');
} else {

    echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='loginpage.php'>Login</a></div>";
}


?>





