<?php
    if(isset($_GET['livro'])){
        $livro = $_GET['livro'];
?>
<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro</title>
</head>
<body>
    <h1>O livro pesquisado foi "<?php echo $livro; ?>"</h1>
</body>
</html>
<?php
}
else{
    echo "Valor da variável não atribuído.";
}
?>