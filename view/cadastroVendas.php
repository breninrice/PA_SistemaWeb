
<?php 
//require 'configuration.php';
//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$codigo	= $_POST ["codigo"];	//atribuição do campo "nome" vindo do formulário para variavel	
$data	= $_POST ["data"];	//atribuição do campo "nome" vindo do formulário para variavel	
$data_entrega	= $_POST ["data_entrega"];	//atribuição do campo "email" vindo do formulário para varcpf
$forma_de_pagamento	= $_POST ["forma_de_pagamento"];	//atribuição do campo "email" vindo do formulário para variavel
$id_pessoal	= $_POST ["id_pessoal"];	//atribuição do campo "endereco" vindo do formulário para variavel



//Gravando no banco de dados !
 

//conexão com o banco de dados.
try {
    $pdo = new PDO('mysql:host=localhost;dbname=deposito_construmar', 'root', 'tuquinha07');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO `tb_venda` 
    VALUES (
        '$codigo', '$data', '$data_entrega', '$forma_de_pagamento', '$id_pessoal')";
   
    $sqll = $pdo->prepare($sql);
	$sqll->execute();
	echo $sqll->rowCount();
	
       echo "Seu cadastro foi realizado com sucesso!";
       
       
    } catch (Exception $e) {
    echo "falhou: ".$e->getMessage();
}




?> 
