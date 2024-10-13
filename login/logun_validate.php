<?php 

/* include("conexion.php"); */
$conexion = mysqli_connect("localhost","root","","bomberos");

if(isset($_POST["logbtn"])){
    if(isset($_POST["usuario"]) && isset($_POST["pass"])){
        $usuario = $_POST["usuario"];
        $contra = $_POST["pass"];
        $consulta = mysqli_query($conexion, "SELECT * FROM `usersadmin` WHERE usuario = '$usuario'");
        if($fila = mysqli_fetch_array($consulta)){
            if($usuario==$fila[1] && $contra == $fila[2]){
                header("location: dashboard.php");
                session_start();
                $_SESSION["usuario"] = $usuario;
            }else{
                header("location: admin-login.php");
            }
        }else{
            echo "No se pudo conectar a la base de datos";
        }
    }
}
/* $conexion = mysqli_connect("localhost","root","","bomberos"); */


/* $consulta = mysqli_query($conexion, "SELECT * FROM usersadmin WHERE id = 1"); */
/* if ($conexion) { */
/*   /1* die("Connection failed: " . $conexion->connect_error); *1/ */
/*     echo $consulta; */
/* } */

/* while ($row = mysqli_fetch_array($consulta)) { */
/*     echo $row['usuario']; */
/*     /1* echo $row['pass']; *1/ */
/* } */


?>
