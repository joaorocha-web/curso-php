<div class="titulo">Desafio Erros</div>

<?php
/*
interface Template{
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata extends Template {
    public function metodo3(){
        echo "Estou funcionando";
    }

}

class Classe implements ClasseAbstrata {
    function __construct ($parametro){

    }
}

$exemplo = Classe();
$exemplo.metodo3();
*/

interface Template{
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {
    public function metodo3(){
        echo "Estou funcionando<br>";
    }

    public function metodo2($parametro){
        echo "Sou obrigado a usar o método dois $parametro <br>";
    }

    function metodo1(){
        echo "Também preciso usar o método 1...<br>";
    }

}

class Classe extends ClasseAbstrata {
    function __construct ($parametro){

    }
}

$exemplo = new Classe($parametro);
$exemplo-> metodo3();



?>