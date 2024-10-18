<?php
$servername = "localhost"; // geralmente é localhost
$username = "seu_usuario"; // seu usuário do MySQL
$password = "sua_senha"; // sua senha do MySQL
$dbname = "academia_gym";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
