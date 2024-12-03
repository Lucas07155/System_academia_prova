<?php
require 'conexao.php';
$id = $_POST['id'];

$sql = $pdo->prepare("DELETE FROM professores WHERE id_professor = :id");
$sql->bindValue(':id', $id);
$sql->execute();

header("Location: lista_professores.php");
exit;
?>
