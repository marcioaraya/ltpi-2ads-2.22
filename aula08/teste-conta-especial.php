<?php
// salvar como teste-conta-especial.php em C:\XAMPP\HTDOCS\OBJ
include_once "conta.class.php";
include_once "contaespecial.class.php";

$conta2 = new ContaEspecial(0, 456, 1000);
echo '<hr>';
//var_dump($conta2);
echo '<hr>';
echo 'vou depositar';
$conta2->Depositar(500);
echo '<hr>';
//var_dump($conta2);
echo '<hr>';
echo "O saldo eh:".$conta2->ObterSaldo()."<br>";
echo '<hr>';
echo 'vou sacar';
$conta2->Sacar(1550);
echo "O saldo eh:".$conta2->ObterSaldo()."<br>";
echo '<hr>';
var_dump($conta2);
?>