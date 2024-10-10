<?php
    setcookie("nome","Daniel",time()+3600,'/');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Cookie</title>
</head>
<body>
    <?php
        if(isset($_COOKIE['nome'])){
            echo "Olá, ".$_COOKIE['nome'];
        }
        else{
            echo "Cookie não registrado";
        }
    ?>
</body>
</html>