<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vetor</h1>
    <?php
        $nome = ['Mateus', 'Marcos', 'Lucas', 'João'];
        $capitulos = [ 28, 16, 24, 21];

        # exiba os nomes do vetor em uma tabela HTML

        $linha1 = '<tr><th>Nomes</th>';
        $linha2 = '<tr><th>Capítulos</th>';
        for($i=0; $i<4; $i++){
            $linha1 .=  "<td>$nome[$i]</td>";
            $linha2 .=  "<td>$capitulos[$i]</td>";
        }
        $linha1 .= "</tr>";
        $linha2 .= "</tr>";

        echo '<table border="1">';
        echo $linha1;
        echo $linha2;
        echo '</table>';

    ?>
</body>
</html>