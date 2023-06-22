<?php
// Conexão com o banco de dados
require_once "conexao.php";

// Recupera os dados do formulário
$id = $_POST['id'];
$nome= $_POST['nome'];
$matricula = $_POST['matricula'];
$data_nascimento = $_POST['data_nascimento'];

// Atualiza os dados do aluno no banco de dados
$sql = "UPDATE alunos SET nome='$nome', matricula='$matricula', data_nascimento='$data_nascimento' WHERE id = $id";
$result = mysqli_query($conn, $sql);

// Verifica se a atualização foi realizada com sucesso
if ($result) {
    // Redireciona para a página de exibição de alunos
    header("Location: exibe_alunos.php");
} else {
    echo "Erro ao atualizar o aluno: " . mysqli_error($conn);
}

// Fechamento da conexão com o banco de dados
mysqli_close($conn);
?>