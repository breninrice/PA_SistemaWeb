<?php
    //session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Cesar Szpak">
        <title>Rice - Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <form class="jumbotron" method="POST" action="loginCadastro.php">
            <h2>Login</h2>
            <label>Email</label>
            <input type="text" name="loginC" placeholder="login" required autofocus>
            <label>Senha</label>
            <input type="password" name="senhaC" placeholder="Senha" required>
            <button type="submit">Cadastrar</button>
        </form>  
    </body>
</html>