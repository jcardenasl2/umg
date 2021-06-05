<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="assets/css-reporte/style.css" type="text/css" rel="stylesheet">

</head>
<body>
<section>

    <h1>Mantenimiento Roles</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Usuario</th> 
            <th>Rol</th>
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

        $query = mysqli_query($conection, "SELECT id, email, rol FROM users");
        mysqli_close($conection);
        $result = mysqli_num_rows($query);
        if ($result > 0) {
            while ($data = mysqli_fetch_array($query))
            {
    ?>
            <tr>
                <td><?php echo $data["id"] ?></td>
                <td><?php echo $data["email"] ?></td>
                <td>     
                <select name="rol">
				<option selected>Agente</option>
				<option>Administrador</option>  
                </a>
                <input type="submit" value="Guardar">
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