<?php
require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $nivel = $_POST['nivel'];
    $endereco = $_POST['endereco'];
    $sexo = $_POST['sexo'];

    $sql = $pdo->prepare("
        INSERT INTO aluno (cpf, nome, data_nascimento, email, telefone, nivel, endereco, sexo) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
    ");

    if ($sql->execute([$cpf, $nome, $data_nascimento, $email, $telefone, $nivel, $endereco, $sexo])) {
        header("Location: cadastrar_aluno.php?sucesso=" . urlencode("Aluno cadastrado com sucesso!"));
        exit;
    } else {
        header("Location: cadastrar_aluno.php?erro=" . urlencode("Erro ao cadastrar o aluno. Verifique os dados e tente novamente."));
        exit;
    }
}
?>