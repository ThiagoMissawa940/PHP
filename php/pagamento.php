<?php

// Array de produtos com seus preços
$produtos = [
    "produto1" => 50.0,
    "produto2" => 20.0,
    "produto3" => 40.0,
    "produto4" => 23.5,
];

// Taxas de desconto e juros
$dinheiroepix = 0.15;
$creditoavista = 0.10;
$jurosParcelado = 0.10;

// Solicitar o nome do produto
$nomeProduto = readline('Digite o nome do produto: ');

// Verificar se o produto existe
if (!array_key_exists($nomeProduto, $produtos)) {
    echo "Produto não encontrado.\n";
    exit;
}

// Receber a quantidade de parcelas
$parcelado = (int)readline('Digite em quantas parcelas você deseja parcelar: ');

// Calcular o valor final
$valorProduto = $produtos[$nomeProduto];

if ($parcelado == 1) {
    // À vista em Dinheiro ou Pix
    $valorFinal = $valorProduto - ($valorProduto * $dinheiroepix);
    echo "Pagamento à vista em Dinheiro ou Pix. Valor final: R$ $valorFinal\n";
} elseif ($parcelado == 2) {
    // À vista no cartão de crédito
    $valorFinal = $valorProduto - ($valorProduto * $creditoavista);
    echo "Pagamento à vista no cartão de crédito. Valor final: R$ $valorFinal\n";
} elseif ($parcelado >= 3) {
    // Parcelado no cartão em três vezes ou mais, com 10% de juros
    $valorFinal = $valorProduto + ($valorProduto * $jurosParcelado);
    echo "Pagamento parcelado em $parcelado vezes. Valor final: R$ $valorFinal\n";
} else {
    echo "Opção de pagamento inválida.\n";
}

?>
