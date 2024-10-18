<?php
include 'db.php'; // Incluindo o arquivo de conexão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $nome = $_POST['nome'];
    $dataNascimento = $_POST['dataNascimento'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $formaPagamento = $_POST['formaPagamento'];

    // Preparar a consulta SQL
    $stmt = $conn->prepare("INSERT INTO alunos (nome, data_nascimento, email, endereco, forma_pagamento) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nome, $dataNascimento, $email, $endereco, $formaPagamento);

    // Executar a consulta
    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    // Fechar a declaração e a conexão
    $stmt->close();
    $conn->close();
}
?>
