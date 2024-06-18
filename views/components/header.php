<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Principais Cidades da Austrália</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/utilities.css">
    <link rel="stylesheet" href="../../assets/css/pages.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark  navbar-expand-md min-vh-10">
            <div class="container">
                <a class="w-50 navbar-brand" href="#">
                    <h3>Austrália</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLinks" aria-controls="navbarLinks" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="w-50 collapse navbar-collapse" id="navbarLinks">
                    <div class="w-100 d-flex justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link " href="../pages/home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../pages/culture.php">Cultura</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../pages/cities.php">Cidades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../pages/places.php">Onde Ir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../pages/statistics.php">Estatísticas</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex">
                    <?php if ($_SESSION['user_type'] == 'admin') : ?>
                        <a href="../pages/admin-page.php" class="btn-btn-primary">Painel de Administrador</a>
                    <?php elseif ($_SESSION['user_type'] == 'user') :  ?>
                        <a href="../pages/my-profile.php" class="btn-btn-primary">Minha Conta</a>
                    <?php endif ?>
                    <form method="POST" action="../../backend/users_actions.php">
                        <input type="hidden" name="action" value="logout">
                        <input type="submit" value="Sair" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>