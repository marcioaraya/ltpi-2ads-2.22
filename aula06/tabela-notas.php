<?php
        $aluno[0]["nome"] = "João";
        $aluno[0]["nota1"] = 5.0;
        $aluno[0]["nota2"] = 6.0;
        $aluno[1]["nome"] = "Maria";
        $aluno[1]["nota1"] = 7.0;
        $aluno[1]["nota2"] = 8.5;
        $aluno[2]["nome"] = "Rita";
        $aluno[2]["nota1"] = 6.0;
        $aluno[2]["nota2"] = 7.0;
        $aluno[3]["nome"] = "Manuel";
        $aluno[3]["nota1"] = 8.0;
        $aluno[3]["nota2"] = 6.0;
        echo "<table border=\"1\">";
        echo "<tr><th>Nome</th><th>Nota1</th><th>Nota2</th><th>Média</th></tr>";
        foreach($aluno as $al){
            echo "<tr>";
            echo "<td>".$al["nome"]."</td>" ;
            echo "<td>".$al["nota1"]."</td>" ;            
            echo "<td>".$al["nota2"]."</td>" ;       
            echo "<td>". ($al["nota1"]+$al["nota2"])/2 ."</td>";     
            echo '</tr>';
        }
        echo "</table>";
?> 