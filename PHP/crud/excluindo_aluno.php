<?php
require 'conexao.php';
$id = $_POST['id'];

$sql = $pdo->prepare("DELETE FROM aluno WHERE id_aluno = :id");
$sql->bindValue(':id', $id);
$sql->execute();

header("Location: ../front-end/lista_alunos.php");
exit;
?>
