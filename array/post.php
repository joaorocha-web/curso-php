<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome" id="inome">
    <input type="text" name="sobrenome" id="isobrenome">
    <button>Enviar</button>
</form>

<?php
  print_r($_POST)

?>

<style>
    form >*{
        font-size: 1.4rem;
    }
</style>