<?php
$pdo = new PDO("mysql:dbname=academia;host=localhost;port=3306", "root", "lucas123");
if (!$pdo) {
    echo "Acesso negado!";
} 
?>