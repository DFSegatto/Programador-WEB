<?php
    if(isset($_POST['nome']) && $_POST['mensagem']){
        $nome = $_POST['nome'];
        $mensagem = $_POST['mensagem'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retorno Feedback</title>
</head>
<body>
    <h1>Obrigado pelo seu feedback, <?php echo $nome; ?></h1>
    <p>Sua Mensagem: <?php echo $mensagem; ?>
</body>
</html>
<?php 
    }
    else{
        echo "Variáveis não definidas!";
    }
?>