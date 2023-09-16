<?php
$servername = "projeto-tcc-cruzeiro.coqvhjtyvlrt.sa-east-1.rds.amazonaws.com";
$username = "ProjetoCRUZEIRO";
$password = "R&CFVTY7UH*IN(H&T6rcTF";
$database = "ProjetoCCPTCC";

$linkDB = mysqli_connect($servername, $username, $password, $database);

if (!$linkDB) {
    die("Connection failed: " . mysqli_connect_error());
}

// Força consultas do banco retornarem no charset: UTF-8
mysqli_query($linkDB, "SET NAMES 'utf8'");
mysqli_query($linkDB, 'SET character_set_connection=utf8');
mysqli_query($linkDB, 'SET character_set_client=utf8');
mysqli_query($linkDB, 'SET character_set_results=utf8');
?>




