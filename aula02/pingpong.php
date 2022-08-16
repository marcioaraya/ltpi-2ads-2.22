<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo '<h1>For</h1>';
          
        for($i=1; $i <= 100; $i++){
            // && -> AND
            //
            // = -> atribuição
            // == -> mesmo valor
            // === -> mesmo valor e tipo de dados
            if ($i%3===0 && $i%5===0  ){
                echo "<p>PINGPONG</p>";
            } elseif ($i%3===0){
                echo "<p>PING</p>";
            } elseif ($i%5===0) {
                echo "<p>PONG</p>";
            } else {
                echo "<p>$i</p>";
            }



        }
    ?>
</body>
</html>