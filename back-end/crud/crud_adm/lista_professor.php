<?php 
require '../conexao.php';

$sql = $pdo->prepare("SELECT * FROM professores"); //Passando consulta pra variável
$sql->execute(); //Executando a consulta 
$lista = $sql->fetchAll(PDO::FETCH_ASSOC); //Recupera as linhas de consulta retornadas, e bota em um array associativo
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Professores</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="../../../CSS/estilo_lista_professor.css">

</head>
<body>
<header class="bg-primary text-white text-center py-3">
        <h1>Academia Super Fit</h1>
    </header>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Lista de Professores</h2>
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
                    <?php foreach($lista as $professor): ?> <!-- Imprime dados dos professores -->
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
                                <a href="editar_professor.php?id=<?php echo $professor['id_professor']; ?>" class="btn btn-sm btn-primary">Editar</a><br><br>
                                <a href="excluir_professor.php?id=<?php echo $professor['id_professor']; ?>" class="btn btn-sm btn-primary">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="text-right mt-3">
             <a href="../../../front-end/area_do_adm/cadastrar_professor.php" class="btn btn-primary">Cadastrar Novo Professor</a>
             <a href="../../../front-end/area_do_adm/area_adm.html" class="btn btn-primary">Voltar para a página anterior</a>
        </div>
    </div>
</body>
</html>
