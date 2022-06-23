<?php 
include("conexion.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];

$con = conectar();
$sql = "UPDATE usuario SET nombre = '$nombre', apellido = '$apellido', telefono= '$telefono' WHERE id = '$id' ";
if(($result = mysqli_query($con,$ql)) == false){
    die(mysqli_error($con));
}
header("location:consulta.php");
?>