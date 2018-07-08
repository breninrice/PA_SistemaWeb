
				
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

						$sql = "SELECT * FROM tb_produtos";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						        
						       	 echo "<br />";
						         echo "-----------------------------------------<br />";
								 echo "   codigo: ".$row["codigo"]."<br />";
							     echo "   nome:  ".$row["nome_prod"]."<br />";
								 echo "   quantidade:  ".$row["qtd_prod"]."<br />";
								 echo "   descrição:  ".$row["descricao_prod"]."<br />";
							     echo "	  fornecedor:  ".$row["id_fornecedor"]."<br />";
								 echo "   localização:  ".$row["localizacao_prod"]."<br />";
								 echo "   data lote:  ".$row["data_lote"]."<br />";
							     echo "   lote:  ".$row["lote"]."<br />";
								 echo "   preco:  ".$row["preco"]."<br />";
								 echo "   custo:  ".$row["custo"]."<br />";
				


						    }
						} else {
						    echo "0 results";
						}
						$conn->close();	

						include_once("../view/footer.php");

					?>
	
