
<?php 
//require 'configuration.php';
//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$codigo	= $_POST ["codigo"];	//atribuição do campo "nome" vindo do formulário para variavel	
$nome	= $_POST ["nome"];	//atribuição do campo "nome" vindo do formulário para variavel	
$cpf	= $_POST ["cpf"];	//atribuição do campo "email" vindo do formulário para varcpf
$data	= $_POST ["data"];	//atribuição do campo "email" vindo do formulário para variavel
$tipo   = $_POST ["tipo"];  //atribuição do campo "endereco" vindo do formulário para variavel
$sexo	= $_POST ["sexo"];	//atribuição do campo "sexo" vindo do formulário para variavel
$cep	= $_POST ["cep"];	//atribuição do campo "endereco" vindo do formulário para varicep
$endereco	= $_POST ["endereco"];	//atribuição do campo "endereco" vindo do formulário para varicep
$complemento	= $_POST ["complemento"];	//atribuição do campo "endereco" vindo do formulário para varicep
$bairro = $_POST ["bairro"];	//atribuição do campo "bairro" vindo do formulário para variavel
$cidade	= $_POST ["cidade"];	//atribuição do campo "cidade" vindo do formulário para variavel
$estado	= $_POST ["estado"];	//atribuição do campo "estado" vindo do formulário para variavel
$celular	= $_POST ["celular"];	//atribuição do campo "ddd" vindo do formulário para variavel
$residencial	= $_POST ["residencial"];	//atribuição do campo "telefone" vindo do formulário para variavel
$comercial	= $_POST ["comercial"];	//atribuição do campo "endereco" vindo do formulário para variavel
$email	= $_POST ["email"];	//atribuição do campo "endereco" vindo do formulário para variavel


//conexão com o banco de dados.
try {
    $pdo = new PDO('mysql:host=localhost;dbname=deposito_construmar', 'root', 'tuquinha07');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO `tb_pessoal` 
    VALUES (
    '$codigo', 
    '$nome', 
    '$cpf', 
    '$data', 
    '$tipo', 
    '$sexo',
    '$cep', 
    '$endereco',
    '$complemento',
    '$bairro',
    '$cidade', 
    '$estado',
    '$celular',
    '$residencial', 
    '$comercial', 
    '$email') ";
   
    $sqll = $pdo->prepare($sql);
	$sqll->execute();
	echo $sqll->rowCount();
	
       echo "Seu cadastro foi realizado com sucesso!";
        header("location: localhost/index.php"); 
       
    } catch (Exception $e) {
    echo "falhou: ".$e->getMessage();
}




?> 
