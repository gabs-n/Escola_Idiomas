<?php

// Conexão com o banco de dados

require_once "conexao.php";

// Recupera o id do aluno a ser editado

$id = $_GET['id'];

// Consulta SQL para selecionar o aluno com o id correspondente

"SELECT * FROM alunos WHERE id = $id";

$sql

$result mysqli_query($conn, $sql);

=

// Recupera os dados do aluno

$row =

$nome $row['nome'];

$matricula = $row['matricula'];

$data_nascimento = $row['data_nascimento'];

// Formulário para edição dos dados do aluno

echo '<!DOCTYPE html>

<html>

<head>

mysqli_fetch_assoc($result);

<title>Editar Aluno</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>

<body>

?>

<h1>Editar Aluno</h1>

<form action="atualiza_aluno.php" method="POST">

<label for="nome">Nome:</label>

<input type="text" name="nome" value="'.$nome.'" required>



<label for="matricula">Matrícula:</label>

<input type="text" name="matricula" value="'.$matricula.'" required>



<label for="data_nascimento">Data de Nascimento:</label>

<input type="date" name="data_nascimento" value=" '.$data_nascimento.'" required>



<input type="hidden" name="id" value="'.$id. '">

<input type="submit" value="Atualizar">

</form>

</body>

</html>';

// Fechamento da conexão com o banco de dados

mysqli_close($conn);