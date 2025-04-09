<div class="titulo">Desafio Switch</div>
<h4>Conversor de Medidas</h4>
<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km -> Milha</option>
        <option value="milha-km">Milha -> Km</option>
        <option value="metro-km">Metros -> Km</option>
        <option value="km-metro">Km -> metros</option>
        <option value="C-F">°C -> °F</option>
        <option value="F-C">°F -> °C</option>
    </select>
    <button>Converter</button>
</form>

<?php
$valor = $_POST['param'];
$conversao = $_POST['conversao'];
$valorConvertido;
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 0.001;

switch ($conversao){
    case 'km-milha':
        $valorConvertido = $valor * FATOR_KM_MILHA;
        $mensagem = "$valor Km(s) = $valorConvertido milha(s)";
        break;
    case 'milha-km':
        $valorConvertido = $valor / FATOR_KM_MILHA;
        $mensagem = "$valor milha(s) = $valorConvertido Km(s)";
        break;
    case 'metro-km':
        $valorConvertido = $valor * FATOR_METRO_KM;
        $mensagem = "$valor metro(s) = $valorConvertido Km(s)";
        break;
    case 'km-metro':
        $valorConvertido = $valor / FATOR_METRO_KM;
        $mensagem = "$valor km(s) = $valorConvertido metro(s)";
        break;
    case 'C-F':
        $valorConvertido = ($valor * 1.8) + 32;
        $mensagem = "$valor °C = $valorConvertido °F";
        break;
    case 'F-C':
        $valorConvertido = ($valor - 32) / 1.8;
        $mensagem = "$valor °F = $valorConvertido °C";
        break;
    default: 
        $mensagem = '';
        break;
}

echo $mensagem;


?>

<style>
    h4{margin: 0px;}
    form >*{
        font-size: 1.3rem;
    }
    button{
        color: white;
        background-color:rgb(65, 65, 214);
    }

    input{
        max-width: 140px;
    }
</style>