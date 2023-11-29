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


$sql ="SELECT * FROM swift Where NOMBRE = '$nombre' and PASS = '$pass'";
$result = $conn->query($sql);



if($result->num_rows > 0){
    header("Location: menu.html");

}

else{
    echo"no ingreso";
}
?>