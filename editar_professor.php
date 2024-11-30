<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Professor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Editar Professor</h1>
        <?php 
            require 'conexao.php';
            
            $id = $_REQUEST["id"];
            $dados = [];

            $sql = $pdo->prepare("SELECT * FROM professores WHERE id_professor = :id");
            $sql->bindValue(":id", $id);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                $dados = $sql->fetch(PDO::FETCH_ASSOC);
            } else {
                header("Location: lista_professores.php");
                exit;
            }
        ?>

        <form action="editando_professor.php" method="POST">
            <input type="hidden" name="id" value="<?= $dados['id_professor']; ?>">

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
                <label for="especialidade">Especialidade</label>
                <select name="especialidade" class="form-control" required>
                    <option value="musculacao" <?= $dados['especialidade'] == 'musculacao' ? 'selected' : ''; ?>>Musculação</option>
                    <option value="pilates" <?= $dados['especialidade'] == 'pilates' ? 'selected' : ''; ?>>Pilates</option>
                    <option value="yoga" <?= $dados['especialidade'] == 'yoga' ? 'selected' : ''; ?>>Yoga</option>
                    <option value="zumba" <?= $dados['especialidade'] == 'zumba' ? 'selected' : ''; ?>>Zumba</option>
                    <option value="crossfit" <?= $dados['especialidade'] == 'crossfit' ? 'selected' : ''; ?>>Crossfit</option>
                </select>
            </div>

            <div class="form-group">
                <label for="horarios_disponiveis">Horários Disponíveis</label>
                <select name="horarios_disponiveis" class="form-control" required>
                    <option value="manha" <?= $dados['horarios_disponiveis'] == 'manha' ? 'selected' : ''; ?>>Manhã</option>
                    <option value="tarde" <?= $dados['horarios_disponiveis'] == 'tarde' ? 'selected' : ''; ?>>Tarde</option>
                    <option value="noite" <?= $dados['horarios_disponiveis'] == 'noite' ? 'selected' : ''; ?>>Noite</option>
                </select>
            </div>

            <div class="form-group">
                <label for="sexo">Sexo</label>
                <select name="sexo" class="form-control" required>
                    <option value="masculino" <?= $dados['sexo'] == 'masculino' ? 'selected' : ''; ?>>Masculino</option>
                    <option value="feminino" <?= $dados['sexo'] == 'feminino' ? 'selected' : ''; ?>>Feminino</option>
                    <option value="outro" <?= $dados['sexo'] == 'outro' ? 'selected' : ''; ?>>Outro</option>
                </select>
            </div>

            <button type="submit" class="btn btn-danger">Salvar Alterações</button>
        </form>
        <br>
        <a href="lista_professores.php" class="btn btn-danger">Voltar para Lista</a>
    </div>
</body>
</html>
