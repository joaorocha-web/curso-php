<div class="titulo">Excluir Registro #2</div>

<?php
require_once "conexao.php";
$conexao = novaConexao();
$sql = "SELECT id, nome, nascimento, email, filhos FROM cadastro";
$resultado = $conexao->query($sql);

$registros =[];
if($resultado->num_rows>0){
    while($row = $resultado->fetch_assoc() ){
        $registros[]= $row;
    }
}else{
    echo "Erro: " . $conexao->error;
}

print_r($registros)
?>

<table class="table"></table>