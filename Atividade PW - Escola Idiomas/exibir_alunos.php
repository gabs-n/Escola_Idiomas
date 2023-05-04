<?php
require_once "conexao.php";

$sql = "SELECT * FROM alunos";
$result = mysqli_query($conn, $sql);

echo "<h2>Dados dos Alunos</h2>";
echo "<table>";
echo "<tr><th>ID</th><th>Nome</th><th>Matrícula</th><th>Data de Nascimento</th><th>Ações</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row['id']."</td><td>".$row['nome']."</td><td>".$row['matricula']."</td></tr>"
    .$row['data_nascimento']."</td><td><a href='editar_aluno.php?id="
    .$row['id']."'>Editar</a> | <a href='excluir_aluno.php?id=".$row['id']."'>Excluir</a></td></tr>";
}
echo "</table";

mysqli_close($conn)
?>