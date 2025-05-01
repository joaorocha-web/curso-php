<div class="titulo">Desafio Intdiv</div>

<?php 
include_once ('desafio_intdiv_arquivo.php');
use function \Aritmetica\intdiv;

try{
    echo intdiv(8,3). '<br>';
}catch (\Aritmetica\NaoInteiroException $e){
    echo "Resultado não é um número inteiro!";
}

try {
    echo intdiv(8, 0) . "<br>";
}catch (DivisionByZeroError $e){
    echo "Divisão por zero!";
}




?>