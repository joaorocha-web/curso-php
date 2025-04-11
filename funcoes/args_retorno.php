<div class="titulo">Argumentos e Retorno</div>

<?php
function obterMensagem(){
    return 'Seja Bem Vindo (a)';
}

echo obterMensagem();

function obterMensagensComNome($nome){
    return "Seja bem vindo(a) {$nome}!";
}

echo '<br>' . obterMensagensComNome('João');


function soma($a, $b){
    return $a + $b;
}

echo "<br>" , soma(49, 8);

function trocaValor($var, $novoValor){
    $var = $novoValor;
    return $var;
}
$VARIAVEL = 2;
ECHO '<BR>';
echo trocaValor($VARIAVEL, 8);
ECHO '<BR>';
echo $VARIAVEL;

function trocaValorDeVerdade(&$var, $novoValor){
    $var = $novoValor;
    return $var;
}
ECHO '<BR>';
echo trocaValorDeVerdade($VARIAVEL, 8);
ECHO '<BR>';
echo $VARIAVEL;
    ?>