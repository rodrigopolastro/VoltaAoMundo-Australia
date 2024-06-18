<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastra-se</title>
</head>

<body>
    <div class="container">
        <div class="vh-100  d-flex justify-content-center align-items-center">
            <div class="w-50 bg-secondary p-5 rounded-3">
                <h1>Cadastre-se</h1>
                <form action="../../backend/users_actions.php" method="post" id="login-form">
                    <input type="hidden" name="action" value="sign_up">
                    <div class="mb-3">
                        <label for="txtFirstName" class="form-label">Nome</label>
                        <input type="text" id="txtFirstName" name="first_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtLastName" class="form-label">Sobrenome</label>
                        <input type="text" id="txtLastName" name="last_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtEmail" class="form-label">E-mail</label>
                        <input type="email" id="txtEmail" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtPassword" class="form-label">Senha</label>
                        <input type="password" id="txtPassword" name="password" class="form-control">
                    </div>
                    <input type="submit" value="Cadastrar" class="btn btn-success">
                </form>
                <?php if (isset($_GET['sign_up_status']) && $_GET['sign_up_status'] == 'already_registered') : ?>
                    <p id="errorMessage">Usuário já cadastrado!</p>
                <?php endif; ?>
                <p>Já possui uma conta? <a href="./login.php">Entre</a></p>
            </div>
        </div>
    </div>
</body>

</html>