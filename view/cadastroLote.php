
<?php 
//require 'configuration.php';
//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$codigo	= $_POST ["codigo"];	//atribuição do campo "nome" vindo do formulário para variavel	
$numero	= $_POST ["numero"];	//atribuição do campo "nome" vindo do formulário para variavel	
$data_venc	= $_POST ["data_venc"];	//atribuição do campo "email" vindo do formulário para varcpf
$quantidade	= $_POST ["quantidade"];	//atribuição do campo "email" vindo do formulário para variavel

//Gravando no banco de dados !
 
//conexão com o banco de dados.
try {
    $pdo = new PDO('mysql:host=localhost;dbname=deposito_construmar', 'root', 'tuquinha07');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO `tb_lote` 
    VALUES (
        '$codigo', '$numero', '$data_venc', '$quantidade')";
   
    $sqll = $pdo->prepare($sql);
	$sqll->execute();
	echo $sqll->rowCount();
	
       echo "Seu cadastro foi realizado com sucesso!";
       
       
    } catch (Exception $e) {
    echo "falhou: ".$e->getMessage();
}




?> 
