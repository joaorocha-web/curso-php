<div class="titulo">Operadores Relacionais</div>

<?php
    var_dump(5 == 5);
    echo '<br>';
    var_dump(5 > 5);
    echo '<br>';
    var_dump(5 + 3 == 5 * 3);
    echo '<br>';
    var_dump(5 == '5');
    echo '<br>';
    var_dump(5 === '5');
    echo '<br> Utilizando operadores relacionais com if/else.';

    $idade = 15;
    if ($idade >= 18 && $idade < 50){
        echo   '<br> adulto';
    } else if($idade >= 50) {
        echo '<br> Idoso';
    } else {
        echo '<br> Menor de idade';
    }
?>