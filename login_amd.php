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
    <h1>Login do amd</h1>
    <p>Ola amd seja bem-vindo de volta:</p>
    <form>
      <div class="form-group">
        <label for="usuario">E-mail:</label>
        <input type="usuario" id="usuario" placeholder=" nome de usuário" required>
      </div>
      <div class="form-group">
        <label for="password">Senha:</label>
        <input type="password" id="password" placeholder="Senha" required>
      </div>
      <div class="form-group">
        <input type="checkbox" id="remember">
        <label for="remember" class="remember-label">Lembrar-me</label>
      </div>
      <a href="area_adm.php" class="btn-submit">Prosseguir</a>

     </form>
    <div class="form-links">
      <p>
        Esqueceu sua senha? <a href="#">Clique aqui para redefinir</a>.
      </p>
    </div>
  </div>
</body>
</html>

 