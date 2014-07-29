<?php

require_once '../connect.php';

$email = $_POST['login'];
$senha = md5($_POST['senha']);
$permissao = $_POST['permissao'];

if (isset($_POST['login'])) {
    $query = 'INSERT INTO users(login,senha,permissao) VALUES (:login,:senha,:permissao)';
    try {
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':login', $email, PDO::PARAM_STR);
        $stmt->bindValue(':senha', $senha, PDO::PARAM_STR);
        $stmt->bindValue(':permissao', $permissao, PDO::PARAM_STR);
        $stmt->execute();

        header("location: ../Usuario/listar_usuarios.php");
    } catch (PDOexception $exp) {
        echo $exp->getMessage();
    }
}

include_once '../private/header.php';
include_once "../private/menu.php";
?>

<title>Novo Usuário</title>

<p class="text-info">Formulário de Novo Usuário</p>

<form method="POST">
    <div class="form">
        <input type="email" name="login" class="form-control" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"></label>
        <input type="password" name="senha" class="form-control" placeholder="Senha">
    </div>
    Nível de Acesso: 
    <label><input type="radio" name="permissao" value="2"> Administrador</label> &nbsp;
    <label><input type="radio" name="permissao" value="1"> Visitante</label>
    <br /><br>
    <button class="btn btn-success">Enviar <i class="glyphicon glyphicon-ok"></i></button>
    <a href="listar_usuarios.php"><button class="btn btn-default" type="button">Cancelar</button></a>
</form>
<br />

<?php

include_once '../private/footer.php';
