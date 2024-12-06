<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aluno da Academia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../CSS/estilo_login_adm.css">
</head>
<body>
<div class="login-container">
    <h1>Login</h1>
    <p>Se você é membro da super fit, insira seus dados:</p>
    <form action="areaaluno.php">
      <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Digite seu documento" required>
            </div>
    <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome completo" required>
      </div>
      <div class="form-group">
        <input type="checkbox" id="remember">
        <label for="remember" class="remember-label">Lembrar-me</label>
      </div>
      <button type="submit" class="btn-submit">Prosseguir</button>
    </form>
  </div>
</body>
</html>

 