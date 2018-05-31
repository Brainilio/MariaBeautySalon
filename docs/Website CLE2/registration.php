<?php
include_once "db.inc2.php";

if(isset($_POST['submit'])) {
    $username = mysqli_escape_string($conn1, $_POST['username']);
    $password = $_POST['password'];

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";

    $result = mysqli_query($conn1, $query);
    header('Location: agenda.php?medewerkeraddsuccesful');


}

?>



<form action="" method="post">
    <input type="text" name="username" placeholder="Gebruikersnaam">
    <input type="text" name="password" placeholder="Wachtwoord">
    <button name="submit" type="submit">Voeg toe</button>


</form>
<a href="agenda.php">Terug</a>