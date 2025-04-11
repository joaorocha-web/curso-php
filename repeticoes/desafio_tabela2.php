<div class="titulo">Desafio Tabela 2</div>

<form action="#" method="post">
    <div>
        <p>
            <label for="ilinha">Quantidade de Linhas:</label>
            <input type="number" value="<?= $_POST ['linha'] ?? 5 ?>" name="linha" id="ilinha">
        </p>
        <p>
            <label for="icoluna">Quantidade de colunas:</label>
            <input type="number" value="<?= $_POST ['coluna'] ?? 5 ?>" name="coluna" id="icoluna">
        </p>
    </div>
    <span>
        <div>
            <p>
                <label for="icor">Escolha a Cor</label>
                <input type="color" value="<?= $_POST ['cor'] ??  '#cccccc'?>" name="cor" id="icor">
            </p>
        </div>
        <div><button>Gerar Tabela</button></div>
    </span>
</form>

<table>
<?php
$tabela = [];
$cor = $_POST ['cor'];
$linha = $_POST['linha'];
$coluna = $_POST['coluna'];
$cont = 1;
for ($i = 0; $i < $linha; $i++){
    $style = $i % 2 === 0 ?"background-color:$cor" :'background-color: rgb(255, 255, 255)' ;
    echo "<tr style ='{$style}'>";
    for ($j = 0; $j <$coluna; $j++){
        echo "<td>$cont</td>";
        $cont++;
    }
    echo "</tr>";
}


?>
</table>








<style>

    form button{
        font-size: 1.9rem;
        margin-left: 20px;
    }

    form input{
        width: 50px;
        font-size: 1.3rem;
        margin-top: 0px;
        padding-top: 0px;
    }

    span{
        margin: 0px;
        display: flex;
        justify-items: flex-start;
        align-items: center;
    }

    table{
        border: 1px solid <?= $cor ?> ;
        border-collapse: collapse;
        margin: 20px auto;
        box-shadow: 1px 2px 6px #777;
    }

    table tr{
        border: 1px solid <?= $cor ?> ;
    }

    table td{
        padding: 10px 20px;
    }
</style>