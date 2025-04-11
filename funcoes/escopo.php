<div class="titulo">Função & Escopo</div>

<?php
function imprimirMensagens(){
  
    echo"É importante entender que quando colocamos uma variavel dentro de uma função, essa variavel não possui um escopo global, ou seja, ela não é alterada fora da função. Para que isso aconteca precisamos declarar -global e o nome da variavel. <br>";
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