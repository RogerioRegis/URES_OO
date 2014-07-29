<?php

require_once '../connect.php';
require_once '../puxar.php';

$row = pull('tipo', 'id', $conn, $_GET['id']);

$id = $_POST['id'];
$tipo = $_POST['tipo'];

if (isset($_POST['tipo'])) {
    $query = 'INSERT INTO tipo(tipo) VALUES (:tipo)';
    try {
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':tipo', $tipo, PDO::PARAM_STR);
        $stmt->execute();

        header("location: ../Tipo/listar_tipo.php");
    } catch (PDOexception $exp) {
        echo $exp->getMessage();
    }
}

include_once '../header.php';
include_once '../menu.php';
?>

<title>Inserir na Lista</title>

<div class="col-lg-15">
    <form method="POST">
        <label>TIPO: <input name="tipo" /></label>
        <button class="btn btn-success" type="submit">Enviar</button >
        <a href="listar_tipo.php">  <button class="btn btn-default" type="button">Cancelar</button ></a>
    </form> 
    <br />
</div>

<?php

include_once '../footer.php';
