<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "projetopdo";

try{
$con = new PDO("mysql:host=$host;dbname=$database",$username, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


echo "Conectado";
}
catch(PDOException $e){
    echo "FALHA". $e->getMessage();
}
?>