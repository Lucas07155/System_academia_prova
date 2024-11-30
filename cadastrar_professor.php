     <!-- Desenvolvido por Lucas De Carvalho Praxedes -->
 <!-- DATA 22/10/2024-->
 <!-- Professor: Luís Alberto Pires de Oliveira -->
   
 <!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar professor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo_cds_prf.css">

</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Cadastro de Professor - Academia Super Fit</h1>
        <?php if (isset($_GET['sucesso'])): ?>
            <div class="alert alert-success"><?php echo $_GET['sucesso']; ?></div>
        <?php elseif (isset($_GET['erro'])): ?>
            <div class="alert alert-danger"><?php echo $_GET['erro']; ?></div>
        <?php endif; ?>
        <form action="processar_cadastro_professor.php" method="POST">
        <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Digite seu CPF" required>
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
            <label for="especialidade">Especialidade</label>
            <select id="especialidade" name="especialidade" required>
                <option value="" disabled selected>Selecione sua especialidade</option>
                <option value="musculacao">Musculação</option>
                <option value="pilates">Pilates</option>
                <option value="yoga">Yoga</option>
                <option value="zumba">Zumba</option>
                <option value="crossfit">CrossFit</option>
            </select>
        </div>
        <div class="form-group">
            <label for="horarios-disponiveis">Horários disponíveis</label>
            <select id="horarios-disponiveis" name="horarios_disponiveis" required>
                <option value="" disabled selected>Selecione o horário</option>
                <option value="manha">Manhã</option>
                <option value="tarde">Tarde</option>
                <option value="noite">Noite</option>
            </select>
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