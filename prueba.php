<?php
try{
    
    $conn = new PDO("mysql:host=sql312.byethost10.com;dbname=b10_28713453_confio",'b10_28713453','183194group'); }

catch(PDOEException $e){
    
    echo $e->getMessage(); }
?>