<div class="titulo">Data #02</div>

<?php
$formatodata1 = 'D, d \d\e M \d\e Y';
$formatodata2 = '%A, %d de %B de %Y';
$formatodatahora = '%A, %d de %B de %Y, %H:$M:%S';

$agora = new DateTime();
// print_r($agora);
// echo '<br>';

echo $agora->format($formatodata1) . '<br>';
setlocale(LC_TIME, 'pt_BR');

$amanha = new DateTime('+1 day');
echo $amanha 



?>