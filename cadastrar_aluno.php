    <!-- Desenvolvido por Lucas De Carvalho Praxedes -->
 <!-- DATA 22/10/2024-->
 <!-- Professor: Luís Alberto Pires de Oliveira -->
   
 <!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar ALUNO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo_cds_aluno.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4"> Cadastro de Aluno - Academia Super Fit:</h1>
        <?php if (isset($_GET['sucesso'])): ?>
            <div class="alert alert-success"><?php echo $_GET['sucesso']; ?></div>
        <?php elseif (isset($_GET['erro'])): ?>
            <div class="alert alert-danger"><?php echo $_GET['erro']; ?></div>
        <?php endif; ?>
        <form action="processar_cadastro_aluno.php" method="POST">
        <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Digite seu documento" required>
            </div>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome completo" required>
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail completo" required>
            </div>
            <div class="form-group">
                <label for="telefone">DDD + Celular</label>
                <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Telefone" required>
            </div>
            <div class="form-group">
            <label for="nivel">Nível de Experiência</label>
            <select id="nivel" name="nivel" required>
                <option value="" disabled selected>Selecione seu nível</option>
                <option value="iniciante">Iniciante</option>
                <option value="intermediario">Intermediário</option>
                <option value="avancado">Avançado</option>
                <option value="expert">Expert</option>
            </select>
        </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Endereço" required>
            </div>
            <div class="form-group">
            <label for="sexo">Sexo</label>
        <select id="sexo" name="sexo" required>
            <option value="" disabled selected>Toque para escolher</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
        </select>
        </div>
            <button type="submit" class="btn btn-sm btn-primary">Realizar Cadastro</button>
        </form>
    </div>
</body>
</html>