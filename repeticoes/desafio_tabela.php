<div class="titulo">Desafio Tabela</div>

<?php
$matriz = [
    ['01','02','03','04','05'],
    ['06','07','08','09',10],
    [11,12,13,14,15],
    [16,17,18,19,20]
];

foreach ($matriz as $indice){
    foreach ($indice as $valor){
        echo "$valor ";
    }
    echo '<br>';
}

?>