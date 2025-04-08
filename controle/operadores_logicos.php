<div class="titulo">Operadores Lógicos</div>
   
<p>Negação Lógica </p><hr>
 
<?php
echo '<br>';
var_dump(true);
echo '<br>';
var_dump(!true);
?>

<p>Tabela verdade AND (E)</p><hr>

<?php
    echo '<br>';
    var_dump(true && true);
    echo '<br>';
    var_dump(true && false);
    echo '<br>';
    var_dump(false && true);
    echo '<br>';
    var_dump(false && false);
    //Também pode utilizar 'and' no lugar de '&&'
?>

<p>Tabela verdade OR (Ou)</p><hr>

<?php
    echo '<br>';
    var_dump(true || true);
    echo '<br>';
    var_dump(true || false);
    echo '<br>';
    var_dump(false || true);
    echo '<br>';
    var_dump(false || false);
    echo '<br>';
?>

<p>Tabela verdade XOR (Ou Exclusivo)</p><hr>

<?php
    echo '<br>';
    var_dump(true xor true);
    echo '<br>';
    var_dump(true xor false);
    echo '<br>';
    var_dump(false xor true);
    echo '<br>';
    var_dump(false xor false);
    echo '<br>';
?>


<style>
    p{
        margin-bottom: 0px;
    }

    hr{
        margin-top: 0px;
    }
</style>