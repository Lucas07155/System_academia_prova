<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Administrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../CSS/estilo_login_adm.css">
</head>
<body>
    <div class="login-container container mt-5">
        <h1 class="text-center">Login do Administrador</h1>
        <p class="text-center">Olá administrador, seja bem-vindo de volta:</p>

        <?php if (isset($_GET['erro'])): ?>
            <div class="alert alert-danger text-center">
                <?php echo htmlspecialchars($_GET['erro']); ?>
            </div>
        <?php endif; ?>

        <form action="../crud/verificar_login_adm.php" method="POST" class="mt-4">
            <div class="form-group">
                <label for="usuario">E-mail:</label>
                <input type="text" id="usuario" name="usuario" placeholder="Digite seu usuário" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="senha" placeholder="Digite sua senha" class="form-control" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" id="remember" class="form-check-input">
                <label for="remember" class="form-check-label">Lembrar-me</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Prosseguir</button>
        </form>

        <div class="form-links text-center mt-3">
        </div>
    </div>
</body>
</html>
