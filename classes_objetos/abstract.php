<div class="titulo">Classe Abstrata</div>

<?php
abstract class Abstrata {
    abstract public function metodo1();
    abstract protected function metodo2($parametro);

}

abstract class FilhaAbstrata extends Abstrata {
    public function metodo1() {
        echo "Executando método1 <br>";
    }

    abstract public function metodo3();
}

class Concreta extends FilhaAbstrata {
    public function metodo1(){
        parent::metodo1();
        echo "Método 1 extendido <br>";
    }
    public function metodo2($parametro){
        echo "Executando metodo2 com parametro: $parametro <br>";
    }

    public function metodo3() {
        echo "Executando método 3<br>";
        $this->metodo2('interno');
    }

}

$objeto = new Concreta();
$objeto->metodo1();
echo "<hr>";
$objeto->metodo2('externo');
echo "<hr>";
$objeto->metodo3();
echo "<hr>";
echo '<br>';

var_dump($objeto);
echo '<br>';
var_dump($objeto instanceof Concreta);
var_dump($objeto instanceof FilhaAbstrata);
var_dump($objeto instanceof Abstrata);

echo'Fim!'

?>