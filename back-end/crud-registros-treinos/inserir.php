<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../CSS/style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
</head>
<body>

<?php
require "conexao.php"; // Conexão com o banco de dados (PDO)

// Dados recebidos do formulário
$data_treino = $_POST['data_treino'];
$tipo_treino = $_POST['tipo_treino'];
$duracao = $_POST['duracao'];
$intensidade = $_POST['intensidade'];
$observacoes = $_POST['observacoes'];

try {
    // Preparando a query para inserir os dados
    $sql = "INSERT INTO treino (data_treino, tipo_treino, duracao, intensidade, observacoes) 
            VALUES (:data_treino, :tipo_treino, :duracao, :intensidade, :observacoes)";

    // Preparar a consulta com PDO
    $stmt = $pdo->prepare($sql);

    // Vinculando os parâmetros
    $stmt->bindParam(':data_treino', $data_treino);
    $stmt->bindParam(':tipo_treino', $tipo_treino);
    $stmt->bindParam(':duracao', $duracao, PDO::PARAM_INT);
    $stmt->bindParam(':intensidade', $intensidade);
    $stmt->bindParam(':observacoes', $observacoes);

    // Executando a query
    if ($stmt->execute()) {
        // Redireciona para 'historicotreino.php' com mensagem de sucesso
        header("Location: ../../front-end/area_do_aluno/historicotreinos.html?sucesso=" . urlencode("Treino registrado com sucesso!"));
        exit;
    } else {
        // Redireciona para 'historicotreino.php' com mensagem de erro
        header("Location: ../../front-end/area_do_aluno/historicotreinos.php?erro=" . urlencode("Erro ao registrar treino."));
        exit;
    }

} catch (PDOException $e) {
    // Caso ocorra um erro, redireciona para 'historicotreino.php' com mensagem de erro
    header("Location: ../../front-end/area_do_aluno/historicotreinos.php?erro=" . urlencode("Erro ao registrar treino: " . $e->getMessage()));
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section> </section>
    <a href='index.php'>Voltar</a>
</body>
</html>
