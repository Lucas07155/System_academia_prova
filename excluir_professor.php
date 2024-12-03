<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Professor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Excluir Professor</h1>
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
        <h3 class="text-center">Tem certeza que deseja excluir o professor abaixo?</h3>
        <form action="excluindo_professor.php" method="POST">
            <input type="hidden" name="id" value="<?= $dados['id_professor']; ?>">
            <label for="nome">
                Nome <input type="text" class="form-control" name="nome" value="<?= $dados['nome']; ?>" readonly>
            </label>
            <label for="cpf">
                CPF <input type="text" class="form-control" name="cpf" value="<?= $dados['cpf']; ?>" readonly>
            </label>
            <button type="submit" class="btn btn-sm btn-danger mt-3">Excluir Professor</button>
        </form>
        <br>
        <a href="lista_professores.php" class="btn btn-sm btn-danger">Voltar para Lista de Professores</a>
    </div>
</body>
</html>
