
<?php 
//require 'configuration.php';
//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
// RECEBENDO OS DADOS PEENCHIDOS DO FORMULÁRIO !
$empresa	= $_POST ["empresa"];	//atribuição do campo "nome" vindo do formulário para variavel	
$nome	= $_POST ["nome"];	//atribuição do campo "nome" vindo do formulário para variavel	
$email	= $_POST ["email"];	//atribuição do campo "email" vindo do formulário para varcpf
$telefone	= $_POST ["telefone"];	//atribuição do campo "email" vindo do formulário para variavel
$celular	= $_POST ["celular"];	//atribuição do campo "sexo" vindo do formulário para variavel
$cidade	= $_POST ["cidade"];	//atribuição do campo "endereco" vindo do formulário para variavel
$Tipo_laje	= $_POST ["tipo"];	//atribuição do campo "endereco" vindo do formulário para varicep
$tamanho_vigota	= $_POST ["tamanho"];	//atribuição do campo "endereco" vindo do formulário para varicep
$qtd_tijolos	= $_POST ["quantidadet"];	//atribuição do campo "endereco" vindo do formulário para varicep
$qtd_tijolos_furados = $_POST ["quantidadetf"];	//atribuição do campo "bairro" vindo do formulário para variavel
$outras_informacoes	= $_POST ["infortela2"];	//atribuição do campo "cidade" vindo do formulário para variavel
$instalacao	= $_POST ["instalacao"];	//atribuição do campo "estado" vindo do formulário para variavel
$entrega	= $_POST ["entrega"];	//atribuição do campo "ddd" vindo do formulário para variavel
$cep	= $_POST ["cep"];	//atribuição do campo "telefone" vindo do formulário para variavel
$outras_informacoes_rel	= $_POST ["message"];	//atribuição do campo "endereco" vindo do formulário para variavel
$retirar    = $_POST ["retirar"];   //atribuição do campo "telefone" vindo do formulário para variavel
$como_chegou	= $_POST ["comochegou"];	//atribuição do campo "endereco" vindo do formulário para variavel


//conexão com o banco de dados.
try {
    $pdo = new PDO('mysql:host=localhost;dbname=deposito_construmar', 'root', 'tuquinha07');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO `tb_laje` 
    VALUES (
     null,
    '$empresa', 
    '$nome', 
    '$email', 
    '$telefone', 
    '$celular',
    '$cidade', 
    '$Tipo_laje', 
    '$tamanho_vigota',
    '$qtd_tijolos',
    '$qtd_tijolos_furados',
    'outras_informacoes',
    '$instalacao', 
    '$entrega',
    '$cep',
    '$outras_informacoes_rel', 
    '$retirar ',
    '$como_chegou') ";
   
    $sqll = $pdo->prepare($sql);
	$sqll->execute();
	//echo $sqll->rowCount();
	
       echo "Seu cadastro foi realizado com sucesso!";
        header("location: lajes.php"); 
       
    } catch (Exception $e) {
    echo "falhou: ".$e->getMessage();
}




?> 
