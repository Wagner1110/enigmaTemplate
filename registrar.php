<?php
include("conexion.php");
$con = conectar();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono= $_POST['telefono'];

$sql ="INSERT INTO usuario(nombre,apellido,telefono) values('$nombre','$apellido','$telefono')";

if(($resultado = mysqli_query($con,$sql))==false){
die(mysqli_error($con));


}
//header("refresh:2;url=http://localhost/template/consulta.php");
?>