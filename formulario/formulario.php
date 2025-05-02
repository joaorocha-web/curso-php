<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<div class="titulo">Formulário</div>

<h2>Cadastro</h2>

<?php 
    if(count($_POST)>0){
        $erros=[];
        if(!filter_input(INPUT_POST, "nome")){
            $erros['nome'] = 'Nome é obrigatório.';
        }
        if(filter_input(INPUT_POST, "nascimento")){
            $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
            if(!$data){
                 $erros['nascimento'] ='A data deve estar no formato dd/mm/aaaa ';
            }
        }
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $erros['email'] = 'E-mail inválido.';
        }
        if(filter_var($_POST['site'], FILTER_VALIDATE_URL)){
            $erros['site'] = 'Url inválida.';
        }
    }
?>

<?php foreach($erros as $erro): ?>
    <div class="alert alert-danger" role="alert">
        <?= $erro ?>
    </div>
<?php endforeach ?>
<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="<?= $_POST['nome'] ?>">

        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control" name="nascimento" id="nascimento" placeholder="Nascimento" value="<?= $_POST['nascimento'] ?>">

        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" value="<?= $_POST['email'] ?>">

        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control" name="site" id="site" placeholder="Site" value="<?= $_POST['site'] ?>">

        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtd de Filhos</label>
            <input type="text" class="form-control" name="filhos" id="filhos" placeholder="Qtd de Filhos" value="<?= $_POST['filhos'] ?>">

        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control" name="salario" id="salario" placeholder="Salário" value="<?= $_POST['salario'] ?>">

        </div>
    </div>
    <button class="btn btn-primary ">Enviar</button>
</form>