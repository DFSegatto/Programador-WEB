<?php
    if(isset($_POST['livro']) && $_POST['autor']){
        $livro = $_POST['livro'];
        $autor = $_POST['autor'];
?>
<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro</title>
</head>
<body>
    <h1>O livro "<?php echo $livro ?>" escrito por "<?php echo $autor ?>" foi cadastrado com sucesso.</h1>
</body>
</html>
<?php
}
else{
    echo "Valor das variáveis não atribuído.";
}
?>