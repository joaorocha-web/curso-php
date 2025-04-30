<div class="titulo">Erros personalizados</div>

<?php 
class FaixaEtariaException extends Exception{
    public function __construct($message, $code= 0, $previous = null)
    {
      
      parent::__construct($message, $code, $previous) ;
    }
}

function calcularAposentadoria($idade){
    if ($idade < 18){
        throw new FaixaEtariaException('Ainda está muito longe');
    }
    if ($idade > 70){
        throw new FaixaEtariaException('Já deveria estar aposentado');
    }
    return 70-$idade;
}

$idadesAvaliadas = [30, 60, 80, 15,28];

foreach($idadesAvaliadas as $idade){
    try{
        $tempoRestante = calcularAposentadoria($idade);
        echo "Idade: $idade, faltam $tempoRestante anos...<br>";
    }catch(FaixaEtariaException $e){
        echo "Não foi possivel calcular o tempo de aposentadoria que ainda resta para $idade.<br>";
        echo "Motivo: {$e ->getMessage()}<br>";
    }
}

?>