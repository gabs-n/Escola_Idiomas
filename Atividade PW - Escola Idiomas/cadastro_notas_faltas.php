<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de notas e faltas</title>
        <meta http-equiv="Content-Type" content="text/html">
    </head>
    <body>
        <h1>Cadastro de notas e faltas</h1>
        <form action="processa_matricula_notas_faltas.php" method="POST">
            <label for="matricula_aluno_id">Aluno</label>
            <select name="matricula_aluno_id" id="matricula_aluno_id">
                <?php 
                //Conexão com o banco de dados
                require_once "conexao.php";

                //Consulta para obter os alunos cadastrados
                $query = "SELECT id, nome, FROM alunos";
                $resultado = mysqli_query ($conn, $query);

                //Logo para exibir as opções do select 
                while ($aluno = mysqli_fetch_assoc($resultado)) {
                    echo "<option value='" . $aluno["id"] . "'>" . $aluno["nome"] . "</option>";
                }


                ?>
            </select><br><br>

            <label for="matricula_turma_id">Turma </label>
            <select name="matricula_turma_id" id="matricula_turma_id">
                <?php
                    //conexao com o banco de dados 
                    require_once "conexao.php";

                    //consulta para obter as turmas cadastradas
                    $query = "SELECT id, nome FROM turmas";
                    $resultado = mysqli_query($conn, $query);

                    //loop para exibir as opcoes do select
                    while($turma = mysqli_fetch_assoc($resultado)) {
                        echo "<option value='" . $turma["id"] . "'>" . $turma["nome"] . "</option>";
                    }

                    //fechamento da conexao com o banco de dados
                    mysqli_close($conn);
                ?>
            </select><br><br>

            <label for="data_lancamento">Data de lançamento:</label>
            <input type="date" name="data_lancamento" id="data_lancamento"><br><br> 
            
            <label for="nota">Nota:</label>
            <input type="number" step="0.01" name="notao" id="nota"><br><br> 

            <label for="falta">Falta:</label>
            <input type="number" name="falta" id="falta"><br><br> 

            <input type="submit" value="Salvar>
        </form>
    </body>

</html>