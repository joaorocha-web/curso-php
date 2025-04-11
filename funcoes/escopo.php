<div class="titulo">Função & Escopo</div>

<?php
function imprimirMensagens(){
    echo "Olá";
    echo"<br> Tudo bem? <br>";
}

imprimirMensagens();

echo "<hr><br>";

$variavel = 1;

function alterarValor(){
    $variavel = 2;
    echo "Valor durante a função: $variavel";
}

echo "Valor antes da função: $variavel";
alterarValor();
echo "Valor depois da função: $variavel";

?>