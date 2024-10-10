<?php
    setcookie("tema","claro",time() + 3600, '/');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema</title>
</head>
<body>
    <h1>Escolha o tema</h1> 
    <select name="select">
        <option value="claro">Claro</option>
        <option value="escuro">Escuro</option>
    </select>
    
</body>
</html>