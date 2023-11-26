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
$num_cuenta = $_POST["txtclave"];


$query = mysqli_query($conn, "INSERT INTO usuarios (USUARIO,PASSWORD,CLAVE) VALUES ('$nombre','$pass','$num_cuenta')");

if($query==1){
    echo"registro exitosamente";
}

else{
    echo"no se pudo registrar";
}
?>