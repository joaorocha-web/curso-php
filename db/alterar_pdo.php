<div class="titulo">PDO: Alterar</div>

<?php
require_once "conexao_pdo.php";

$conexao = novaConexao();
$sql = "UPDATE cadastro SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ? WHERE id = ?";
$stmt= $conexao->prepare($sql);

$resultado = $stmt->execute([
    "Gustavo",
    "2000-10-03",
    "gugu@email.com",
    "",
    1,
    1500,
    10
]);

if($resultado){
    echo "Sucesso!";
}else{
    print_r($stmt->errorInfo());
}



?>