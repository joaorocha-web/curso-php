<div class="titulo">Recursividade</div>

<?php
function somaAte ($a, $b){
    $resultado = 0;
    for ($i = $a; $i >= $b; $i--){
        $resultado += $i;
    }
    return $resultado;
}

function somaAteDetalhado ($a, $b){
    $resultado = 0;
    for ($i = $a; $i >= $b; $i--){
        $resultado += $i;
        if ($i !== $b){
            echo "$i +";
        } else{
            echo "$i ";
        }
           
    }
    echo "= $resultado";
}

echo somaAte(8,1);
echo '<br>';
echo somaAteDetalhado(8,1);
echo '<br>';

// agora usaremos recursividade

function somaAteRecursividade($numero){
    if ($numero === 1){
        return 1;
    }
    return $numero + somaAteRecursividade($numero - 1);
}
echo somaAteRecursividade(8)
?>