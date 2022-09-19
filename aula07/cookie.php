<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cookie</h1>
    <?php

/* remova o comentário para verificar que quando 
   é gerado conteúdo html antes de executar o comando setcookie 
   ocorre erro, porque a instrução para salvar cookies
   deve ir no cabeçalho do protocolo http.
   
        for($i=0;$i<35;$i++){
            echo "<p>12345678901234567890123456789012345678901234567890</p>";
            echo "<p>         1         2         3         4         5</p>";
        }
*/
        setcookie("nome", "marcio.araya");
        
    ?>
    
</body>
</html>