<?php
include_once 'dbh.inc.php';

$id = $_GET['ID'];

$result = "DELETE FROM reserveringen WHERE ID='$id'";

mysqli_query($conn, $result);

header("Location: agenda.php?delete_succesful");

?>

