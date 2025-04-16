<div class="titulo">Map & Filter</div>

<?php
$notas = [9.8,7.3,6.5,8.2];
$notasArredondadas = [];

foreach ($notas as $valor){
    $notasArredondadas[] = round($valor);
}

print_r($notasArredondadas);

// Agora utilizando Map
$notasArredondadas2 = array_map('round', $notas);
print_r($notasArredondadas2);

// --------------------------------------------

$aprovados =[];
foreach ($notas as $valor){
    if ($valor >= 7){
        $aprovados[]= $valor;
    }
}

print_r($aprovados);

// Agora utilizaremos Filter

function aprovaçao($notas){
    return $notas >=7;
}

$aprovados2 = array_filter($notas, 'aprovaçao');
print_r($aprovados2)
?>
