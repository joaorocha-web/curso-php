<div class="titulo">Argumento Padrão</div>

<?php
function saudacao($nome = "Senhor(a)", $sobrenome = "Cliente"){
    return "Bem vindo, $nome $sobrenome !! <br>";
}

echo saudacao();
echo saudacao('João', 'Victor');
echo '<hr>';

function pedido($comida, $bebida = "Água"){
    return "Para comer: $comida <br>
            Para beber: $bebida";
}

echo pedido('hamburguer');

echo '<hr>';
echo pedido('hamburguer', 'Coca-cola');

?>