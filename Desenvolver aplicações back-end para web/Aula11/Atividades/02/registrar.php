<?php
    $produto = $_POST['produto'];
    $preco = $_POST['preco'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
</head>
<body>
    <h1>Produto <?php echo $produto ?> registrado com o preço de R$ <?php echo $preco ?></h1>
</body>
</html>