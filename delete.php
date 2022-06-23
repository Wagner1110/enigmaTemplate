<?php 
include("conexion.php");
$id = $_GET['id'];

$con = conectar();
$sql = "DELETE FROM usuario WHERE id = '$id' ";
if(($result = mysqli_query($con,$sql)) == false){
    die(mysqli_error($con));
}
header("location:consulta.php");
?>