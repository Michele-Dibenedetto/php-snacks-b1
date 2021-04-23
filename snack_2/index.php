<?php
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];

    if ((strlen($name) > 3) && (filter_var($mail, FILTER_VALIDATE_EMAIL)) && (filter_var($age, FILTER_VALIDATE_INT))) {
        echo "accesso riuscito";
    } else {
        echo "accesso negato";
    }
    // if (filter_var($age, FILTER_VALIDATE_INT)) {
    //     echo "ok";
    // } else {
    //     echo "NOT OK";
    // }
?>