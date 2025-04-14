<div class="titulo">Funções Anônimas</div>

<?php
$soma = function ($a, $b){return $a+$b;};
echo $soma(5,9);

function executar($a, $b, $op, $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado";
}
echo '<br>';
executar( 2, 8, '+', $soma);

$multiplicacao = function ($a, $b){return $a*$b;};

echo '<br>';
executar(2, 8, '*', $multiplicacao);

function divisao ($a, $b){return $a/$b;}
echo '<br>';
executar(2, 8, '/', 'divisao'); // precisa colocar aspas

?>