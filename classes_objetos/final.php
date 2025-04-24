<div class="titulo">Modificador Final</div>

<?php
abstract class Abstrata {
    abstract public function metodo1();

    final public function metodo2(){
        echo 'Não vou mudar';
    }
}

class Classe extends Abstrata {
    public function metodo1(){
        echo 'Executando metodo 1<br>';
    }

    /*public function metodo2(){
        echo 'extendendo o metodo 2';
    } */ 
   //Não podemos alterar uma função modificada por 'final'  
}

$objeto = new Classe();
$objeto->metodo1();
$objeto->metodo2();

final class Unica {
    public $atributo1 = '<br> valor';
}

/* class Duplicata extends Unica {
    public $atributo2;
}*/ 

$objeto2 = new Unica();
echo $objeto2->atributo1;


?>