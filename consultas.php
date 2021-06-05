<?php

echo "<link href=\"assets/css-reporte/style.css\" type=\"text/css\" rel=\"stylesheet\">";

include 'prueba.php';

$consulta = "SELECT * FROM solicitud";
$query = $conn -> prepare($consulta);
$query -> execute();

$resultado = $query -> fetchAll(PDO::FETCH_OBJ);

if($query -> rowCount() > 0)
    
{
  
    echo "<table borde='10'>";
    echo "<tr>";
    echo "<th>Nombre</th>";
    echo "<th>Labora</th>";
    echo "<th>Empresa</th>";
    echo "<th>Direccion laboral</th>";
    echo "<th>Telfono empresarial</th>";
    echo "<th>Tiempo de laborar</th>";
    echo "<th>Salario</th>";
    echo "<th>Celular</th>";
    echo "</tr>";

    foreach($resultado as $result) {
    echo "<tr>";
    echo "<td>".$result -> nombrec."</td>
    <td>".$result -> labora."</td>
    <td>".$result -> empresa."</td>
    <td>".$result -> direccionem."</td>
    <td>".$result -> numlab."</td>
    <td>".$result -> tiempolab."</td>
    <td>".$result -> salario."</td>
    <td>".$result -> celular."</td>
    </tr>";
    }
}
?>