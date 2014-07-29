<?php
include_once './connect.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

if (isset($_POST['login']) && isset($_POST['senha'])) {
    $stmt = $conn->prepare(" SELECT * FROM users WHERE login = :login AND senha = :senha ");
    $stmt->bindValue(':login', $login, PDO::PARAM_STR);
    $stmt->bindValue(':senha', md5($senha), PDO::PARAM_STR);
    $stmt->execute();

    session_start();

    $row = $stmt->fetch(PDO::FETCH_OBJ);

    $_SESSION['login'] = $row->login;
    $_SESSION['senha'] = $row->senha;
    $_SESSION['permissao'] = $row->permissao;
    
    $_SESSION['logado'] = true;

    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="image/favicon.ico">

        <!--Bootstrap core CSS--> 
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="awesome/css/font-awesome.css" rel="stylesheet">
        <link href="awesome/scss/" rel="stylesheet">

        <!--Custom styles for this template--> 
        <link href="css/jumbotron-narrow.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>  

    </head>

    <title>Login</title>

    <div class="container">

        <form method="post">

            <h2>SICAES - Sistema de Cadastro de Estudantes</h2>

            <h4 class="form-signin-heading"><i class="glyphicon glyphicon-log-in"></i> Login</h4>

            <input type="email" name="login" class="form-control" placeholder="Email" required autofocus><br/>
            <input type="password" name="senha" class="form-control" placeholder="Senha" required>
            <br />
            <label><input type="checkbox" value="remember-me"> Lembrar senha <br /></label>
            <br />
            <button class="btn btn-success glyphicon glyphicon-user" type="submit">Entrar</button >

            <ul class="list-unstyled"><br/>
                <li><a href="#"onclick="return confirm('Entre em contato com rog_reg@hotmail.com\n\npara criar uma nova conta.')">Criar uma conta</a></li>
                <li><a href="#"onclick="return confirm('Entre em contato com rog_reg@hotmail.com\n\npara redefinir seu login de usuário.')">Esqueceu seu usuário?</a></li>
                <li><a href="#"onclick="return confirm('Entre em contato com rog_reg@hotmail.com\n\npara alterar sua senha.')">Esqueceu sua senha?</a></li>
            </ul>
        </form>
        <div class="footer">
            <p>&copy; URES-RR 2014</p>
        </div>
    </div>
