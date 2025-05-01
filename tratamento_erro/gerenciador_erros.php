<div class="titulo">Error Handler</div>

<?php 
ini_set('display_errors',1);
//echo 4/0;

error_reporting(E_ERROR);
//echo 4/0;
include ('arquivo_inexistente.php');
error_reporting(E_ALL);
include ('arquivo_inexistente.php');


?>