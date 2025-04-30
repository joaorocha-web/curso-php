<?php namespace Outro\Nome; ?>
<div class="titulo">Use/As</div>

<?php 
echo __NAMESPACE__ . '<br>';

require_once('use_as_arquivo.php');

function soma ($a , $b){
    return $a . $b;
}

class Classe {
    public $var; 
    function func(){
        echo __NAMESPACE__ . '->' . __CLASS__ . '->' . __METHOD__ . '<br>';
    }
}

echo \Nome\Bem\Grande\CONSTANTE . '<BR>';
use const Nome\Bem\Grande\CONSTANTE;
echo CONSTANTE . '<BR>';

use Nome\Bem\Grande as apelido;

echo soma ( 1, 2) . '<br>';
echo apelido\soma(1,2) . '<br>';

use function Nome\Bem\Grande\soma as somaReal; 
echo somaReal(1, 1789) . '<br>';

$a = new Classe();
$a -> func();

$b = new \Nome\Bem\Grande\Classe();
$b-> func();

$c = new apelido\Classe();
$c -> func();

use \Nome\Bem\Grande\Classe as Classeb;
$d = new Classeb();
$d-> func();








?>
