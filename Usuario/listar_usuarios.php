<?php
require_once '../private/header.php';
require_once '../private/menu.php';
?>

<title>Usuários</title>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>

        <?php
        include '../connect.php';
        $query = 'SELECT * FROM users ORDER BY login';
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
                <td><?= $row->login; ?></td>
                <td><?= $row->senha; ?></td>
                <td>
                    <a href="editar_usuario.php?id=<?= $row->id; ?> & login=<?= $row->login; ?> & senha=<?= $row->senha; ?>">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                </td>
                <td><a href="deletar_usuario.php?id=<?= $row->id; ?>"
                       onclick="return confirm('Deseja Realmente Excluir?')"><i class="glyphicon glyphicon-trash danger"></i></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<a href="inserir_usuario.php"><button class="btn btn-success " type="submit">Novo usuário <i class="glyphicon glyphicon-ok"></i> </button ></a>

<?php include_once '../private/footer.php'; ?>