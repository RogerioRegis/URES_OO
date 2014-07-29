<?php

require_once '../connect.php';

$name = $_POST['nome'];
$tipo_id = $_POST['tipo_id'];

if (isset($_POST['nome'])) {
    $query = 'INSERT INTO registros(name,tipo_id) VALUES (:nome,:tipo_id)';
    try {
        $stmt = $conn->prepare($query);
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

<title>Novo Registro</title>

<div class="col-lg-15">
    <form method="post" id="formlogin" name="formlogin" >
        <label>Nome: 
            <input name="nome" />
        </label>
        <label class="control-label">Tipo:        
            <?php
            $query = 'SELECT * from tipo';
            try {
                $read = $conn->prepare($query);
                $read->execute();
            } catch (PDOexception $exp) {
                echo $exp->getMessage();
            }
            ?>
            <select class="form-control" name="tipo_id">
                <?php while ($row = $read->fetch(PDO::FETCH_OBJ)) : ?>
                    <option value="<?= $row->id; ?>"><?= $row->tipo; ?></option>
                <?php endwhile; ?>
            </select>
        </label>
        <button class="btn btn-success" type="submit">Enviar</button >
        <a href="listar_registro.php"><button class="btn btn-default" type="button">Cancelar</button ></a>
    </form>  
    <br />
</div>

<?php
include_once '../private/footer.php';
