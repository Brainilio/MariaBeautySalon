<?php

    $json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Rotterdam,NL&units=metric&appid=2e284c2bf54f9557426c2eaa2cbad3e4");
    $data = json_decode($json);


?>



