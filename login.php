<?php
require_once './classes/Connect.php';
require_once './classes/Login.php';

if (isset($_POST['login']) && isset($_POST['senha'])) {

    $login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_MAGIC_QUOTES); # "magic_quotes".
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_MAGIC_QUOTES); # pesquisar sobre addslashes().

    $l = new Login;
    $l->setLogin($login);
    $l->setSenha($senha);

    if ($l->logar()):
        header("location: index.php");
    else:
        header("location: login.php");
    endif;
}

include_once './private/header.php';
?>

<title>Login</title>

<form method="post">

    <h2>SICAES - Sistema de Cadastro de Estudantes</h2>

    <h4 class="form-signin-heading"><i class="glyphicon glyphicon-log-in"></i> Login</h4>

    <input type="email" name="login" class="form-control" placeholder="Email" required autofocus><br/>
    <input type="password" name="senha" class="form-control" placeholder="Senha" required>
    <br />
    <label><input type="checkbox" value="remember-me"> Lembrar senha <br /></label>
    <br />
    <button class="btn btn-success glyphicon glyphicon-user">Entrar</button >

    <ul class="list-unstyled"><br/>
        <li><a href="#"onclick="return confirm('Entre em contato com rog_reg@hotmail.com\n\npara criar uma nova conta.')">Criar uma conta</a></li>
        <li><a href="#"onclick="return confirm('Entre em contato com rog_reg@hotmail.com\n\npara redefinir seu login de usuário.')">Esqueceu seu usuário?</a></li>
        <li><a href="#"onclick="return confirm('Entre em contato com rog_reg@hotmail.com\n\npara alterar sua senha.')">Esqueceu sua senha?</a></li>
    </ul>
</form>

<?php

include_once './private/footer.php';
