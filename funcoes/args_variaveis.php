<div class="titulo">Argumentos Variáveis</div>

<?php
function soma($a, $b){
    return $a + $b;
}

echo soma(4, 8) . '<br>';
echo soma (9, 10, 76, 8) .'<br>'; 

function somaCompleta(... $numeros){
    foreach ($numeros as $val){
        $soma += $val;
    }
    return $soma;

}

 echo somaCompleta(5, 8, 9, 12) 
?>