<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
   <header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Visualização do Exercício</h2>
   </header> 
   <nav class="navegacao">
    <a href="#" class="verde">Sem formatação</a>
    <a href="index.php" class="vermelho">Voltar</a>
   </nav>
   <main class="principal">
    <div class="conteudo">
        <?php
        // include($_GET ['dir'] . "/" . $_GET ['file'] . ".php");
        include("{$_GET ['dir']}/{$_GET ['file']}.php");
        ?>
    </div>
   </main>
   <footer class="rodape">
    COD3R & Alunos <?= date('Y')?> &COPY;
   </footer>
</body>
</html>