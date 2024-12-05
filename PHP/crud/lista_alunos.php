<?php 
require 'conexao.php';

$sql = $pdo->prepare("SELECT * FROM aluno");
$sql->execute();
$lista = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../CSS/estilo_lista_aluno.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Lista de Alunos</h1>
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
                        <th>Nível</th>
                        <th>Endereço</th>
                        <th>Sexo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($lista as $aluno): ?>
                        <tr>
                            <td><?php echo $aluno['id_aluno']; ?></td>
                            <td><?php echo $aluno['cpf']; ?></td>
                            <td><?php echo $aluno['nome']; ?></td>
                            <td><?php echo $aluno['data_nascimento']; ?></td>
                            <td><?php echo $aluno['email']; ?></td>
                            <td><?php echo $aluno['telefone']; ?></td>
                            <td><?php echo $aluno['nivel']; ?></td>
                            <td><?php echo $aluno['endereco']; ?></td>
                            <td><?php echo $aluno['sexo']; ?></td>
                            <td>
                                <a href="editar_aluno.php?id=<?php echo $aluno['id_aluno']; ?>" class="btn btn-sm btn-danger">Editar</a>
                                <a href="excluir_aluno.php?id=<?php echo $aluno['id_aluno']; ?>" class="btn btn-sm btn-danger">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="text-right mt-3">
            <a href="../front-end/cadastrar_aluno.php" class="btn btn-primary">Cadastrar Novo Aluno</a>
            <a href="../front-end/area_adm.php" class="btn btn-primary">Voltar para o menu principal</a>
        </div>
    </div>
</body>
</html>