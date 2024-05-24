<?php
include('connection.php');
$con = connection();
$ID = NULL;
$Nombre = $_POST['nombre'];
$Apellido = $_POST['apellido'];
$Telefono = $_POST['telefono'];
$Fecha_nacimiento = $_POST['fecha_nacimiento'];
$Correo_electronico = $_POST['correo_electronico'];
$Contraseña = $_POST['contraseña'];

$sql = "INSERT INTO usuario VALUES('ID,Nombre','Apellido','Telefono','Fecha_nacimiento','Correo_electronico','Contraseña');
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
};
?>
