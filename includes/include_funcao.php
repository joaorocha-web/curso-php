<div class="titulo">Include Função </div>

<?php
echo 'Carregando: include_funcao<br>';

function carregarArquivo(){
    include ('include_arquivo.php');

    echo $variavel;

    echo soma(2, 5);
}

echo 'Novamente no arquivo include_funcao<br>';
carregarArquivo();
echo '<br>';
echo soma(7,9)



?>