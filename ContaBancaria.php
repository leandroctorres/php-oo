<?php

declare(strict_types=1);

class ContaBancaria
{
	/**
	 * @var string
	 */
	private $banco;

	/**
	 * @var string
	 */
	private $nomeTitular;

	/**
	 * @var string
	 */
	private $numeroAgencia;

	/**
	 * @var string
	 */
	private $numeroConta;

	/**
	 * @var float
	 */
	private $saldo;

	public function __construct(
		string $banco,
		string $nomeTitular,
		string $numeroAgencia,
		string $numeroConta,
		float $saldo)
	{
		$this->banco = $banco;
		$this->nomeTitular =$nomeTitular;
		$this->numeroAgencia =$numeroAgencia;
		$this->numeroConta =$numeroConta;
		$this->saldo =$saldo;
	}

	public function obterSaldo()
	{
		return 'Seu saldo atual é: R$' . $this->saldo;
		//return "Olá, eu sou o método obterSaldo()";
	}

	public function depositar(float $valor): string
	{
		$this->saldo += $valor;
		return 'Depósito de R$ ' . $valor . ' realizado!';
	}

	public function sacar(float $valor): string
	{
		$this->saldo -= $valor;
		return 'Saque de R$ ' . $valor . ' realizado!';
	}

}

$conta = new ContaBancaria(
	'Banco do Brasil', // banco
	'Leandro Torres', //nomeTitular
	'8244', //numeroAgencia
	'57354-10', //numeroConta
	0 //saldo
);


echo $conta->obterSaldo();
echo "<br><br>";

echo $conta->depositar(400.00);
echo "<br>";
//echo PHP_EOL;
echo $conta->obterSaldo();
echo "<br><br>";

echo $conta->sacar(150.00);
echo "<br>";
echo $conta->obterSaldo();
echo "<br><br>";


exit();
var_dump($conta->nomeTitular);
var_dump($conta->saldo);
$conta->saldo = 0;
var_dump($conta->saldo);
var_dump($conta->obterSaldo());
