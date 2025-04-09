<div class="titulo">Mapa</div>

<?php
$dados = array(
    "idade"=> 25, 
    "nome"=> 'Cláudio',
    "peso"=> 66
);

print_r($dados);

$dados[]= 22; 
echo '<br>';
print_r($dados);
$dados['apelido']= 'bocó'; 
echo '<br>';
print_r($dados);

?>