<?php
include 'db.inc2.php';
session_start();

$user_check = $_SESSION['username'];

$ses_sql = mysqli_query($conn1, "SELECT username FROM users WHERE username = '$user_check'");

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_session = $row['username'];

if(!isset($_SESSION['username'])){
    header("location:loginpage.php");
}

?>