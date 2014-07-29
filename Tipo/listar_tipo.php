<?php
require_once '../private/header.php';
require_once '../private/menu.php';
?>

<title>Tipo</title>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Tipo</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>

        <?php
        include '../connect.php';

        $query = 'SELECT * FROM tipo order by id';

        try {
            $stmt = $conn->prepare($query);
            $stmt->execute();
        } catch (PDOexception $exp) {
            echo $exp->getMessage();
        }
        while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            ?>
            <tr>
                <td><?= $row->id; ?></td>
                <td><?= $row->tipo; ?></td>
                <td>
                    <a href="editar_tipo.php?id=<?= $row->id; ?>&tipo=<?= $row->tipo; ?>">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                </td>
                <td><a href="deletar_tipo.php?id=<?= $row->id; ?>"onclick="return confirm('Deseja Realmente Excluir?')"><i class="glyphicon glyphicon-trash danger"></i></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<a href="inserir_tipo.php"><button class="btn btn-success " type="submit">Inserir Novo <i class="glyphicon glyphicon-ok"></i> </button ></a>

<?php
include '../private/footer.php';
