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
$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$sql ="SELECT * FROM usuarios WHERE USUARIO = '$nombre' AND CONTRA = '$pass'";
$result = $conn->query($sql);

/*
$result->num_rows es una propiedad en PHP que pertenece al objeto $result, 
que es el resultado de una consulta a la base de datos. Esta propiedad 
num_rows devuelve el número de filas que se han encontrado como resultado
 de la consulta SQL.
*/

if ($result->num_rows > 0) {
   header("Location: menu.html");
    
} else {
    echo "Nombre de usuario o contraseña incorrectos";
}

$conn->close();  //cierre de la connection
?>