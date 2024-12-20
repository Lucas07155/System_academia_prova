<?php
require '../conexao.php';
//Esse codigo vai da insert no banco de dados MySql na tabela 'aluno'
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
        header("Location: ../../../front-end/area_do_adm/cadastrar_aluno.html?sucesso=" . urlencode("Aluno cadastrado com sucesso!"));
        exit;
    } else {
        header("Location: ../../../front-end/area_do_adm/cadastrar_aluno.html?erro=" . urlencode("Erro ao cadastrar o aluno. Verifique os dados e tente novamente."));
        exit;
    }
}
?>