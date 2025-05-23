<div class="titulo">Herança</div>

<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Pessoa criada <br>";
    }

    function __destruct(){
        echo 'Pessoa diz: tchau <br>';
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos";
    }
}

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->login = $login;
        echo "Usuário criado <br>";
    }

    function __destruct(){
       echo "Uusário diz: tchau <br>" ;
    }

    /*public function apresentar(){
        echo "@{$this->login}: {$this->nome}, {$this->idade} anos.<br>";
    }*/ 
    //faremos de forma diferente, usando herança.

    public function apresentar(){
        echo "@{$this->login}: ";
        parent::apresentar();

    }

}

$usuario = new Usuario('João Victor', 20, 'jvdofogo_25');
$usuario ->apresentar();
?>