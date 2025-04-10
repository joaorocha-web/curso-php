<div class="titulo">While / Do While</div>

<?php
const VALOR_MAXIMO = 5;
$contador = 0;
while ($contador <= VALOR_MAXIMO ){
    echo "$contador /";
    $contador++;
}

$contador = 0; 
echo "<br>";

do {
    echo "$contador /";
    $contador++;
} while ($contador <= VALOR_MAXIMO);

$contador = 0; 
echo "<br>";

while (true){
    echo "$contador /";
    $contador++;
    if ($contador == VALOR_MAXIMO + 1)break;
}


?>