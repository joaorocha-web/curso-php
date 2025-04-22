<div class="titulo">Primeira Classe</div>

<?php
class Cliente {
    //atributos 
    public $nome = 'Anônimo';
    public $idade = 18;

    //método
    public function apresentar(){
        echo "Olá, meu nome é {$this->nome} e eu tenho {$this->idade} anos.<br>";
    }
}

$c1 = new Cliente();
$c1 -> apresentar();

$c2 = new Cliente();
$c2 ->nome = 'João'; 
$c2 ->apresentar();
?>