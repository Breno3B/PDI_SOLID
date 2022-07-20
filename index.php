<?php

require __DIR__ . '/vendor/autoload.php';

use App\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();

echo '<br>';
print_r($carrinho1->exibirItems());
echo '<br>';
echo 'Valor total: ' . $carrinho1->exibirValorTotal();

$carrinho1->adicionarItem('Celular', 1500);
$carrinho1->adicionarItem('Notebook', 2000);
$carrinho1->adicionarItem('Tablet', 300);

echo '<br>';
echo '<br>';
print_r($carrinho1->exibirItems());
echo '<br>';
echo 'Valor total recalculado: ' . $carrinho1->exibirValorTotal();