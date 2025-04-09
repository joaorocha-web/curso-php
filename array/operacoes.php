<div class="titulo">Operações</div>

<?php
$dados1 = [
    'nome' => 'João',
    'idade' => 20
];

$dados2 = [
    'naturalidade' => 'Juiz de Fora'];

$dadosCompleto = $dados1 + $dados2;
print_r($dadosCompleto);
echo '<br>';
unset($dadosCompleto['idade']);
print_r($dadosCompleto);

// para somar como vimos em cima basta utilizar +, contudo se os índices forem iguais ocorrerá uma substituição de valor. Para corrigir esse problema podemos fazer do modo seguinte:

$pares = [0,2,4,6,8];
$impares = [1,3,5,7,9]; 
//$decimais = $pares + $impares // daria errado 
$decimais = array_merge($pares, $impares);
echo '<br><br>';
print_r($decimais);

//para ordenar posso usar a função seguinte: 
sort($decimais);
echo '<br><br>';
print_r($decimais);

// Podemos contar os elementos de um array dessa forma: 
    
echo '<br><br>'.count($decimais);


?>