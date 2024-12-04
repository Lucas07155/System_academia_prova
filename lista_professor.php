<?php 
require 'conexao.php';

$sql = $pdo->prepare("SELECT * FROM professores");
$sql->execute();
$lista = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Professores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Lista de Professores</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>CPF</th>
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Especialidade</th>
                        <th>Horários Disponíveis</th>
                        <th>Sexo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($lista as $professor): ?>
                        <tr>
                            <td><?php echo $professor['id_professor']; ?></td>
                            <td><?php echo $professor['cpf']; ?></td>
                            <td><?php echo $professor['nome']; ?></td>
                            <td><?php echo $professor['data_nascimento']; ?></td>
                            <td><?php echo $professor['email']; ?></td>
                            <td><?php echo $professor['telefone']; ?></td>
                            <td><?php echo $professor['especialidade']; ?></td>
                            <td><?php echo $professor['horarios_disponiveis']; ?></td>
                            <td><?php echo $professor['sexo']; ?></td>
                            <td>
                                <a href="editar_professor.php?id=<?php echo $professor['id_professor']; ?>" class="btn btn-sm btn-danger">Editar</a><br><br>
                                <a href="excluir_professor.php?id=<?php echo $professor['id_professor']; ?>" class="btn btn-sm btn-danger">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="text-right mt-3">
            <a href="cadastrar_professor.php" class="btn btn-danger">Cadastrar Novo Professor</a>
        </div>
    </div>
</body>
</html>
