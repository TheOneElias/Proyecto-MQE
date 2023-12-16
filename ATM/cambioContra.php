<?php


// Verifica si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Conectarse a la base de datos 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "atm";
        $dbport="3306";

        $conn = new mysqli($servername, $username, $password, $dbname,$dbport);

        // Verifica la conexión
        if ($conn->connect_error) {
            die("La conexión a la base de datos falló: " . $conn->connect_error);
        }

        // Obtén los datos del formulario
        $cuenta_a = $_POST["txtCA"];
        $cuenta_n = $_POST["txtCN"];
        
        $sql = "UPDATE swift SET PASS = '$cuenta_n' WHERE PASS = '$cuenta_a'";
         $conn->query($sql);
    
                    if ($conn->affected_rows > 0) {
                        header("location: alertaExito.html");
                    } else {
                        header("location: alertaActCon.html");
                    }
            } 

            $conn->close();
        
        

?>
 