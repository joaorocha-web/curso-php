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
    echo "Valor durante a função: $variavel <br>";
}

echo "Valor antes da função: $variavel <br>";
alterarValor();
echo "Valor depois da função: $variavel";

echo "<hr><br>";

function alterarValordeVerdade(){
    global $variavel;
    $variavel = 3; 
    echo "Valor durante a função: $variavel <br>";
   
}

echo "Valor antes da função: $variavel <br>";
alterarValordeVerdade();
echo "Valor depois da função: $variavel";

?>