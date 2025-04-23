<div class="titulo">Interface</div>

<?php
 interface Animal {
    function respirar();
 }

interface Canino extends Animal{
    function latir ():string;
}

 class Cachorro implements Canino {
    function respirar(){
        echo 'Irei usar ar <br>';
    }
    function latir():string {
        return 'auau rrrr auau <br>';
    }
 }

 $cachorro1 = new Cachorro();
 $cachorro1 ->respirar() ;
 echo $cachorro1 -> latir() . '<br>';
 echo 'Fim'
?>