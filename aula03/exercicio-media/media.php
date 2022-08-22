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

    echo "<hr>";
    var_dump($_GET);
    echo "<hr>";
    print_r($_GET);
    echo "<hr>";

        $nome = $_GET["nome"];
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $freq = $_GET["freq"];

        $situacao="";
        $media=0.0;
        if ($freq < 75) {
            $situacao = "Reprovado por falta";
        } else {
            // calcular média
            $media = ($nota1 + $nota2)/2;
            // escrever o teste para ver a situação
            // (condição)?"verdadeira":"falso"
            $situacao = ($media>=6)?"Aprovado":(($media>=2)?"Exame Final":"Reprovado");
        }
        # exibir nome do aluno, média e situação

    ?>
    <h1>Situação</h1>
    <p>Nome:<?php echo $nome ?></p>
    <p>Nota 1ºbimestre:<?php echo $nota1 ?></p>
    <p>Nota 2ª bimestre:<?php echo $nota2 ?></p>
    <p>Frequência:<?php echo $freq ?></p>
    <p>Média:<?php echo $media ?></p>
    <p>Situação:<?php echo $situacao ?></p>
</body>
</html>