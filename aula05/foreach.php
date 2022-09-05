<?php
$nota['Alexandra'] = 10;
$nota['Felipe'] = 9.0;
$nota['Gustavo'] = 8.5;

foreach($nota as $p=>$n){
    echo "Aluno: $p Nota: $n<br>";
}

// outra forma de declarar o vetor
$nota = ['Alexandra'=>10, 'Felipe'=>9.0, 'Gustavo'=>8.5];

// outra forma 
$nota = array('Alexandra'=>10, 'Felipe'=>9.0, 'Gustavo'=>8.5);

// é possivel criar vetores de vetores

$frutas = array('Maça', 'Laranja', 'Pera', 'Caqui');
$verduras = ['Alface', 'Couve', 'Acelga'];

$alimentos = array($frutas, $verduras);

foreach($frutas as $f){
    echo $f . "<br>";
}
foreach($verduras as $v){
    echo $v . "<br>";
}
echo '<h1>usando foreach para $alimentos</h1>';
foreach($alimentos as $a){
    foreach($a as $v){
        echo $v . '<br>';
    }
}














