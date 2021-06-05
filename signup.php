<?php include ("conexion/signup-conn.php"); ?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="assets/css-reg/style-r.css">
  </head>
  <body>   
    <div class="login-box">
    <img src="images/ima.gif" class="avatar">
    <h1>Registrarse</h1>
        <form action="signup.php" method="POST">
            
            <input name="nombre" type="text" placeholder="Nombres">
            <input name="apellido" type="text" placeholder="Apellidos">
            <input name="email" type="text" placeholder="Correo electronico">
            <input name="password" type="password" placeholder="Contraseña">
            <input name="confirm_password" type="password" placeholder="Confirme contraseña">

            <label>Rol:</label>
            <select name="rol">
            <option></option>
            <option>Administrador</option>
            <option>Agente</option>
            </select>  
            <br>
            <br>
            <input type="submit" value="Registrar">
            <?php if(!empty($message)): ?>
            <p> <?= $message ?></p>
            <?php endif; ?>
            <span><a href="index.php">._____Regresar al menú principal_____.</a></span>            
        </form>
    </div>
  </body>
</html>