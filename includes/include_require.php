<div class="titulo">Include vs Require</div>


<?php
echo 'Usando include com arquivo inexistente<br>';
ini_set('display_errors', 1);
include('arquivo-inexistente.php');

echo '<br> <hr> <br>';

echo 'Usando require com arquivo inexistente';
require ('arquivo_inexistente.php'); 

echo 'não achou o arquivo'



?>