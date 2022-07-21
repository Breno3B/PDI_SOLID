<?php

namespace App;


class CarrinhoCompra
{
    // Atributos
    private $itens;
    private $status;
    private $valorTotal;

    // Métodos
    public function __construct()
    {
        $this->itens = [];
        $this->status = 'aberto';
        $this->valorTotal = 0;
    }

    public function exibirItems(): array
    {
        return $this->itens;
    }

    public function adicionarItem(string $item, float $valor): array
    {
        array_push($this->itens, [
            'item' => $item,
            'valor' => $valor
        ]);
        $this->valorTotal += $valor;
        return $this->itens;
    }

    public function exibirValorTotal(): float
    {
        return $this->valorTotal;
    }

    public function exibirStatus(): string
    {
        return $this->status;
    }

    public function confirmarPedido()
    {
        if ($this->validarCarrinho()) {
            $this->status = 'confirmado';
            $this->enviarEmailConfirmacao();

            return true;
        }
        return false;
    }

    public function enviarEmailConfirmacao()
    {
        echo '<br>... envia email de confirmação ...<br>';
    }

    public function validarCarrinho()
    {
        return count($this->itens) > 0;
    }
}