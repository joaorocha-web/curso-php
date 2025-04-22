<div class="titulo">Construtor e Destrutor</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade = 18){
        echo "Construtor invocado!<br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo "Morreu...";
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos. <br>";
    }
}

$pessoa1 = new Pessoa('João Victor', 20);
$pessoa1 ->apresentar();

$pessoa2 = new Pessoa('Maria Roberta');
$pessoa2->apresentar();

unset($pessoa2);

?>