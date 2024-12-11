<?php 
require '../conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') { //Vai pegar os dados do formulário usando metodo post
    $email = $_POST['email'] ?? ''; //Passando os dados do formulário para as variáveis
    $senha = $_POST['senha'] ?? '';

    if (empty($email) || empty($senha)) { //Verificação caso o usuario não preencheu os campos
        header("Location: ../../../front-end/login_aluno.html?erro=" . urlencode("Por favor, preencha todos os campos!"));
        exit;
    }

    $sql = $pdo->prepare("SELECT * FROM aluno WHERE email = :email AND senha = :senha"); //Passou uma consulta SQL pra variavel $sql
    $sql->bindValue(':email', $email); //Atribuindo valor da variável aos placeholders 
    $sql->bindValue(':senha', $senha); 
    $sql->execute(); //Executa a consulta SQL

    if ($sql->rowCount() > 0) { //Dos dados do login, se um registro for encontrado ele redirecionado para area_adm.php
        header("Location: ../../../front-end/area_do_aluno/areaaluno.html");
        exit;
    } else {
        header("Location: ../../../front-end/login_aluno.html?erro=" . urlencode("Usuário ou senha incorretos, tente novamente!"));
        exit;
    }
} else {
    header("Location: ../../../front-end/login_aluno.html?erro=" . urlencode("Acesso inválido!"));
    exit;
}
?>
