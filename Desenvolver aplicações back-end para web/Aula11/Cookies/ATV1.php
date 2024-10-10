<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessos</title>
</head>
<body> 
    <?php
        if(isset($_COOKIE['qntAcessos'])){
            setcookie("qntAcessos", $_COOKIE['qntAcessos'] + 1,time() + 3600, '/');
            echo "Essa é sua ".$_COOKIE['qntAcessos']."ª visita.";
        }
        else{
            setcookie("qntAcessos", 1, time() + 3600, '/');
        }
    ?>
</body>
</html>