<?php include ("conexion/diseño-conn.php"); ?>
<!DOCTYPE html>

<html>
    
<dev class="titulo2"><h1>CrediOpciones</h1></dev>
    
<head>
	<title>CrediOpciones</title>
	<link rel="stylesheet" type="text/css" href="assets/css-menu/defecto.css">
    </head>
    <body>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <form class="m1" method="POST">
        <div id= "page">
            <ul>               
			<?php 
                while ($row = $pres->fetch(PDO::FETCH_OBJ)){
				$sub_sql = "SELECT * FROM subtema WHERE indice=:id";
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
				        <?php echo $sub_row->subtema; ?>
                        </a></li>
				    <?php } 
				    ?>
                    </ul>
                    <?php }
                    ?> 
                    </li>
                    <?php }
                 ?>
             </ul>
        </div>
     </form>   
    </body>
</html>