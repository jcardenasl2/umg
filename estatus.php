<?php
echo("");
	$host = 'sql312.byethost10.com';
	$user = 'b10_28713453';
	$password = '183194group';
	$db = 'b10_28713453_confio';

	$conection = @mysqli_connect($host,$user,$password,$db);

	if (!$conection) {
			echo "Error en la conexion";
		}

	$idestatus = $_GET['id'];
    echo ($idestatus);

    $query_update = mysqli_query($conection, "UPDATE solicitud SET  estatus = 'Aprobado' WHERE id = $idestatus");
		mysqli_close($conection);

		if ($query_update) {
			//header("location: aprobacion.php"); 
		}else{
			echo "Error verifique su conexion";
		}
	}
    ?>


    