<?php

$server = 'sql312.byethost10.com';
$username = 'b10_28713453';
$password = '183194group';
$database = 'b10_28713453_confio';


try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>