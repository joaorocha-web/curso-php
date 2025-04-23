<div class="titulo">Membros estáticos</div>

<?php
class A {
    public $naostatic = " Variavel Não estática";
    public static $static = " Váriavel de classe (Estática)";

    public function mostrarA(){
        echo "Não estática: {$this->naostatic} <br>";
        //tentativa 1
        // echo "Estática: {$this->static} <br>";
        //tentativa 2 
        // echo "Estática: {self::$static} <br>";
        //jeito certo 
        echo "Estática" . self::$static . "<br>";
    }
}

$objetoA = new A();
$objetoA -> mostrarA()

?>