<div class="titulo">Desafio Recursividade</div>

<?php
$array = [1,2,[3,4,5],6, [7,8,[9]], 10];

function mostrarArray($array, $nivel = '>'){
    foreach ($array as $valor){
        if (is_array($valor)){
            mostrarArray($valor, $nivel. $nivel[0]);
        } else {
            echo $nivel . $valor . '<br>';
        }
    }
}

mostrarArray($array)

?>