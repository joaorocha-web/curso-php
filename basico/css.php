<div gradiente class="titulo">Integração CSS</div>
<h1 center>
    <?php
        echo 'Olá Mundo'
    ?>
</h1>

<label for="icor">Escolha uma cor</label>
<input type="text" name="cor" id="icor" placeholder="ex: #289675">
<input type="button" value="Escolher" onclick="alterarCor()" id="botao">


<div id="exemplo"></div>

<p>Utilizei multiplicação e soma dentro de php para definir o nível de blur da sombra. </p>

<p>obs: usei JavaScript só pra brincar &#128514;</p>

<script>
    
    let input = document.getElementById('icor')
    input.addEventListener ('keypress', function(event){ 
        if( event.key === 'Enter'){
        document.getElementById('botao').click()
    }});
   
    
    function alterarCor(){
        let cor = document.getElementById('icor').value
        let bola = document.getElementById('exemplo')
        bola.style.background = (cor)
    }

</script>
<style>
    [gradiente] {
        background: linear-gradient(to right,rgb(154, 95, 255),rgb(255, 0, 166),rgb(255, 174, 0));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    [center]{
        display: flex;
        justify-content: center;
    }

    div#exemplo{
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background-color: blueviolet;
        margin: 50px auto;
        box-shadow: 1px 2px <?= 2 * 13 - 8?>px black;
    }

</style>