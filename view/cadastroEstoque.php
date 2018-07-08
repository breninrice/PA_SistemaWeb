
<?php 
//require 'configuration.php';
//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$codigo	= $_POST ["codigo"];	//atribuição do campo "nome" vindo do formulário para variavel	
$quantidade	= $_POST ["quantidade"];	//atribuição do campo "nome" vindo do formulário para variavel	
$tipo	= $_POST ["tipo"];	//atribuição do campo "email" vindo do formulário para varcpf
$data	= $_POST ["data"];	//atribuição do campo "email" vindo do formulário para variavel

//Gravando no banco de dados !
 

//conexão com o banco de dados.
try {
    $pdo = new PDO('mysql:host=localhost;dbname=deposito_construmar', 'root', 'tuquinha07');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO `tb_item` 
    VALUES (
        '$codigo', '$quantidade', '$tipo', '$data')";
   
    $sqll = $pdo->prepare($sql);
	$sqll->execute();
	echo $sqll->rowCount();
	
       echo "Seu cadastro foi realizado com sucesso!";
       
       
    } catch (Exception $e) {
    echo "falhou: ".$e->getMessage();
}




?> 
