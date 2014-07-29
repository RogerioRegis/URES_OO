<?php

require_once '../connect.php';
require_once '../puxar.php';

$row = pull('registros', 'id', $conn, $_GET['id'] );

$id = $_POST['id'];
$name = $_POST['nome'];
$tipo_id = $_POST['tipo_id'];

if (isset($_POST['id']) and isset($_POST['nome']) and isset($_POST['tipo_id'])) {

    $query = 'UPDATE registros SET (name,tipo_id) = (:nome,:tipo_id) WHERE id = :id';

    try {
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':nome', $name, PDO::PARAM_STR);
        $stmt->bindValue(':tipo_id', $tipo_id, PDO::PARAM_STR);
        $stmt->execute();

        header("location: ../Registro/listar_registro.php");
    } catch (PDOexception $exp) {
        echo $exp->getMessage();
    }
}

include_once '../private/header.php';
include_once '../private/menu.php';
?>

<title>Editar Nome</title>

<div class="col-lg-15">
    <form method="POST">
        <input type="hidden" name="id" value="<?= $row->id ?>"
               <label>Novo nome:
            <input name="nome" value="<?= $row->name ?>"/>
            <label class="control-label">
                Tipo: 
                <?php
                $query = 'SELECT * from tipo';
                try {
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                } catch (PDOexception $exp) {
                    echo $exp->getMessage();
                }
                ?>
                <select class="form-control" name="tipo_id">
                    <?php while ($option = $stmt->fetch(PDO::FETCH_OBJ)) : ?>
                        <option value="<?= $option->id; ?>"><?= $option->tipo; ?></option>
                    <?php endwhile; ?>
                </select>
            </label>
            <button class="btn btn-success" type="submit">Salvar</button >
            <a href="../Registro/listar_registro.php"><button class="btn btn-default" type="button">Cancelar</button ></a>
            <hr />
    </form>
</div>

<?php
include_once '../private/footer.php';
