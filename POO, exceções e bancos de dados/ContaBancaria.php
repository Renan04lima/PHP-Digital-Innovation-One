<?php

declare(strict_types=1); // analiza os tipos e avisa se ouver incoerência

class ContaBancaria
{

    /**
     * @var string
     */
    private $banco;
    /**
     * @var string
     */
    private $nomeTirular;
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
        string $nomeTirular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo)
    {
        $this->banco = $banco;
        $this->nomeTirular = $nomeTirular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo()
    {
        return "Seu saldo atual é: " . $this->saldo . "\n";
    }

    public function depositar(float $valor)
    {
        $this->saldo += $valor;
        return "Deposito de " . $valor . " realizado! \n";
    }

    public function sacar(float $valor)
    {
        $this->saldo -= $valor;
        return "Saque de " . $valor . " realizado! \n";
    }
}

$conta = new ContaBancaria(
    'inter',
    'Renan',
    '8828',
    '54541-1',
    0
);

echo $conta->obterSaldo();

echo $conta->depositar(300.00);

echo $conta->obterSaldo();

echo $conta->sacar(99.54);

echo $conta->obterSaldo();