<?php
function conectar(){
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "compu7";

    //CONEXION
    $conn = mysqli_connect($server,$user,$password,$db);
    if(!$conn){
        die ("Error conexion a base de datos: " . mysqli_connect_error());
}else{
    echo "conexion Completa";

} 
return $conn;   
}

?>
