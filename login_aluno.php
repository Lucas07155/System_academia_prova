<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aluno da Academia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo_login_adm.css">
</head>
<body>
<div class="login-container">
    <h1>Login</h1>
    <p>Se você é membro da super fit, insira seus dados:</p>
    <form action="areaaluno.php">
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" placeholder="E-mail, CPF ou nome de usuário" required>
      </div>
      <div class="form-group">
        <label for="password">Senha:</label>
        <input type="password" id="password" placeholder="Senha" required>
      </div>
      <div class="form-group">
        <input type="checkbox" id="remember">
        <label for="remember" class="remember-label">Lembrar-me</label>
      </div>
      <button type="submit" class="btn-submit">Prosseguir</button>
    </form>
    <div class="form-links">
      <p>
        Esqueceu sua senha? <a href="#">Clique aqui para redefinir</a>.
      </p>
      <p>
        Ainda não tem conta? <a href="cadastrar_aluno.php">Cadastre-se</a>.
      </p>
    </div>
  </div>
</body>
</html>

 