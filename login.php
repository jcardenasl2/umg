<?php include ("conexion/login-conn.php"); ?>
<!DOCTYPE html>

<html>
  <head>
    
    <meta charset="utf-8">
    <title>CONFIO</title>
    <link rel="stylesheet" type="text/css" href="../assets/css-log/style.css">
</head>
<body>  
    
    <div class="version">
            <b>Version</b> 0.1.0
            <strong>Copyright 2021</strong>
            </div>
    
    <div class="login-box">
    <img src="images/dinero.gif" class="avatar">        
    <h1>CONFIO</h1>
        <form action="" method="POST">
        <p>Usuario</p>
        <input type="text" name="email" placeholder="Introduzca su nombre de usuario">
        <p>Contraseña</p>
        <input type="password" name="password" placeholder="Introduzca su contraseña">
        <br>
        <br>
        <br>
        <input type="submit" name="submit" value="Iniciar sesión">
        <br>
        <br>
        </form>        
    </div>
  </body>
</html>