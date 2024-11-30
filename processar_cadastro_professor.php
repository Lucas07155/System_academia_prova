<?php 
require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $especialidade = $_POST['especialidade'];
    $horarios_disponiveis = $_POST['horarios_disponiveis'];
    $sexo = $_POST['sexo'];

   
    $sql = $pdo->prepare("
        INSERT INTO professores (cpf, nome, data_nascimento, email, telefone, especialidade, horarios_disponiveis, sexo) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
    ");

    if ($sql->execute([$cpf, $nome, $data_nascimento, $email, $telefone, $especialidade, $horarios_disponiveis, $sexo])) {
        header("Location: cadastrar_professor.php?sucesso=" . urlencode("Professor cadastrado com sucesso!"));
        exit;
    } else {
        header("Location: cadastrar_professor.php?erro=" . urlencode("Erro ao cadastrar professor."));
        exit;
    }
}
?>