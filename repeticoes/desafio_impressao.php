<div class="titulo">Desafio Impressão</div>

<?php
$array= [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for ($i = 0; $i < count($array); $i+=2){
    echo "$array[$i] <br>";
}

echo "<br><hr><br>";

foreach ($array as $indice => $valor){
    if ($indice % 2 != 0){
        continue;
    }
    echo "$indice - $valor <br>";
}
?>