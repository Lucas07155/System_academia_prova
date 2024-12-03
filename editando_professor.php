<?php
require 'conexao.php';

$id = $_POST['id'];
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$especialidade = $_POST['especialidade'];
$horarios_disponiveis = $_POST['horarios_disponiveis'];
$sexo = $_POST['sexo'];

$sql = $pdo->prepare("UPDATE professores SET 
    cpf = :cpf, 
    nome = :nome, 
    data_nascimento = :data_nascimento, 
    email = :email, 
    telefone = :telefone, 
    especialidade = :especialidade, 
    horarios_disponiveis = :horarios_disponiveis, 
    sexo = :sexo 
    WHERE id_professor = :id");

$sql->bindValue(':cpf', $cpf);
$sql->bindValue(':nome', $nome);
$sql->bindValue(':data_nascimento', $data_nascimento);
$sql->bindValue(':email', $email);
$sql->bindValue(':telefone', $telefone);
$sql->bindValue(':especialidade', $especialidade);
$sql->bindValue(':horarios_disponiveis', $horarios_disponiveis);
$sql->bindValue(':sexo', $sexo);
$sql->bindValue(':id', $id);
$sql->execute();

header("Location: lista_professores.php");
exit;
?>
