<div class="titulo">Switch</div>

<P>Formulário para compra de um automóvel.</P>
<form action="#" method="post">
    <label for="categoria">Categoria:</label>
    <select name="categoria" id="categoria">
        <option value="luxo">Luxo</option>
        <option value="SUV">SUV</option>
        <option value="Sedan">Sedan</option>
        <option value="Outro">Outro</option>
    </select>
    <button>Escolher</button>
</form>
<hr>

<?php
$categoria = $_POST['categoria'];
$preço = 0.0;
$carro ='';
/*
if (isset($_POST['categoria'])){
    if($categoria === "luxo"){
        $carro = 'Mercedes';
        $preço = 250000;
    } elseif($categoria === "SUV"){
        $carro ="Renegade";
        $preço = 80000;
    } elseif ($categoria === "Sedan"){
        $carro = "Etios";
        $preço = 55000;
    } else {
        $carro = 'Mobi';
        $preço = 33000;
    }
    
    $preçoFormatado = number_format($preço, 2, ',', '.');
    echo "Carro: $carro <br> Preço: R$ $preçoFormatado.";
} */

switch (strtoupper($categoria)){
    case 'LUXO':
        $carro = 'Mercedes';
        $preço = 250000;
        break;
    
    case 'SUV':
        $carro ="Renegade";
        $preço = 80000;
        break;
    
    case 'SEDAN':
        $carro = "Etios";
        $preço = 55000;
        break;
    
    case 'OUTRO':
        $carro = 'Mobi';
        $preço = 33000;
        break;
    
    default :
        $carro = '';
        $preço = '';
        break;
    
}

$preçoFormatado = number_format($preço, 2, ',', '.');
echo "Carro: $carro <br> Preço: R$ $preçoFormatado.";

?>

<style>
    button, select {
        font-size: 1.4rem;
    }
</style>