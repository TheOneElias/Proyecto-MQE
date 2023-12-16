<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
         
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "atm";

        $conn = new mysqli($servername, $username, $password, $dbname);

        
        if ($conn->connect_error) {
            die("La conexión a la base de datos falló: " . $conn->connect_error);
        }

        
        $monto = $_POST["monto"];
        $cuenta = $_POST["cuenta"];
        
        $sql = "UPDATE swift SET SALDO = SALDO + $monto WHERE CUENTA = $cuenta";
        $conn->query($sql);

        
                    
                    if ($conn->affected_rows > 0) {
                        header("location: alertaExito.html");
                    } else {
                        header("location: alertaDepo.html");
                    }
                    $conn->close();
                } 
    
?>
 