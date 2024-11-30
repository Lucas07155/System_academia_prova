<?php  
require 'conexao.php';

$id = $_POST['id'];
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$nivel = $_POST['nivel'];
$endereco = $_POST['endereco'];
$sexo = $_POST['sexo'];

$sql = $pdo->prepare("UPDATE aluno SET 
    cpf = :cpf, 
    nome = :nome, 
    data_nascimento = :data_nascimento, 
    email = :email, 
    telefone = :telefone, 
    nivel = :nivel, 
    endereco = :endereco, 
    sexo = :sexo 
    WHERE id_aluno = :id");
    
$sql->bindValue(':cpf', $cpf);
$sql->bindValue(':nome', $nome);
$sql->bindValue(':data_nascimento', $data_nascimento);
$sql->bindValue(':email', $email);
$sql->bindValue(':telefone', $telefone);
$sql->bindValue(':nivel', $nivel);
$sql->bindValue(':endereco', $endereco);
$sql->bindValue(':sexo', $sexo);
$sql->bindValue(':id', $id);

$sql->execute();

header("Location: lista_alunos.php");
exit;
?>
