<div class="titulo">Variáveis Variáveis</div>

<?php
$a= 'valorA';
$$a= 'ValorAA';

echo "$a {$$a} ${$a}";
?>