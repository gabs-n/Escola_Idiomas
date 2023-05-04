<?php
// Inclui o arquivo de conexão com o banco de dados
require_once "conexao.php";

// Verifica se foi submetido o formulário de cadastro de aluno
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtém os dados submetidos pelo formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    // Prepara a query SQL para inserção do aluno no banco de dados
    $sql = "INSERT INTO professores (nome, email) VALUES ('$nome', '$email')";

    // Executa a query SQL
    if ($conn->query($sql) === TRUE) {
        echo "Professor cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar Professor: " . $conn->error;
    }
    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>