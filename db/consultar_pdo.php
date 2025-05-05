<div class="titulo">PDO: Consultar</div>

<?php
require_once "conexao_pdo.php";

$conexao= novaConexao();
$sql= "SELECT * FROM cadastro";
$resultado = $conexao->query($sql)->fetchall();
print_r($resultado);

echo '<hr>';

$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO::PARAM_INT);
$stmt->bindValue(':inicio', 5, PDO::PARAM_INT);

if($stmt->execute()){
    $resultado= $stmt->fetchAll();
    print_r($resultado);
}

echo '<hr>';

$sql = "SELECT  * FROM cadastro WHERE id = ?";
$stmt = $conexao->prepare($sql);
if($stmt->execute([3])){
    $resultado= $stmt->fetch();
    print_r($resultado);
}

$conexao->close();

?>