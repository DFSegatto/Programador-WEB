<?php
    session_start();
    if(isset($_POST['usuario'], $_POST['senha'])){
        if($_POST['usuario'] == "admin" && $_POST['senha'] == "123"){
            $_SESSION['usuario'] = $_POST['usuario'];
            $_SESSION['logado'] = true;
            header("Location: principal.php");
        }
        else{
            $_SESSION['logado'] = false;
            echo "Usuário ou senha incorretos.";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="text" name="usuario" placeholder="Usuário">
        <input type="password" name="senha" placeholder="Senha">
        <input type="submit" value="Entrar">
    </form>
</body>
</html>
