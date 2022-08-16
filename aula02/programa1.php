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
          
        for($i=0; $i < 10; $i++){
            if ($i%2===0){
                echo "<p>$i</p>";
            }
        }
    ?>
</body>
</html>