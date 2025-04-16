<div class="titulo">Retornando Função</div>

<?php
function soma($a){
    return function (int $b) use ($a){
        echo $a+$b;
    };
}

echo soma(3)(20.8)
?>