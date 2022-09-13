<?php

$aluno["nome"] = "João";
$aluno["nota1"] = 5.0;
$aluno["nota2"] = 6.0;
$aluno["sexo"] = "M";
$aluno["frequencia"] = 0.80;

echo "<table>";
echo "<tr>";
foreach($aluno as $v){
    echo "<td>$v </td>";
}
echo "</tr>";
echo "</table>";
