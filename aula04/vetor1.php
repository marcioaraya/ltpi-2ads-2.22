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

        # exiba os nomes do vetor em uma tabela HTML
        echo '<table border="1">';
        echo '<tr>';
        echo "<td>$nome[0]</td>";
        echo '</tr>';
        echo '<tr>';
        echo "<td>$nome[1]</td>";
        echo '</tr>';
        echo '<tr>';
        echo "<td>$nome[2]</td>";
        echo '</tr>';
        echo '<tr>';
        echo "<td>$nome[3]</td>";
        echo '</tr>';
        echo '</table>';




    ?>
</body>
</html>