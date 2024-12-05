<?php 
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if (empty($usuario) || empty($senha)) {
        header("Location: login_adm.php?erro=" . urlencode("Por favor, preencha todos os campos!"));
        exit;
    }

    $sql = $pdo->prepare("SELECT * FROM administrador WHERE usuario = :usuario AND senha = :senha");
    $sql->bindValue(':usuario', $usuario);
    $sql->bindValue(':senha', $senha); 
    $sql->execute();

    if ($sql->rowCount() > 0) {
        header("Location: area_adm.php");
        exit;
    } else {
        header("Location: login_adm.php?erro=" . urlencode("Usuário ou senha incorretos, tente novamente!"));
        exit;
    }
} else {
    header("Location: login_adm.php?erro=" . urlencode("Acesso inválido!"));
    exit;
}
?>
