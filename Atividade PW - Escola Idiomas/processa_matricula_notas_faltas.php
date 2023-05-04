<?php
//conexao com o banco de dados
require_once "conexao.php";
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

//Verifica se o formulario 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //recebe os dados do formulario
    $matricula_aluno_id = $_POST["matricula_aluno_id"];
    $matricula_turma_id = $_POST["matricula_turma_id"];
    $data_lancamento = $_POST["data_lancamento"];
    $nota = $_POST["nota"];
    $falta = $_POST["falta"];

    //verifica se a matricula do aluno e a turma existem na tabela de matriculas
    $sql = "SELECT * FROM matriculas WHERE aluni_id = '$matricula_aluno_id' AND turma_id = 'matricula_turma_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) ==1){
        //Insere os dados na tabela notas_faltas
        $data_lancamento = date("Y-m-d"); //Pega a data atual
        $result = "INSERT INTO notas_faltas (matricula_aluno_id, matricula_turma_id, data_lancamento, nota, falta) VALUES ('$matricula_aluno_id', '$matricula_turma_id', '$data_lancamento', '$nota', '$falta')";

        if (mysqli_query($conn, $sql)) {
            echo "Notas e faltas inseridas com sucesso!";
        } else {
            echo "Erro ao inserir notas e faltas: " . mysqli_error($conn);
        } 
    } else {
        echo "Erro ao inserir notas e faltas: matrícula de aluno e/ou turma não encontrada.";
    }
}

mysqli_close($conn);
?>