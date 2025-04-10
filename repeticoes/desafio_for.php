<div class="titulo">Desafio For</div>

<?php
$desafio = ['#', '##', '###', '####', '#####'];
for ($count = 0; $count < count($desafio); $count++){
    echo "<br> $desafio[$count]";
}

echo '<hr>';

for($desafio2 = '#'; $desafio2!='######'; $desafio2 .= '#'){
    echo "<br> $desafio2";
}
?>