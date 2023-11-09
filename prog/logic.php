<?php

    $edad = $_POST["txtedad"];

    if ($edad>=18){
        echo "<h1>eres mayor de edad</h1>";
    }
    else{
        echo "<h1>eres menor de edad</h1>";
    }
?>    
