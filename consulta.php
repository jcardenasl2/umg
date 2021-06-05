<?php

$server = 'sql312.byethost10.com';
$username = 'b10_28713453';
$password = '183194group';
$database = 'b10_28713453_confio';

$conn = @mysqli_connect($server,$username,$password,$database);

if(!$conn){
    echo "Error de conexión";
}else{
    echo "";
}

?>