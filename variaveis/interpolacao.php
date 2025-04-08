<div class="titulo">interpolação</div>

<?php
    $numero = 10;

echo '<br> $numero';
echo "<br> $numero";

$objeto = 'caneta';
$resposta = "Eu tenho 5 $objeto.";
echo '<br>' . '<br>' . $resposta;
$resposta = "Eu tenho 5 {$objeto}s. ";
echo '<br>' . $resposta
?>