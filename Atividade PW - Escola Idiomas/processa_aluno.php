<?php 
//Inclui o arquivo de conexão com o banco de dados 
require_once "conexao.php";

//Verifica se foi o formulário de cadastro de aluno
if($_SERVER["REQUEST_METHOD"] == "POST") {

    //Obtem os dados submetidos pelo formulário
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $data_nascimento = $_POST["data_nascimento"];

    //Prepara a query SQL para inserção do aluno no banco de dados
    $sql = "INSERT INTO alunos (nome, matricula, data_nascimento) VALUES ('$nome', '$matricula', '$data_nascimento')";

    //Executa a query SQL 
    if($conn->query($sql) === TRUE) {
        echo "Aluno cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar aluno: " . $conn->error;
    }

    //fecha a conexão com o banco de dados 
    $conn->close();
}
?>