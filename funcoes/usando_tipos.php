<div class="titulo">Usando Tipos</div>

<?php
function soma1($a, $b){
    echo "Somando $a + $b = ";
    return $a + $b;

}

echo soma1(6, 8) . '<br>';
echo soma1(6, 8.5) . '<br>';
echo soma1(6, '4oito') . '<br>';

function soma2(int $a, int $b){
    echo "Somando $a + $b = ";
    return $a + $b;
}

echo soma2(4,3) . '<br>';
echo soma2(4,3.5) . '<br>';
echo soma2(4,'7') . '<br>';

function soma3($a, $b):int {
    echo "Somando $a + $b = ";
    return $a + $b;
}

echo soma3(5.6, 6.9) . '<br>';
echo soma3(5.6, 9.8) . '<br>';


?>