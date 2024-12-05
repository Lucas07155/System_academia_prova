<?php
$pdo = new PDO("mysql:dbname=academia;host=localhost;port=3306", "root", "");
if (!$pdo) {
    echo "Acesso negado!";
} 
?>