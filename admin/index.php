<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Biblioteca</title>
    <!-- Adicione o link do Bootstrap 5 via CDN -->




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        :root {
            --bs-primary-rgb: 247, 148, 30;
            --bs-secondary-rgb: 0, 74, 141;
            /* Nova cor primária */
        }
    </style>

</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">Logo Biblioteca</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Emprestimos</a>
                    <a class="nav-link" href="#">Livros</a>
                    <a class="nav-link" href="#">Alunos</a>
                    <a class="nav-link" href="/admin/usuarios">Usuário</a>
                </div>

                <div class="ms-auto">
                    <a href="#" class="text-white btn btn-secondary">Sair</a>
                </div>

            </div>
        </div>
    </nav>

    <!-- Conteúdo principal -->
    <main class="container mt-4">
        <h2 class="mb-4">Página Inicial</h2>
        <p>Bem-vindo ao Sistema Biblioteca.</p>
    </main>

    <!-- Rodapé -->
    <footer class="text-center p-2 mt-auto bg-secondary text-white">
        Todos os direitos são reservados.
    </footer>

    <!-- Adicione os scripts do Bootstrap 5 via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>