<?php
session_start();
$email = $_POST['email'];
$senha = $_POST['senha'];

if ($_POST['email']){
   $usuarios = [
      [
         'nome' => 'Aluno C3der',
         'email' => 'aluno@email.com',
         'senha' => '123456',
      ],
      [
         'nome' => 'Outro Aluno',
         'email' => 'outroaluno@email.com',
         'senha' => '654321',
      ],
      [
         'nome' => 'João Victor',
         'email' => 'jvdofogo@gmail.com',
         'senha' => '1234jesusebom',
      ]

      ];

      foreach($usuarios as $usuario){
         $emailValido = $email === $usuario['email'];
         $senhaValida = $senha === $usuario['senha'];
         if($emailValido && $senhaValida){
            $_SESSION['erros']= null;
            $_SESSION['usuario'] = $usuario['nome'];
            setcookie('usuario', $usuario['nome'], $exp);
            $exp = time() + 60 * 60 * 24 * 30;
            header('location: index.php');
         }
      }
      
      if(!$_SESSION['usuario']){
         $_SESSION['erros']= ['Email/Senha inválido!'];
      }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/css/estilo.css?v=2">
    <link rel="stylesheet" href="recursos/css/login.css?v=2">
    <title>Curso PHP</title>
</head>
<body class="login">
   <header class="cabecalho">
    <h1>Curso PHP</h1>
    <h2>Seja Bem vindo!</h2>
   </header> 

   <main class="principal">
    <div class="conteudo">
       <h3>Identifique-se</h3>
       <?php if($_SESSION['erros']): ?>
         <div class="erros">
            <?php foreach ($_SESSION['erros'] as $erro):?>
               <p><?= $erro ?></p>
            <?php endforeach ?>
         </div>
       <?php endif ?>  
       <form action="#" method="post">
         <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
         </div>
         <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
         </div>
         <button>Entrar</button>
       </form>
    </div>
   </main>
   <footer class="rodape">
    COD3R & Alunos <?= date('Y')?> &COPY;
   </footer>
</body>
</html>

