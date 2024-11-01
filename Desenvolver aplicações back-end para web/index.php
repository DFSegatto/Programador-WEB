<?php
session_start();

  if(isset($_GET['cadastrar'])){
    $listaContatos = array(
      'nome' => $_GET['nome'],
      'email' =>  $_GET['email'],
      'telefone' => $_GET['telefone']
    );
    $_SESSION['contatos'][] = $listaContatos;
  }

  function pesquisarContatos($pesquisa){
    if(isset($_SESSION['contatos']) && isset($_GET['pesquisar'])){
      $pesquisa = $_GET['pesquisa'];
       foreach($_SESSION['contatos'] as $contato){
         echo $contato['nome'] . "<br>";
          echo $pesquisa;
        }
      }
  }
    
  function listarContatos(){
    if(isset($_SESSION['contatos'])){
      foreach($_SESSION['contatos'] as $contato){
        echo "<li>";
        echo "<br>Nome: ".$contato['nome'].
             "<br>E-mail: ".$contato['email'].
             "<br>Telefone: ".$contato['telefone'];
        echo "</li>";
      }
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agenda de Contatos</title>
</head>
<body>
  <form method="get" action="index.php">
    <h1>Cadastrar Contato</h1>
    <input name="nome" type="text" placeholder="Nome" required/><br>
    <input name="email" type="email" placeholder="E-mail" required/><br>
    <input name="telefone" type="text" placeholder="Telefone" required/><br>
     <input type="submit" name="cadastrar" value="Cadastrar">
  </form>

  <h1>Lista de Contatos</h1>
  <ol>
    <li><?php listarContatos() ?></li>
  </ol>
  
  <h1>Pesquisa de Contatos</h1>
  <form method="get" action="index.php">
    <input name="pesquisa" type="text" placeholder="Informe o nome do contato">
    <input type="submit" name="pesquisar" value="Pesquisar">
  </form>
  <label><?php pesquisarContatos(@$pesquisa) ?></label>
</body>
</html>