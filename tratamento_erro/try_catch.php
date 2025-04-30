<div class="titulo">Try/Catch</div>

<?php 

try{
    echo intdiv(7,0);
}catch(Error $e) {
    echo 'Teve um erro aqui<br><hr>';
}

try{
    throw new Exception("Um erro muito estranho aconteceu") ;
}catch(DivisionByZeroError $e) {
    echo 'Divisão por zero';
}catch(throwable $e){
    echo "Erro encontrado:" . $e->getMessage() . '<br>';
}finally{ 
    echo 'Sempre executado!';
}



?> 