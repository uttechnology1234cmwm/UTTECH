<?php
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login| UTTECH</title>
    <link rel="stylesheet" href="/UTTECH/css/Login.css">
    <link rel="stylesheet" href="/UTTECH/css/MiEstilo.css">
    <link rel="stylesheet" href="/UTTECH/css/MiEstilo.css">
  </head>
  <body>
<br>
<br>
<br>
    <div class="login-box">
      <img src="/UTTECH/img/Logo2.png" class="avatar" alt="Avatar Image">
      <h1>Iniciar sesion</h1>
      <form action="validar.php" method="POST">
        <!-- USERNAME INPUT -->
       
        <label for="usuario">Nombre de usuario</label>
        <input type="text" placeholder="usuario" name="usuario">
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" placeholder="password" name="password">
        <input type="submit" value="Ingresar" >
      
</form>
    </div>
  </body>
</html>