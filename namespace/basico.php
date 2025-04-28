<?php namespace contexto; ?>
<div class="titulo">Exemplo Básico</div>

<?php
echo __NAMESPACE__ . '<br>';
const CONSTANTE1 = 123;
define ('CONSTANTE2', 234);
define ('contexto\CONSTANTE2', 1234);
define (__NAMESPACE__ . '\CONSTANTE3', 345);
define ('outro_contexto\CONSTANTE4', 456);
echo CONSTANTE1 . '<br>';
echo CONSTANTE2 . '<br>';
echo \CONSTANTE2 . '<br>'; // acessando a cnstante que está na raiz
echo CONSTANTE3 . '<br>';
