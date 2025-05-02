<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<div class="titulo">Excluir Registro #2</div>

<?php
require_once "conexao.php";
$conexao = novaConexao();
if($_GET['excluir']){
    $excluirSQL= "DELETE FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();
}
$sql = "SELECT id, nome, nascimento, email FROM cadastro";
$resultado = $conexao->query($sql);

$registros =[];
if($resultado->num_rows>0){
    while($row = $resultado->fetch_assoc() ){
        $registros[]= $row;
    }
}else{
    echo "Erro: " . $conexao->error;
}

// print_r($registros);
?>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
        <th>Ações</th>
       
    </thead>
    <tbody>
        <?php foreach ($registros as $registro):?>
            <tr>
                
                    <td><?= $registro['id'] ?></td>
                    <td><?= $registro['nome'] ?></td>
                    <td>
                        <?= 
                            date('d/m/Y', strtotime($registro['nascimento'])) 
                        ?>
                    </td>
                    <td><?= $registro['email'] ?></td>
                    <td><a href="http://localhost/exercicio.php?dir=db&file=excluir_02&excluir=<?= $registro['id']?>" class="btn btn-danger">Excluir</a></td>
              
            </tr>
        <?php endforeach?>
    </tbody>
</table>

<style>
    table>*{
        font-size: 1.3rem;
    }
</style>