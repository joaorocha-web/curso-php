<div class="titulo">Desafio Data </div>

<?php
class Data {
    public $dia = 01;
    public $mes = 01; 
    public $ano = 1970; 

    public function apresentar(){
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
     
}

$data1 = new Data();
echo $data1 ->apresentar() . '<br>';

$data2 = new Data();
$data2 ->dia = 16;
$data2 ->mes = 8;
$data2 ->ano = 2004;
echo $data2->apresentar()


?>