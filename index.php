<?php

require __DIR__ . '/vendor/autoload.php';

use App\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();

print_r($carrinho1->exibirItems());
echo 'Valor total: ' . $carrinho1->exibirValorTotal();
echo "<br>";

$carrinho1->adicionarItem('Celular', 1500);
$carrinho1->adicionarItem('Notebook', 2000);
$carrinho1->adicionarItem('Tablet', 300);

echo "<br>";
print_r($carrinho1->exibirItems());
echo 'Valor total recalculado: ' . $carrinho1->exibirValorTotal();
echo "<br>";


echo "<br>";
echo 'Status: ' . $carrinho1->exibirStatus();

echo "<br>";
if ($carrinho1->confirmarPedido()) {
    echo '<br>Pedido confirmado!';
} else {
    echo '<br>Erro na confirmação do Pedido! Carrinho não possui itens.';
}

echo "<br>";
echo 'Status: ' . $carrinho1->exibirStatus();