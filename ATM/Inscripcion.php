<?php


// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    // Conectarse a la base de datos 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "atm";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }

    // Obtén los datos del formulario
    $monto = $_POST["monto"];
    $cuenta_origen = $_POST["cuenta_origen"];
    $cuenta_destino = $_POST["cuenta_destino"];

    // Consulta para obtener el saldo de la cuenta de origen
    $consulta_saldo = "SELECT SALDO FROM swift WHERE CUENTA = $cuenta_origen";
    $resultado_saldo = $conn->query($consulta_saldo);

    if ($resultado_saldo->num_rows>0) {
        $fila_saldo = $resultado_saldo->fetch_assoc();
        $saldo_actual = $fila_saldo["SALDO"];

        // Verifica si hay fondos suficientes
        if ($saldo_actual >= $monto) {
            // Realiza la transferencia
            $sql = "UPDATE swift SET SALDO = SALDO - $monto WHERE CUENTA = $cuenta_origen";
            $conn->query($sql);

            if ($conn->affected_rows>0) {
                // Actualiza la cuenta de destino
                $sql = "UPDATE operaciones SET SALDO = SALDO + $monto WHERE CUENTA = $cuenta_destino";
                $result = $conn->query($sql);

                if ($conn->affected_rows>0) {
                    header("location: alertaExito.html");
                } else {
                    header("location: alertaActCI.html");
                }
            } else {
                header("location: alertaInscrip.html");
            }
        } else {
            //verificar la alerta con la pagina a la que se dirige
            header("location: alertaFondosci.html");
        }
    } else {
        header("location: alertaObSalI.html");
    }

    // Cierra la conexión
    $conn->close();
}


?>
 