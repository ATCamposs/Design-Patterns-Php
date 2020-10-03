<?php

require "./Estoque.php";
require "./Entrega.php";
require "./Pagamento.php";


/*
*No lugar de fazer toda a logica em vários lugares diferentes
*Usando uma facade é possivel abstrair completamente a classe
*E passar somente os dados necessarios para a facade em outros lugares
*Não sendo necessario reescrever todo o código abaixo em varios lugares diferentes.
*/
class CompraFacade
{
    public static function finalizarCompra($idProduto, $endereco, $cep, $transportadora, $meioDePagamento)
    {
        $valorDoProduto = Estoque::retornarPrecoDoProdutoPeloId($idProduto);
        $entrega = new Entrega();
        $entrega->endereco = $endereco;
        $entrega->cep = $cep;
        $entrega->transportadora - $transportadora;
        $valorDoFrete = $entrega->calcularFrete();
        $valorTotal = $valorDoProduto + $valorDoFrete;
        if($meioDePagamento == 1){
            Pagamento::pagarComCartao($valorTotal);
        }else{
            Pagamento::pagarComBoleto($valorTotal);
        }
    }
}