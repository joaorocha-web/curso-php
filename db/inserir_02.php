<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<div class="titulo">Inserir Registros #2</div>


<h2>Cadastro</h2>

<?php 
    if(count($_POST)>0){
        $dados = $_POST;
        $erros=[];
        if(trim($dados ['nome'])=== ''){
            $erros['nome'] = 'Nome é obrigatório.';
        }
        if(isset($dados ['nascimento'])){
            $data = DateTime::createFromFormat('d/m/Y', $dados['nascimento']);
            if(!$data){
                 $erros['nascimento'] ='A data deve estar no formato dd/mm/aaaa ';
            }
        }
        if(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)){
            $erros['email'] = 'E-mail inválido.';
        }
        if(filter_var($dados['site'], FILTER_VALIDATE_URL)){
            $erros['site'] = 'Url inválida.';
        }

        if(count($erros) == 0){
            require_once "conexao.php";
            $sql = "INSERT INTO cadastro (nome, nascimento, email, site , filhos , salario) VALUES(?, ?, ?, ?, ?, ?)";

            $conexao= novaConexao();
            $stmt = $conexao->prepare($sql);

            $params = [
                $dados['nome'],
                $data ? $data->format('Y-m-d') : null,
                $dados['email'],
                $dados['site'],
                $dados['filhos'],
                $dados['salario']
            ];

            $stmt->bind_param("ssssid", ...$params);
            

            if($stmt->execute()){
                unset($dados);

            }

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
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="<?= $dados['nome'] ?>">

        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control" name="nascimento" id="nascimento" placeholder="Nascimento" value="<?= $dados['nascimento'] ?>">

        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" value="<?= $dados['email'] ?>">

        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control" name="site" id="site" placeholder="Site" value="<?= $dados['site'] ?>">

        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtd de Filhos</label>
            <input type="text" class="form-control" name="filhos" id="filhos" placeholder="Qtd de Filhos" value="<?= $dados['filhos'] ?>">

        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control" name="salario" id="salario" placeholder="Salário" value="<?= $dados['salario'] ?>">

        </div>
    </div>
    <button class="btn btn-primary ">Enviar</button>
</form>