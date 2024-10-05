<?php
$server = "localhost";
$user = "rot"
$pass = "";
$db = "test"; 

$conexión = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_errno){
	die("conexion fallida". conexion->connect_errno);
} else {
	echo "conectado";
}
?>