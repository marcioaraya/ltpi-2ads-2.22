<?php
# escreva um programa php usando 'for' 
# para criar um vetor com os números de 1 a 100
# for (  ;   ;  ){
#    
# }
# usando a instrução 'while' percorra o vetor acima
# e calcule a soma de todos elementos do mesmo
# while () {
    #
# }

// Criação do vetor
$numero = [];

for($index = 0;$index < 100;$index++){
    // Atribuindo a cada posição do vetor com os número de 1 até 100
    // Como o vetor começa na posição "0" somamos +1 para que o número começe
    // de 1 até 100.
    $numero[$index] = $index + 1;
     echo "$index => $numero[$index] <br>";
}

// Criamos variáveis de soma e de controle para o while
$index = 0;
$soma = 0; # precisa inicializar a variável
while($index < 100){
    // Com a variável soma, somamos cada valor da posição do vetor + o resultado
    // da soma.
    $soma += $numero[$index]; # $soma = $soma + $numero[$index];
    $index++;
}

echo "Resultado: $soma";

?>