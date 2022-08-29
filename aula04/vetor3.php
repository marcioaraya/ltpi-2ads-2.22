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
        echo '<table border="1">';
        echo '<tr><th>Nomes</th>';
        for($i=0; $i<4; $i++){
            echo "<td>$nome[$i]</td>";
        }
        echo '</tr>';
        echo '<tr><th>Capítulos</th>';
        for($i=0; $i<4; $i++){
            echo "<td>$capitulos[$i]</td>";
        }
        echo '</tr>';
        echo '</table>';

    ?>
</body>
</html>