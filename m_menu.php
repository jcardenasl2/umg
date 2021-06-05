<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="assets/css-reporte/style.css" type="text/css" rel="stylesheet">

</head>
<body>
<section>

    <h1>Mantenimiento Menu</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Titulo Menu</th>
            <th>Nuevo titulo</th>  
        </tr>
<?php
	
	$host = 'sql312.byethost10.com';
	$user = 'b10_28713453';
	$password = '183194group';
	$db = 'b10_28713453_confio';

	$conection = @mysqli_connect($host,$user,$password,$db);

	if (!$conection) {
			echo "Error en la conexion";
		}

        $query = mysqli_query($conection, "SELECT id, titulo FROM menu");
        mysqli_close($conection);
        $result = mysqli_num_rows($query);
        if ($result > 0) {
            while ($data = mysqli_fetch_array($query))
            {
    ?>
            <tr>
                <td><?php echo $data["id"] ?></td>
                <td><?php echo $data["titulo"] ?></td>
                <td>
                
                
                    
                <input name="titulo" type="text" placeholder="Ingrese el titulo nuevo">
                <input type="submit" value="Guardar">
                </a>
                </td>
            </tr>
    <?php
            }
        }
     ?>
        </table>
    </section>
</body>
</html>