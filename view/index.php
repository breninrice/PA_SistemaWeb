<?php include_once("header.php");?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Cesar Szpak">
        <title>Rice - Login</title>
        
    </head>
    <body>
        <div style="margin-left: 600px; margin-right: 500px; margin-top: 200px; background-color:#9FB6CD; background-size: 50px">

            <form class="form-group" method="POST" action="loginEntra.php">
            <h2>Acesso ao sistema</h2>
            <div class="form-group">
            &nbsp;<label>Email</label>&nbsp;
            <input type="text" name="login" placeholder="login" required autofocus>
                
            </div>
            <div class="form-group">
            &nbsp;<label>Senha</label>
            <input type="password" name="senha" placeholder="Senha" required>
                
            </div>
            
            
          &nbsp;<button type="submit" class="btn btn-default">Acessar</button>
        </form> 

        &nbsp;<a href="cadastroLogin.php"> Cadastrar usuário</a>
    </br>

            
    </div>
    
    </body>
</html>








<?php include_once("footer.php");?>