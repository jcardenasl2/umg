<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="assets/css-reporte/style.css" type="text/css" rel="stylesheet">

</head>
<body>
<section>

    <h1>Validacion</h1>
    <table>
        <tr>
           
            <th>Nombre</th> 
            <th>Empresa</th>
            <th>Celular</th>
            <th>ID</th>
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

        $query = mysqli_query($conection, "SELECT id, nombrec, empresa, celular FROM solicitud");
        mysqli_close($conection);
        $result = mysqli_num_rows($query);
        if ($result > 0) {
            while ($data = mysqli_fetch_array($query))
            {
    ?>
            <tr>
                <td><?php echo $data["nombrec"] ?></td>
                <td><?php echo $data["empresa"] ?></td>
                <td><?php echo $data["celular"] ?></td>
                <td><?php echo $data["id"] ?></td>
                <td>
                    <a href="estatus.php?id=<?php echo $data["id"] ?>">Aprobar</a>
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