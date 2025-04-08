<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string', '<br>';

var_dump('Eu também')
?>

<p>Nesse caso o 'var_dump' está calculando o tamanho da string levando em consideração o acento.</p>

<h1>Concatenação</h1>
<?php
// Concatenação
echo 'Nós concatenamos' . ' strings utilizando '. "<strong> (.) </strong>"

?>

<h1>Outras propriedades:
</h1>

<?php
print 'Ao invés de usar "echo" podemos usar "print".'

?>

<h1>Algumas Funções:</h1>

<?php

print '<br>'. strtoupper ('maiusculo') . '- strtoupper';
print '<br>'. strtolower ('MiNusculo') . '- strtolower';
print '<br>'. ucfirst ( 'primeira letra maiuscula') . '- ucfirst';
print '<br>'. ucwords ( 'primeira letra de todas palavras maiuscula') . '- ucwords';
print '<br> Para calcular a quantidade de letras usamos - "strlen" e para que a contagem não leve em conta os acentos usamos - "mb_srtlen".  ' . mb_strlen('Para calcular a quantidade de letras usamos - "strlen" e para que a contagem não leve em conta os acentos usamos - "mb_srtlen"');
echo '<br>' . 'Para pegarmos apenas uma parte da string usamos "substr".  (' . substr('Para pegarmos apenas uma parte da string', 4, 16) .')';
echo '<br> Para substituirmos uma palavra por outra dentro de uma string usamos - "str_replace". <br> O exemplo que irei dar é substituir a palavra "Amor" pela palavra "Paixão". ' . str_replace('amor', 'paixão', 'Eu não sei se é amor ou paixão.')

?>