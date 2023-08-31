<?php
require $_SERVER["DOCUMENT_ROOT"] . '/controllers/UsuarioController.php';
$controller = new UsuarioController();
$usuarios = $controller->listar();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <!-- Adicione os links do Bootstrap via CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2>Lista de Usuários</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Perfil</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td>
                            <?= $usuario['id_usuario'] ?>
                        </td>
                        <td>
                            <?= $usuario['nome'] ?>
                        </td>
                        <td>
                            <?= $usuario['email'] ?>
                        </td>
                        <td>
                            <?= $usuario['perfil'] ?>
                        </td>
                        <td>
                            <a href="editar.php?id=<?= $usuario['id_usuario'] ?>" class="btn btn-primary">Editar</a>
                            <a href="excluir.php?id=<?= $usuario['id_usuario'] ?>" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="cadastrar.php" class="btn btn-success">Cadastrar Novo Usuário</a>
    </div>

    <!-- Adicione os scripts do Bootstrap via CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>