<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ler Cookie</title>
</head>
<body>
    <h1>Ler Cookie</h1>
    <?php
        if (isset($_COOKIE["nome"])){
            $informacao = $_COOKIE["nome"];

            echo "<p>Seu nome é $informacao</p>";
        } else {
            echo "<p>Informe seu nome</p>";
        }
    ?>
    
</body>
</html>