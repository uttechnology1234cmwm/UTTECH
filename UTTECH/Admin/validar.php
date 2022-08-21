<?php
include('conexion2.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];

$consulta="SELECT*FROM admin where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_fetch_array($resultado);

if($filas){
header("location:IndexAd.php");
}
else{
    ?>
    <?php
    echo"Error en la autenticacion";

 ?>
 <h1 class="bad"> Error de autentificación </h1>
 <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);