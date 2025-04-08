<div class="titulo">Valor x Referência</div>

<?php
//atribuição por valor:
$variavel = 'Olá';
echo $variavel;
$variavelValor = $variavel;
echo "<br>" . $variavelValor;
$variavel = "Boa tarde";

echo "<br>" . $variavel;
echo "<br>" . $variavelValor;


//atribuição por referência:
 $variavelreferencia = &$variavel ;
$variavel = "Oi bocó";
echo "<br>" . $variavelreferencia;
?>