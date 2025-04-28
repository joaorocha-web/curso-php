<?php namespace contexto; ?>
<div class="titulo">Exemplo Básico</div>

<?php
echo __NAMESPACE__ . '<br>';
const CONSTANTE1 = 123;
define ('contexto\CONSTANTE2', 234);
define (__NAMESPACE__ . '\CONSTANTE3', 345);
