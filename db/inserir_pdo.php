<div class="titulo">PDO: Inserir</div>

<?php 
require_once "conexao_pdo.php";
$sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario) VALUES (
'Guilherme', 
'1986-10-12',
'guilhermano@email.com',
'guiguizézi.com',
2,
4200
)";

$conexao = novaConexao();

if($conexao->exec($sql)){
    $id = $conexao->lastInsertId();
    echo "Novo usuario cadastrado! Número do id: $id.";
}else {
    echo "erro;";
}

$conexao->close();


?>