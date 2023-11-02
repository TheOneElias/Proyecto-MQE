<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="usuarios";
$dbport="3306";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbuser, $dbport);

if(!$conn){
    die("no hay conexion: ".mysqli_connect_error());
}
$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn, "SELECT * FROM users WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1){
    header("Location: menu.html");

}

else if($nr == 0){
    echo"no ingreso";
}
?>
