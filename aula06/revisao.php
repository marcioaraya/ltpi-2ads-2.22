<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Revisão Foreach</h1>

    <p>Parte 1: exibir os dados do vetor abaixo
         como uma tabela HTML</p>

   
    <?php

        $aluno[0]["nome"] = "João";
        $aluno[0]["nota1"] = 5.0;
        $aluno[0]["nota2"] = 6.0;
        $aluno[0]["sexo"] = "M";
        $aluno[0]["frequencia"] = 0.80;

        $aluno[1]["nome"] = "Maria";
        $aluno[1]["nota1"] = 7.0;
        $aluno[1]["nota2"] = 8.5;
        $aluno[1]["sexo"] = "F";
        $aluno[1]["frequencia"] = 0.9;

        $aluno[2]["nome"] = "Rita";
        $aluno[2]["nota1"] = 6.0;
        $aluno[2]["nota2"] = 7.0;
        $aluno[2]["sexo"] = "F";
        $aluno[2]["frequencia"] = 0.60;

        $aluno[3]["nome"] = "Manuel";
        $aluno[3]["nota1"] = 8.0;
        $aluno[3]["nota2"] = 6.0;
        $aluno[3]["sexo"] = "M";
        $aluno[3]["frequencia"] = 1.00;

        echo "<table border=\"1\">";
        echo "<tr><th>Nome</th><th>Nota1</th><th>Nota2</th><th>Sexo</th><th>Freq</th><th>Média</th><th>Situação</th></tr>";
        foreach($aluno as $al){
            $al["media"] = media($al["nota1"], $al["nota2"]);
            $al["situacao"] = situacao($al["media"], $al["frequencia"]);
            echo "<tr>";
            foreach($al as $v){
                echo "<td>$v</td>" ;
            }
            echo '</tr>';
        }
        echo "</table>";

        function media($n1, $n2){
            return ($n1 + $n2)/2;
        }

        function situacao($media, $frequencia){
            if ($frequencia < 0.75){
                return "Reprovado por faltas";
            } else {
                if ($media < 2) {
                    return "Reprovado por nota";
                } elseif ($media < 6.0) {
                    return "Exame Final";
                } else {
                    return "Aprovado";
                }
            }
        }

# Exercício: 
# 1) crie uma função media($n1, $n2) que receba duas notas e devolva a média das mesmas.
# 2) cria uma função situacao($media, $frequencia) que retorne a situação do aluno
#    Se ($frequencia < 0.75) então $situacao = "Reprovado por falta";
#    Se (frequencia >= 0.75)
#       Se ($media < 2.0) então
#            $situacao = "Reprovado por nota";
#        Senão Se ($média >2 E $media <6.0) então
#            $situacao = "Exame Final"
#        Senão Se ($media >= 6) então 
#            $situacao = "Aprovado"
#        Fim-Se
# 3) Acrescente duas colunas na tabela para exibir a média calculada e a situação do aluno
#    | Nome  | Sexo | Nota 1 | Nota 2 | Freq | Média |          Situação           |
    ?>
</body>
</html>