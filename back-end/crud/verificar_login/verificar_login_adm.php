<?php 
require '../conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') { //Vai pegar os dados do formulário usando metodo post
    $usuario = $_POST['usuario'] ?? ''; //Passando os dados do formulário para as variáveis
    $senha = $_POST['senha'] ?? '';

    if (empty($usuario) || empty($senha)) { //Verificação caso o usuario não preencheu os campos
        header("Location: ../../../front-end/login_adm.html?erro=" . urlencode("Por favor, preencha todos os campos!"));
        exit;
    }

    $sql = $pdo->prepare("SELECT * FROM administrador WHERE usuario = :usuario AND senha = :senha"); //Passou uma consulta SQL pra variavel $sql
    $sql->bindValue(':usuario', $usuario); //Atribuindo valor da variável aos placeholders 
    $sql->bindValue(':senha', $senha); 
    $sql->execute(); //Executa a consulta SQL

    if ($sql->rowCount() > 0) { //Dos dados do login, se um registro for encontrado ele redirecionado para area_adm.php
        header("Location: ../../../front-end/area_do_adm/area_adm.html");
        exit;
    } else {
        header("Location: ../../../front-end/login_adm.html?erro=" . urlencode("Usuário ou senha incorretos, tente novamente!"));
        exit;
    }
} else {
    header("Location: ../../../front-end/login_adm.html?erro=" . urlencode("Acesso inválido!"));
    exit;
}
?>
