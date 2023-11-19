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

$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE USUARIO = '".$nombre."' and PASSWORD = '".$pass."'");

//hacer una condicion para cuando los campos esten vacios
if($nr=$query){
    header("Location: menu.html");

}

else{
    echo"no ingreso";
}
?>