<?php 
   session_start();
   if ($_COOKIE['usuario']){
      $_SESSION['usuario']= $_COOKIE['usuario'];
   }
   if(!$_SESSION['usuario']){
      header('location: login.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/css/estilo.css?v=2">
    <title>Curso PHP</title>
</head>
<body>
   <header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Índice dos exercícios</h2>
   </header> 
   <nav class="navegacao">
      <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
      <a href="logout.php">Sair</a>
   </nav>
   <main class="principal">
    <div class="conteudo">
       <?= require_once('menu.php')?>
    </div>
   </main>
   <footer class="rodape">
    COD3R & Alunos <?= date('Y')?> &COPY;
   </footer>
</body>
</html>