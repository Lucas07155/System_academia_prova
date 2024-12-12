<?php
$pdo = new PDO("mysql:dbname=academia;host=localhost;port=3306", "root", "cimatec");
if (!$pdo) {
    echo "Acesso negado!";
} 
?>