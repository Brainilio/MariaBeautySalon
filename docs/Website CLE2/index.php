<?php

include_once "includes/header.php";
include 'db.inc2.php';

?>


<div class="container">
    <h1 class="center-align thin pink-text text-darken-3 ">Maak hier uw afspraak</h1>


    <div id="formulier">
        <div class="container">
            <form name="reservering" action="signup.inc.php" method="POST">

                <div class="input-field col s12">
                    <i class="material-icons prefix">event_seat</i>
                    <select name="Afspraken" required="" aria-required="true">
                        <option value="" disabled selected></option>
                        <option value="Benen" name="Afspraken">Benen</option>
                        <option value="Gezicht" name="Afspraken">Gezicht</option>
                        <option value="Brazilian Wax" name="Afspraken">Brazilian Wax</option>
                    </select>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">accessibility</i>
                    <select name="werknemers" required="" aria-required="true">
                        <option value="" disabled selected></option>
                                <?php
                                $werknemer = "SELECT * FROM users";
                                $results = mysqli_query($conn1, $werknemer);
                                $Medewerker = [];
                                        while($row = mysqli_fetch_array($results)) {
                                                  $Medewerker[] = $row;

                                        foreach ($Medewerker as $Personeel) {
                                            echo '<option value="Maria"name="werknemers">', htmlentities($Personeel['username']) , '</option>';
                                     } }?>
                    </select>
                </div>


                <div class="input-field col s2">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="first_name" pattern="[A-Za-z]{1,32}" type="text" name="first" class="validate"
                           required="" aria-required="true">
                    <label for="first_name">First Name</label>
                </div> <!-- Voornaam -->

                <div class="input-field col s2">
                    <i class="material-icons prefix">person_outline</i>
                    <input id="last_name" pattern="[A-Za-z]{1,32}" type="text" name="last" class="validate" required=""
                           aria-required="true">
                    <label for="last_name">Last Name</label>
                </div> <!-- Achternaam -->

                <div class="input-field col s2">
                    <i class="material-icons prefix">phone</i>
                    <input id="icon_telephone" pattern="^\d{10}$" type="tel" name="phone" class="validate" required=""
                           aria-required="true" data-length="10">
                    <label for="icon_telephone">Telefoon ( 0612345678 ) </label>
                </div> <!-- Telefoonnummer -->

                <div class="input-field col s2">
                    <i class="material-icons prefix">email</i>
                    <input id="email_email" type="email" name="email" class="validate" required="" aria-required="true">
                    <label for="email_email">Email</label>
                </div> <!-- Email -->

                <div class="input-field col s2">
                    <i class="material-icons prefix"'>date_range</i>
                    <input type="text" name="date" class="datepicker" required="" aria-required="true">
                </div> <!-- Datum -->

                <div class="input-field col s2">
                    <i class="material-icons prefix">access_time</i>
                    <input type="text" name="tijd" class="timepicker" required="" aria-required="true">
                </div> <!-- Tijd -->


                <div class="input-field center">
                    <button class="btn waves-effect waves-light pink center modal-trigger" href="#modal" type="submit"
                            name="action">Reserveer
                        <i class="material-icons right">send</i>
                </div> <!-- submit -->


            </form>
        </div>
    </div>


    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Modal Header</h4>
            <p>A bunch of text</p>
        </div>

        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
    </div>


    <?php

include_once "includes/footer.php";
?>



