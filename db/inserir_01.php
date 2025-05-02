<div class="titulo">Inserir Registro #01</div>

<?php
require_once "conexao.php";
$sql = "INSERT INTO cadastro 
(nome, nascimento, email, site, filhos, salario)
 VALUES (
    'Venancio',
    '1996-07-12',
    'venan@gmail.com',
    '',
    2,
    6200
 )";

 $conexao = novaConexao();
 $resultado = $conexao->query($sql);
 if($resultado){
    echo "Sucesso :)";
}else{
    echo "falhou:" . $conexao->error;
}

$conexao->close()

?>