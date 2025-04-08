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
    echo '<p> Utilizando operadores relacionais com if/else.</p><hr>';
    
    $idade = 15;
    if ($idade >= 18 && $idade < 50){
        echo   '<br> adulto';
    } else if($idade >= 50) {
        echo '<br> Idoso';
    } else {
        echo '<br> Menor de idade';
    }

    echo '<p> Spaceship</p><hr>';
    var_dump(50<=>50);
    var_dump(500<=>50);
    var_dump(50<=>52);
    ?>

<style>p{margin-bottom: 0px;} hr{margin-top: 0px;}</style>