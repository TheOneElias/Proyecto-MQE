<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Conectarse a la base de datos 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "atm";
        $dbport= "3306";

        $conn = new mysqli($servername, $username, $password, $dbname, $dbport);

        // Verifica la conexión
        if ($conn->connect_error) {
            die("La conexión a la base de datos falló: " . $conn->connect_error);
        }

        // Obtén los datos del formulario
        $nombre = $_POST["txtusuario"];
        $ap = $_POST["txtap"];
        $am = $_POST["txtam"];
        $email = $_POST["txtemail"];
        $pass = $_POST["txtpassword"];
        $cuenta = $_POST["txtclave"];
        $saldo = $_POST["txtsaldo"];
        

                $sql = "INSERT INTO swift (CUENTA,PASS,NOMBRE,AP,AM,EMAIL,SALDO) VALUES ($cuenta,'$pass','$nombre','$ap','$am','$email',$saldo)";
                $result = $conn->query($sql);

                if ($result) {
                    
                         header("location: alertaExitoC.html");
                } else {
                    header("location: alertaAcc.html");
                }
                $conn->close();
            } 
        
    

?>
 