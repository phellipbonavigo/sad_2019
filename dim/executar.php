<?php
require_once('DimCliente.php');

use dimensoes\DimCliente;

$dimCliente = new DimCliente();
$sumCliente = $dimCliente->carregarDimCliente();
echo "Quantidade de Inclusões: ".$sumCliente->quantidadeInclusoes."<br>";
echo "Quantidade de Alterações: ".$sumCliente->quantidadeAlteracoes;
?>