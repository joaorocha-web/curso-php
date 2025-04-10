<div class="titulo">Laço For</div>

<?php
for ($cont = 1; $cont <= 4; $cont++){
    echo "$cont <br>";
}

for (;$cont <=7; $cont++){
    echo "<strong>$cont</strong><br>";
}

echo "<hr>";
$semana = [1 =>'domingo','segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sábado', 'feriado ', 'páscoa'];
for ($dia = 1; $dia <=count($semana); $dia++){
    echo "<br>" ; 
    print_r($semana[$dia]);
}

echo "<hr>";



?>