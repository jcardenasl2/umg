<?php include ("conexion/menu-conn.php");?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>CONFIO</title>
	<link rel="stylesheet" type="text/css" href="assets/css-menu/defecto.css">
    <a class="logout" href="logout.php">Cerrar Sesión</a>
    <a class="tema" href="diseño.php">Tema</a>
    <dev class="titulo2"><h1>BIENVENIDO A CONFIO</h1></dev>
   
    </head>
    <body>
        <div id= "page">
            <ul>               
			<?php 
                while ($row = $pres->fetch(PDO::FETCH_OBJ)){
				$sub_sql = "SELECT * FROM submenus WHERE indice=:id";
				$sub_stmt = $pdo ->prepare($sub_sql);
				$sub_stmt->bindParam(':id',$row->id,PDO::PARAM_INT);
				$sub_stmt->execute();
				?>
				<li><a href=""><?php echo $row->titulo; ?></a>  
				<?php 
				if ($sub_stmt->rowCount()) {
				?>
				    <ul>
				    <?php 
				    while ($sub_row = $sub_stmt->fetch(PDO::FETCH_OBJ)) {
				        ?>
				        <li><a href="<?php echo $sub_row->link; ?>">
				        <?php echo $sub_row->Subtitulo; ?>
                        </a></li>
				    <?php } 
				 ?>
                    </ul>
                    <?php }
                 ?> </li>
                    <?php }
                 ?>
             </ul>     
        </div>    
    </body>
</html>