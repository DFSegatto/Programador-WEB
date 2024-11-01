<?php
  $nome = @$_GET['nome'];
  $idade = @$_GET['idade'];

  if(isset($nome) && isset($idade)){
    echo "Olá, $nome! Você tem $idade anos.";
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Atividade 01</title>
</head>
<body>
  <form method="get" action="index.php">
    <input name="nome" type="text" placeholder="Nome"/>
    <input name="idade" type="text" placeholder="Idade"/>
    <input type="submit" name="Enviar" value="Enviar">
  </form>
</body>
</html>