<?php

declare(strict_types=1);

class Vendas
{
    /**
     * @var string
     */
    private $data;
    /**
     * @var string
     */
    private $produto;
    /**
     * @var int
     */
    private $qtd;
    /**
     * @var float
     */
    private $valorTotal;

    public function __construct(string $data, string $produto, int $qtd, float $valorTotal)
    {
        $this->data = $data;
        $this->produto = $produto;
        $this->qtd = $qtd;
        $this->valorTotal = $valorTotal;
    }

    public function exibirVendas()
    {
        echo
            "Comprado em: " . $this->data . "\nProduto: " . $this->produto . "\nQuantidade: " . $this->qtd . "\nValor Total: " . $this->valorTotal . "\n\n";
    }
}

$venda1 = new Vendas(
    "20/10/2019",
    "camiseta",
    1,
    20.99
);
$venda2 = new Vendas(
    "20/10/2019",
    "tênis",
    2,
    50.99
);
$venda3 = new Vendas(
    "20/10/2019",
    "shorts",
    1,
    39.99
);

$venda1->exibirVendas();
$venda2->exibirVendas();
$venda3->exibirVendas();