<?php
require_once('pessoa.php');
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