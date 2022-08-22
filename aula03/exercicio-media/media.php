<!DOCTYPE html>
<html lang="ept-brn">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <?php
        $nome = $_GET["nome"];
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $freq = $_GET["freq"];
        $situacao="";
        if ($freq < 75) {
            $situacao = "Reprovado por falta";
        } else {
            // calcular média
            // escrever o teste para ver a situação
        }
        # exibir nome do aluno, média e situação

    ?>
    
</body>
</html>