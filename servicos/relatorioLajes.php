<!DOCTYPE html>
<html lang="pt-br">

<body>

	<div class="jumbotron">
	


<?php
include_once("../view/header.php");

$servername = "localhost";
$username = "root";
$password = "tuquinha07";
$dbname = "deposito_construmar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM tb_laje";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
   
    while($row = $result->fetch_assoc()) {
    	
         echo "<br />";
         echo "-----------------------------------------<br />";
		 echo "empresa:  ".$row["empresa"]."<br />";
	     echo "nome:  ".$row["nome"]."<br />";
		 echo "email:  ".$row["email"]."<br />";
         echo "telefone:  ".$row["telefone"]."<br />";
         echo "celular:  ".$row["celular"]."<br />";
         echo "cidade:  ".$row["cidade"]."<br />";
         echo "tipo de laje  :  ".$row["tipo_laje"]."<br />";
         echo "tamanho da vigota:  ".$row["tamanho_vigota"]."<br />";
         echo "quantidade de tijolos:  ".$row["qtd_tijolos"]."<br />";
         echo "quantidade de tijolo furados:  ".$row["qtd_tijolos_furados"]."<br />";
         echo "outras informações:  ".$row["outras_informacoes"]."<br />";
         echo "instalacao:  ".$row["instalacao"]."<br />";
         echo "entrega:  ".$row["entrega"]."<br />";
         echo "cep:  ".$row["cep"]."<br />";
         echo "informações relevantes:  ".$row["outras_informacoes_rel"]."<br />";
         echo "retirar:  ".$row["retirar"]."<br />";
         echo "como conheceu a empresa :  ".$row["como_chegou"]."<br />";
         
    } 

   
} else {
    echo "0 results";
}
$conn->close();


include_once("../view/footer.php");


?>
</div>
 </body>
</html>

