<div class="titulo">Desafio Palindromo</div>

<?php
function palindromo($palavra){
    $ultimaLetra = strlen($palavra) -1;
    for ($i = 0; $i <$ultimaLetra; $i++){
        if (strtoupper($palavra[$i])!== strtoupper($palavra [$ultimaLetra - $i])){
            return 'Não';
        }
    } return 'Sim';
}

echo palindromo('arara');
echo palindromo('Ovo');
echo palindromo('mel');
echo palindromo('A base do teto desaba');
echo palindromo('ABASEDOTETODESABA');


?>