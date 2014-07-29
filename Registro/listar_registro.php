<?php
include '../private/header.php';
include '../private/menu.php';
?>

<title>Registros</title>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Tipo</th>
            <?php if ($_SESSION['permissao'] == 2): ?>
                <th>Editar</th>
                <th>Excluir</th>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody>

        <?php
        include '../connect.php';
        $query = 'SELECT * FROM registrotipo order by name';
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
                <td><?= $row->name; ?></td>
                <td><?= $row->tipo; ?></td>
                <td> 
                    <?php if ($_SESSION['permissao'] == 2): ?>
                        <a href="editar_registro.php?id=<?= $row->id; ?>">
                            <i class="glyphicon glyphicon-edit"></i>
                        </a>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if ($_SESSION['permissao'] == 2): ?>
                        <a href="deletar_registro.php?id=<?= $row->id; ?>"
                           onclick="return confirm('Deseja Realmente Excluir?')"><i class="glyphicon glyphicon-trash danger"></i>
                        </a> <?php endif; ?>
                </td>
            </tr>
        <?php } ?>

    </tbody>
</table>
<?php if ($_SESSION['permissao'] == 2): ?>
    <a href="inserir_registro.php"><button class="btn btn-success " type="submit">Inserir Novo <i class="glyphicon glyphicon-ok"></i> </button ></a>
<?php endif; ?>

<?php
include_once '../private/footer.php';
