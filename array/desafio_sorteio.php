<div class="titulo">Desafio Sorteio</div>

<?php
$time = ["Flamengo", "Vasco", "Cruzeiro", "Fluminense", "Criciuma"];
$indice = array_rand($time);
$sorteio = $time[$indice];
echo "<h1>$sorteio</h1>"
?>