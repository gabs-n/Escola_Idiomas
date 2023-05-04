<?php
    //receba os dados do formulário de cadastro de matrículas
    $aluno_id = $_POST["aluno_id"];
    $turma_id = $_POST["turma_id"];
    $data_matricula = $_POST["data_matricula"];

    //conexao com o banco de dados
    require_once "conexao.php";

    //consulta SQL para inserir a matricula na tabela matriculas
    $sql = "INSERT INTO matriculas (aluno_id, turma_id, data_matricula) VALUES ('$aluno_id, $turma_id, $data_matricula')";

    //executa a consulta SQL e verifica se houve erro
    if ($conn->query($sql) === TRUE) {
        echo "Matrícula cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar matrícula: " . $conn->error;
    }

    //fecha a conexão com o banco de dados 
    $conn->close();
?>