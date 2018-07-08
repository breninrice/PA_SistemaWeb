
<?php 
//require 'configuration.php';
//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$codigo	= $_POST ["codigo"];	//atribuição do campo "nome" vindo do formulário para variavel	
$nome	= $_POST ["nome"];	//atribuição do campo "nome" vindo do formulário para variavel	
$quantidade	= $_POST ["quantidade"];	//atribuição do campo "email" vindo do formulário para varcpf
$descricao	= $_POST ["descricao"];	//atribuição do campo "email" vindo do formulário para variavel
$forncecedor    = $_POST ["fornecedor"];    //atribuição do campo "sexo" vindo do formulário para variavel
$localizacao	= $_POST ["localizacao"];	//atribuição do campo "endereco" vindo do formulário para variavel
$data_lote	= $_POST ["data_lote"];	//atribuição do campo "endereco" vindo do formulário para varicep
$lote	= $_POST ["lote"];	//atribuição do campo "endereco" vindo do formulário para varicep
$preco	= $_POST ["preco"];	//atribuição do campo "endereco" vindo do formulário para varicep
$custo = $_POST ["custo"];	//atribuição do campo "bairro" vindo do formulário para variavel



//Gravando no banco de dados !
 

//conexão com o banco de dados.
try {
    $pdo = new PDO('mysql:host=localhost;dbname=deposito_construmar', 'root', 'tuquinha07');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO `tb_produtos` 
    VALUES (
         null, 
        '$codigo', 
        '$nome', 
        '$quantidade', 
        '$descricao',
        '$forncecedor',
        '$localizacao', 
        '$data_lote',
        '$lote', 
        '$preco', 
        '$custo')";
   
    $sqll = $pdo->prepare($sql);
	$sqll->execute();
	echo $sqll->rowCount();
	
       echo "Seu cadastro foi realizado com sucesso!";
       header("location: produtos.php"); 
       
       
    } catch (Exception $e) {
    echo "falhou: ".$e->getMessage();
}




?> 
