<div class="titulo">Gerenciando Sessão</div>

<?php 
//session_id('b892d732f3757f71761558d1ba1b5e78');
session_start();
echo session_id();
echo "<br>";
$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo $contador;

if ($_SESSION['contador'] % 5 === 0){
    session_regenerate_id();
}
if ($_SESSION['contador'] >= 10){
    session_destroy();
}



?>