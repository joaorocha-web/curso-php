<?php 
session_start();
print_r($_SESSION);

$_SESSION['email'] = 'gabrielalterado@email.com'
?>

<p>
    <strong>Nome:</strong><?= $_SESSION['nome']?>
<br>
    <strong>Email:</strong><?= $_SESSION['email']?>
</p>
<p><a href="basico_sessao.php">Voltar</a></p>
<p><a href="basico_sessao_limpar.php">Limpar</a></p>


