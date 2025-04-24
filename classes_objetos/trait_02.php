<div class="titulo">Trait #02</div>

<?php
trait Validacao {
    public function validarString($str){
        return isset($srt) && $str !== '';
    }
}

trait ValidacaoMelhor {
    public function validarString($str){
        return isset($str) && trim($str);
    }
}

/* class Usuario {
    use Validacao, ValidacaoMelhor;
} */ 

class Usuario {
    use Validacao, ValidacaoMelhor{
        ValidacaoMelhor::validarString insteadOf Validacao;

        Validacao::validarString as validacaoSimples;
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
var_dump($usuario->validacaoSimples(' '));

?>