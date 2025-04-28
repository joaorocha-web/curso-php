<div class="titulo">Desafio do Módulo</div>

<?php 

ini_set('display_errors', 1);
require_once('usuario.php');
$usuario = new Usuario('João Lindão', 20, 'jvdofogo_25');
$usuario ->apresentar();