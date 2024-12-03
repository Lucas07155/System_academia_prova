<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">EDITAR ALUNO</h1>
        <?php 
            require 'conexao.php';
            $id = $_REQUEST['id'];
            $dados = []; 
            $sql = $pdo->prepare("SELECT * FROM aluno WHERE id_aluno = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                $dados = $sql->fetch(PDO::FETCH_ASSOC);
            } else {
                header("Location: lista_alunos.php");
                exit;
            }     
        ?>
        <form action="editando_aluno.php" method="POST">
            <input type="hidden" name="id" value="<?= $dados['id_aluno']; ?>">
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" name="cpf" value="<?= $dados['cpf']; ?>" required>
            </div>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" value="<?= $dados['nome']; ?>" required>
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" class="form-control" name="data_nascimento" value="<?= $dados['data_nascimento']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="<?= $dados['email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" value="<?= $dados['telefone']; ?>" required>
            </div>
            <div class="form-group">
                <label for="nivel">Nível</label>
                <select class="form-control" name="nivel" required>
                    <option value="iniciante" <?= $dados['nivel'] == 'iniciante' ? 'selected' : ''; ?>>Iniciante</option>
                    <option value="intermediario" <?= $dados['nivel'] == 'intermediario' ? 'selected' : ''; ?>>Intermediário</option>
                    <option value="avancado" <?= $dados['nivel'] == 'avancado' ? 'selected' : ''; ?>>Avançado</option>
                    <option value="expert" <?= $dados['nivel'] == 'expert' ? 'selected' : ''; ?>>Expert</option>
                </select>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" name="endereco" value="<?= $dados['endereco']; ?>" required>
            </div>
            <div class="form-group">
                <label for="sexo">Sexo</label>
                <select class="form-control" name="sexo" required>
                    <option value="masculino" <?= $dados['sexo'] == 'masculino' ? 'selected' : ''; ?>>Masculino</option>
                    <option value="feminino" <?= $dados['sexo'] == 'feminino' ? 'selected' : ''; ?>>Feminino</option>
                    <option value="outro" <?= $dados['sexo'] == 'outro' ? 'selected' : ''; ?>>Outro</option>
                </select>
            </div>
            <button type="submit" class="btn btn-danger">Editar Aluno</button>
        </form>
        <br>
        <a href="lista_alunos.php" class="btn btn-danger">Voltar para Lista de Alunos</a>
    </div>
</body>
</html>
