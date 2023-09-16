<?php 

require_once 'Banco_de_dados/conectaBanco.php';

$SSQL2 = "SELECT * FROM Produto";

$rs2 = mysqli_query($linkDB, $SSQL2) or die("Erro no banco de dados2!");
while ($row = mysqli_fetch_assoc($rs2)) {

$ma = $row['material'];

echo"$ma <br>";
 
}


?>