<div class="titulo">Argumentos e Retorno</div>

<?php
function obterMensagem(){
    return 'Seja Bem Vindo (a)';
}

echo obterMensagem();

function obterMensagensComNome($nome){
    return "Seja bem vindo(a) {$nome}!";
}

echo '<br>' . obterMensagensComNome('João')
?>