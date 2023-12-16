<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body{
            background: url(img/INICIO2.gif) no-repeat center top;
            background-size: cover;
            background-color: black;
        }
        #pedorro{
            font-family: arial;
            font-weight: bold;
            color: #2C5876;
            
            filter: drop-shadow(5px 5px 10px #000);
            z-index: 4;
        }
        #holis{
            color: #000;
            font-family: arial ;
            z-index: 4;
        } 
        .cola{
            top: 25%;
            left: 40%;
            position: fixed;
            z-index: 4;
        }
        .bloque{
            width: 320px;
            height: 420px;
            background: #FFFF;
            color: #0000;
            border-radius: 8px;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
            filter: drop-shadow(5px 5px 10px #636363);
            z-index: 2;
        }
        .fondo{
            width: 110vw;
            height: 110vh;
            top: -1%;
            left: -1%;
            background: url(img/INICIO2.gif) no-repeat center top;
            background-size: cover;
            background-color: black;
            position: fixed;
            color: #000;
            z-index: 1;
        }
    </style>
</head>    
<body>
    <!DOCTYPE HTML>
<html>
<body>

        <div class="bloque"></div>
        <div class="cola">
<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="atm";
$dbport="3306";


$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport);

if(!$conn){
    die("no hay conexion: ".mysqli_connect_error());
}

$clave = $_POST["txtclave"];

$sql = "SELECT * FROM swift WHERE PASS= '$clave'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
        echo "<h2 id=\"pedorro\">Datos de la Persona:</h2>";
        echo "<p id=\"holis\">ID: " . $row["ID"]. "</p>";
        echo "<p id=\"holis\">Nombre: " . $row["NOMBRE"]. "</p>";
        echo "<p id=\"holis\">Apellido paterno: " . $row["AP"]. "</p>";
        echo "<p id=\"holis\">Apellido materno: " . $row["AM"]. "</p>";
        echo "<p id=\"holis\">Email: " . $row["EMAIL"]. "</p>";
        echo "<p id=\"holis\">Cuenta: " . $row["CUENTA"]. "</p>";
        echo "<p id=\"holis\">Clave: " . $row["PASS"]. "</p>";
        echo "<p id=\"holis\">Saldo: " . $row["SALDO"]. "</p>";
       
       
    }
} else {
   header("location: alertaConsulta.html");
}

$conn->close();
?>
</div>
<div class="fondo"></div>
</body>
</html>