
<?php 

 session_start(); 
//require 'configuration.php';
//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$loginC  = $_POST ["loginC"]; //atribuição do campo "nome" vindo do formulário para variavel  
$senhaC  = $_POST ["senhaC"]; //atribuição do campo "nome" vindo do formulário para variavel  



//Gravando no banco de dados !
 
var_dump(
$loginC,
$senhaC
);


//conexão com o banco de dados.
try {
    $pdo = new PDO('mysql:host=localhost;dbname=deposito_construmar', 'root', 'tuquinha07');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO `tb_login` 
    VALUES (
     null,
    '$loginC', 
    '$senhaC'
   ) ";
   
    $sqll = $pdo->prepare($sql);
    $sqll->execute();
    echo $sqll->rowCount();
    
       echo "Seu cadastro foi realizado com sucesso!";
        header("Location: Index.php"); 
       
    } catch (Exception $e) {
    echo "falhou: ".$e->getMessage();
}


?> 


