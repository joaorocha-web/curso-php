<div class="titulo">Desafio Operadores Lógicos</div>

<!-- Dois trabalhos -> terça e quinta!
 - se os dois trabalhos derem certo -> Tv 50' e sorvete
 - se apenas um der certo -> Tv 32' e sorvete
 - se nenhum der certo -> Fica em casa e mais saudável -->

 <form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (terça)</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta)</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
 </form>

 <style>
    button , select{
        font-size: 1.5rem;
    }
 </style>

 <?php
if (isset($_Post ['t1']) || isset($_POST['t2'])){
    if (!!$_POST ['t1'] == true && !!$_POST ['t2'] == true){
        echo '<br> No final de semana iremos comprar uma Tv 50 e tomaremos sorvete.';
    } elseif(!!$_POST ['t1'] == true xor !!$_POST ['t2'] == true) {
        echo '<br> No final de semana iremos comprar uma Tv 32 e tomaremos sorvete.';
    } else {
         echo '<br> No final de semana iremos ficar em casa e assistir um filme no pc.';
    } 
}

 ?>