<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Matriculas</title>
</head>
<body>
    <h1>Cadastro de Matrículas</h1>
    <form method="POST"action="processa_matricula.php">
        <label>Aluno</label><br>
        <select name="aluno_id">
           <?php
           // conexao com o banco de dados
           require_once "conexao.php";
           // consulta sql para buscar alunos
           $sql = "SELECT * FROM alunos";
           // executa a consulta aql e armazena o resultado em uma variavel
           $resultado = $conn->query($sql);
           // itera pelos resultados e cria as opcoes do select
           while ($linha = $resultado->fetch_assoc()) {
               echo "<option value='" . $linha["id"] . "'>" . $linha["nome"] . "</option";
           }

           ?>
           </select><br><br>
           <label>Turma</label><br>
           <select name="turma_id">
               <?php
                // conexão com o banco de dados
                require_once "conexao.php";

                // consulta sql para buscar as turmas
                $sql = "SELECT * FROM alunos";
                // executa a consulta aql e armazena o resultado em uma variavel
                $resultado = $conn->query($sql);
                // itera pelos resultados e cria as opcoes do select
                while ($linha = $resultado->fetch_assoc()) {
                    echo "<option value='" . $linha["id"] . "'>" . $linha["nome"] . "</option";
                }
                // fecha conexao com o banco de dados
                $conn->close();
                ?>
           </select><br><br>
           <label>Data de Matrícula:</label><br>
           <input type="date" name="data_matricula"><br><br>
           <input type="submit" value="Cadastrar">
    </form>
</body>
</html>