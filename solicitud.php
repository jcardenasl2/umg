<?php include ("conexion/solicitud-conn.php"); ?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Solicitud</title>
    <link rel="stylesheet" type="text/css" href="assets/css-solic/style-s.css">
  </head>
  <body>   
    <div class="login-box">
    <img src="images/mv2.gif" class="avatar">
    <h1>Solicitud</h1>
        <form action="solicitud.php" method="POST">
            
            <input name="nombrec" type="text" placeholder="Nombre completo">
            <label>Labora:</label>
            <select name="labora">
            <option></option>
            <option>Si</option>
            <option>No</option>
            </select>    
            <br>
            <br>
            <input name="empresa" type="text" placeholder="Empresa">
            <input name="direccionem" type="text" placeholder="Direccion donde labora">
            <input name="salario" type="text" placeholder="Salario a recibir">
            <input name="numlab" type="text" placeholder="Telefono empresarial">
            <input name="tiempolab" type="text" placeholder="Tiempo de laborar">
            <input name="celular" type="text" placeholder="Numero de celular">

            <input type="submit" value="Registrar">
            <?php if(!empty($message)): ?>
            <p> <?= $message ?></p>
            <?php endif; ?>
            <span><a href="index.php"><br>._____Regresar al menú principal_____.</a></span>            
        </form>
    </div>
  </body>
</html>