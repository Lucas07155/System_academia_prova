<?php
//Aqui vai efetuar a exclusão do cadastro de aluno
require '../conexao.php';
$id = $_POST['id'];

$sql = $pdo->prepare("DELETE FROM aluno WHERE id_aluno = :id");
$sql->bindValue(':id', $id);
$sql->execute();

header("Location:lista_alunos.php");
exit;
?>
