<?php 
require '../conexao.php';

$sql = $pdo->prepare("SELECT * FROM aluno"); //Passando consulta pra variável
$sql->execute(); //Executando a consulta
$lista = $sql->fetchAll(PDO::FETCH_ASSOC); //Recupera as linhas de consulta retornadas, e bota em um array associativo
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
       <link rel="stylesheet" href="../../../CSS/estilo_lista_aluno.css">
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
                    <?php foreach($lista as $aluno): ?> <!-- Imprime dados dos alunos -->
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
                                <a href="editar_aluno.php?id=<?php echo $aluno['id_aluno']; ?>" class="btn btn-sm btn-primary">Editar</a>
                                <br><br><a href="excluir_aluno.php?id=<?php echo $aluno['id_aluno']; ?>" class="btn btn-sm btn-primary">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="text-right mt-3">
            <a href="../../../front-end/area_do_adm/cadastrar_aluno.html" class="btn btn-primary">Cadastrar Novo Aluno</a>
            <a href="../../../front-end/area_do_adm/area_adm.html" class="btn btn-primary">Voltar para a página anterior</a>
        </div>
    </div>
</body>
</html>