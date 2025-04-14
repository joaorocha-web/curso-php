<div class="titulo">Closure e Callable</div>

<?php
$soma1 = function ($a,$b){
    return $a+$b;
};

function soma2($a, $b){
    return $a+$b;
}

echo $soma1(2,5) . '<br>';
echo is_callable($soma1) ? 'Sim' : 'Não' ;
echo '<br>';
echo soma2(2,5) . '<br>';
echo is_callable('soma2') ? 'Sim' : 'Não';

echo '<br>';
var_dump($soma1);
echo '<br>';
echo '<br>';
?>