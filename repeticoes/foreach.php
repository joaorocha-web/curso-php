<div class="titulo">Foreach</div>

<?php
$semana = [1=> 'domingo','segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sábado'];

foreach( $semana as $dia){
    echo "$dia <br>";
}

echo'<hr>';

foreach ( $semana as $numeracao => $dia){
    echo "{$numeracao}° - $dia <br>";
}
echo'<hr>';

$matriz = [
    ['a','b','c','d','e'],
    ['l','m','n','o']
];

foreach ($matriz as $linha){
    foreach ($linha as $letras){
        echo "$letras ";
    }
    echo '<br>';
}
echo'<hr>';

$numero = [1,2,3,4,5,6];

foreach ($numero as &$dobrar){
    $dobrar *=2;
    echo "$dobrar <BR>";
}
?>