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
        $cuenta_origen = $_POST["cuenta"];
       

        
        $consulta_saldo = "SELECT SALDO FROM swift WHERE CUENTA = $cuenta_origen";
        $resultado_saldo = $conn->query($consulta_saldo);

        if ($resultado_saldo->num_rows>0) {
            $fila_saldo = $resultado_saldo->fetch_assoc();
            $saldo_actual = $fila_saldo["SALDO"];

            
            if ($saldo_actual >= $monto) {
                
                $sql = "UPDATE swift SET SALDO = SALDO - $monto WHERE CUENTA = $cuenta_origen";
                $result = $conn->query($sql);

                if ($result) {
                 
                    header("location: alertaExito.html");
                } else {
                    header("location: alertaRetiro.html");
                }
            } else {
                header("location: alertaFondosIr.html");
            }
        } else {
            header("location: alertaObSalr.html");
        }

        // Cierra la conexión
        $conn->close();
    }

?>
 