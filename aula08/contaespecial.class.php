<?php
// contaespecial.class.php
class ContaEspecial extends Conta {
	
  //  a classe ContaEspecial herda os atributos $Saldo e $Numero da classe Conta
  // também herda os métodos Depositar(), Sacar() e ObterSaldo()
protected $Limite;

  function __construct($s, $n, $l) {
    // executa o construtor da classe Conta (exemplo de reuso de código)
	  parent::__construct($s, $n);
	  $this->Limite = $l;
  }
 
  // redefine o método Sacar() para considerar o limite (exemplo de polimorfismo)
  function Sacar($v) {
	if (($this->ObterSaldo() + $this->Limite)>= $v) {
      $this->Saldo -= $v;
    } else {
		echo "Saldo insuficiente<br>";
	}
  }
} 
?>
	