<?php
$pdo = new PDO("mysql:dbname=academia;host=localhost;port=3306", "root", "1234");
if (!$pdo) {
    echo "Acesso negado!";
} 
?>