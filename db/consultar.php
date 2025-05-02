<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<div class="titulo">Consultar Registros</div>

<?php

require_once "conexao.php";

$sql = "SELECT id, nome, nascimento, email FROM cadastro";
$conexao = novaConexao();
$resultado = $conexao->query($sql);

$registros =[];
if($resultado->num_rows>0){
    while($row = $resultado->fetch_assoc()){
        $registros[]= $row;
    }
}elseif($conexao->error){
    echo "Erro: " . $conexao->error;
}

// print_r($registros);

$conexao->close();

?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>  
    </thead>
    <tbody>
        <?php foreach($registros as $registro):  ?>
            <tr>
                <td><?=$registro['id']?></td>
                <td><?=$registro['nome']?></td>
                <td>
                    <?=
                        date('d/m/Y', strtotime($registro['nascimento']))
                    ?>
                    </td>
                <td><?=$registro['email']?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table >*{
        font-size: 1.3rem;
    }
</style>