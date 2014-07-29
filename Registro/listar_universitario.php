<?php
require_once '../connect.php';

$row = pull('registros', 'id', $conn, $_GET['id'] );

include_once '../private/header.php';
include_once '../private/menu.php';
?>

<title>Secundarista</title>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = pg_fetch_object($res)) : ?>
            <tr>
                <td><?= $row->id; ?></td>
                <td><?= $row->name; ?></td>
                <td><?= $row->tipo; ?></td>
                <td><a href="editar_nome.php?id=<?= $row->id; ?>&name=<?= $row->name; ?>"><i class="glyphicon glyphicon-pencil"></i>
                    </a>
                </td>
                <td><a href="deletar_estud.php?id=<?= $row->id; ?>"
                       onclick="return confirm('Deseja Realmente Excluir?')"><i class="glyphicon glyphicon-trash danger"></i></a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<a href="inserir.php"><button class="btn btn-success " type="submit">Inserir Novo <i class="glyphicon glyphicon-ok"></i> </button ></a>

<?php include_once '../private/footer.php'; ?>

