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

$sql = "SELECT * FROM tb_pessoal";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
       	 echo "<br />";
         echo "-----------------------------------------<br />";
		 echo "codigo: ".$row["id_pessoal"]."<br />";
	     echo "nome:  ".$row["nome"]."<br />";
		 echo "cpf:  ".$row["cpf"]."<br />";
		 echo "data:  ".$row["data_nasc"]."<br />";
	     echo "sexo:  ".$row["sexo"]."<br />";
		 echo "tipo:  ".$row["tipo"]."<br />";
		 echo "cep:  ".$row["cep"]."<br />";
	     echo "endereço:  ".$row["endereco"]."<br />";
		 echo "complemento:  ".$row["complemento"]."<br />";
		 echo "bairro:  ".$row["bairro"]."<br />";
	     echo "cidade:  ".$row["cidade"]."<br />";
		 echo "estado:  ".$row["estado"]."<br />";
		 echo "celular:  ".$row["celular"]."<br />";
		 echo "residencial:  ".$row["residencial"]."<br />";
	     echo "comercial:  ".$row["comercial"]."<br />";
		 echo "email:  ".$row["email"]."<br />";


    }
} else {
    echo "0 results";
}
$conn->close();


include_once("../view/footer.php");
?>