<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ01F2QQx82M6x0s7ce1m9d1cv02g5sn6u1cfvnL3hR6g2kD1d0cPzDohpGJf" crossorigin="anonymous">
     <link rel="stylesheet" href="../../../CSS/estilo_excluir_professor.css">
 </head>
<body>
        <!-- Aqui vai imprimir os alunos para poder o adm excluir -->
<header class="bg-primary text-white text-center py-3">
        <h1>Academia Super Fit</h1>
    </header>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Excluir Aluno</h2>
        <?php 
            require '../conexao.php';
            $id = $_REQUEST["id"];
            $dados = [];
            $sql = $pdo->prepare("SELECT * FROM aluno WHERE id_aluno = :id");
            $sql->bindValue(":id", $id);
            $sql->execute();
            if ($sql->rowCount() > 0) {
                $dados = $sql->fetch(PDO::FETCH_ASSOC);
            } else {
                header("Location:lista_alunos.php");
                exit;
            }
        ?>
        <h3 class="text-center">Tem certeza que deseja excluir o aluno abaixo?</h3>
        <form action="excluindo_aluno.php" method="POST">
            <input type="hidden" name="id" value="<?= $dados['id_aluno']; ?>">
            <label for="nome">
                Nome <input type="text" class="form-control" name="nome" value="<?= $dados['nome']; ?>" readonly>
            </label>
            <label for="cpf">
                CPF <input type="text" class="form-control" name="cpf" value="<?= $dados['cpf']; ?>" readonly>
            </label>
            <button type="submit" class="btn btn-sm btn-danger mt-3">Excluir Aluno</button>
        </form>
        <br>
        <a href="lista_alunos.php" class="btn btn-sm btn-danger">Voltar para Lista de Alunos</a>
    </div>
</body>
</html>
