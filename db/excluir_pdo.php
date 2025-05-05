<div class="titulo">PDO: Excluir</div>

<?php
require_once "conexao_pdo.php";
$conexao= novaConexao();
$sql = "DELETE FROM cadastro WHERE id = :id"; 
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':id', 1, PDO::PARAM_INT);

if($stmt->execute()){
    echo "Usuario excluído com sucesso";
}

$conexao->close();




?>