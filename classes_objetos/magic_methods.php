<div class="titulo">Métodos Mágicos</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct ($nome, $idade){
        echo "Construtor invocado<br>";
        $this->nome= $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'Acabou...<br>';
    }

    public function __toString(){
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar (){
        echo $this . "<br>";
    }

    public function __get($atributo)
    {
       echo "lendo atributo não declarado: {$atributo}" ;
    }

    public function __set($name, $value)
    {
        echo "alterando o valor de um atributo não declarado: {$name} = {$value}"; 
    }

    public function __call($name, $arguments)
    {
        echo "tentando executar o método '{$name}()', com os parâmetros:";
        print_r($arguments);
    }
}

$pessoa = new Pessoa('Ricardo', 35);
$pessoa->apresentar();
echo $pessoa . '<br>';
$pessoa->idade = 55;
echo $pessoa . '<br>';

echo '<br><hr><br>';
echo $pessoa->altura . '<br>';
echo $pessoa->altura = '1.85 <br>';

echo '<br><hr><br>';
$pessoa-> metodoInexistente('João')
?>