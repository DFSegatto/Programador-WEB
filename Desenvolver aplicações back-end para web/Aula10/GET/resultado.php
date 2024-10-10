<?php
    $palavra = $_GET['palavra'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da pesquisa</title>
</head>
<body>
    <h1>Resultado da pesquisa</h1>
    <p>Você pesquisou por: <strong><?php echo $palavra; ?></strong></p>
</body>
</html>