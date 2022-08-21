<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];

$sql="UPDATE contact SET  nombre='$nombre',correo='$correo',telefono='$telefono' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: contactos.php");
    }
?>