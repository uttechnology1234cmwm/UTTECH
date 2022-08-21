<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM contact";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Pagina Contacto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="/UTTECH/css/MiEstilo.css">
        
    </head>
    <body>
        
    <header class="l-header" id="header">

    <nav class="nav tk-container">
    <img src="/UTTECH/img/Logo.png" alt="Logo" width="130" height="50">
    <div class="nav_menu">
        <ul class="nav_list">
            <li class="nav_item"><a href="IndexAd.php" class="nav_link active-link">Inicio</a></li>
            <li class="nav_item"><a href="ServiciosAd.php" class="nav_link">Servicios</a></li>
            <li class="nav_item"><a href="contactos.php" class="nav_link">Contactos</a></li>
            <li class="nav_item"><a  href="LoginAd.php" class="nav_link">Login</a></li>
        </ul>
    </div>




    <div class="nav_toggle">
        <i class="bx bx-menu"></i>
    </div>
</nav>
</header>
<br>
<br>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingresa datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="correo">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono">
                                    <input type="text" class="form-control mb-3" name="mensaje" placeholder="mensaje">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Teléfono</th>
                                        <th>Mensaje</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <?php
                                $servidor="localhost";
                                $usuario="root";
                                $pass="";
                                $bd="uttech";
                              
                                $enlace=mysqli_connect($servidor, $usuario, $pass, $bd);
                              
                                if(!$enlace){
                                  echo"Error en la conexioncon el servidor";
                                }
                                    $consulta ="SELECT * FROM contact";
                                    $ejecutarConsulta = mysqli_query($enlace, $sql);
                                    $verFilas = mysqli_num_rows($ejecutarConsulta);

                                    if(!$ejecutarConsulta){
                                        echo"Error en la consulta";
                                    }else{
                                        if($verFilas<1){
                                            echo"<tr><td>Sin registros</td></tr>";
                                        }else{
                                            for($i=0; $i; $i++){
                                                echo'
                                                <tr>
                                                    <td>'.$fila[1].'</td>
                                                    <td>'.$fila[2].'</td>
                                                    <td>'.$fila[3].'</td>
                                                    <td>'.$fila[4].'</td>
                                                </tr>
                                                ';
                                                $fila = mysqli_fetch_array($ejecutarConsulta );
                                            }
                                        }
                                    }

                                ?>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['correo']?></th>
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><?php  echo $row['mensaje']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>