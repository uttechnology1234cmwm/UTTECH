<?php
  $servidor="localhost";
  $usuario="root";
  $pass="";
  $bd="uttech";

  $enlace=mysqli_connect($servidor, $usuario, $pass, $bd);

  if(!$enlace){
    echo"Error en la conexioncon el servidor";
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto| UTTECH</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/Contacto.css">
    <link rel="stylesheet" href="css/MiEstilo.css">
    <!--Icon-Font-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>
<body>

    <header class="l-header" id="header">

        <nav class="nav tk-container">
      <img src="img/Logo.png" alt="Logo" width="130" height="50">
            <div class="nav_menu">
                <ul class="nav_list">
                    <li class="nav_item"><a href="Index.php" class="nav_link active-link">Inicio</a></li>
                    <li class="nav_item"><a href="Nosotros.php" class="nav_link">Nosotros</a></li>
                    <li class="nav_item"><a href="Servicios.php" class="nav_link">Servicios</a></li>
                    <li class="nav_item"><a href="Contacto.php" class="nav_link">Contacto</a></li>
                </ul>
            </div>
        
  
            <div class="nav_toggle">
                <i class="bx bx-menu"></i>
            </div>
        </nav>
    </header>
    <br>
    <br>
    <br>

    <div class="container-form">
        <div class="info-form">
            <h2>Contáctanos:</h2>
            <p>Contacta nuestro servicio. Solicita nuestros servicios de mantenimiento de computadoras para instituciones.</p>
            <a href="#"><i class="fa fa-envelope"></i> uttecnology@uttechnology19.com</a>
            <a href="#"><i class="fa fa-map-marked"></i> Tecamachalco, Puebla</a>
        </div>
        
        <form action="Contacto.php" method="POST">
        <h3 class="quote-title"> Solicita presupuesto</h3>
            <input type="texto" name="nombre" placeholder="Nombre completo" class="campo">
            <input type="texto" name="correo" placeholder="Correo electrónico" class="campo">
            <input type="texto" name="telefono" placeholder="Teléfono" class="campo">
            <textarea name="mensaje" placeholder="Tu Mensaje..."></textarea>
            <input type="submit" name="enviar" value="Enviar Mensaje" class="btn-enviar">
        </form>

        <br>
        <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3775.254601183472!2d-97.74679217916184!3d18.875783041811946!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5b742d05f3cfc7f8!2sFraccionamiento%20el%20Vergel!5e0!3m2!1ses!2smx!4v1658977320410!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <p class="footer_copy">Copyright &#169; UTTECH</p>
</body>
</html>
<?php
    if(isset($_POST['enviar'])){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $correo=$_POST['correo'];
        $telefono=$_POST['telefono'];
        $mensaje=$_POST['mensaje'];

        $sql = "INSERT INTO contact VALUES('$id','$nombre', '$correo','$telefono','$mensaje')";

        $ejecutarInsertar = mysqli_query($enlace, $sql);

        if(!$ejecutarInsertar){
            echo"Error en la linea de sql";
        }
    }
?>