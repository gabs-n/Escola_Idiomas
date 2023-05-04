<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Turmas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
    <h1>Cadastro de Turmas</h1>
    <form action="processa_turma.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="periodo">Período:</label>
        <input type="text" id="periodo" name="periodo" required><br><br>

        <label for="professor">Professor:</label>
        <select id="professor" name="professor">
            <option value="">Selecione um professor</option>
            <?php
            require_once "conexao.php";

            // Query para listar todos os professores
            $sql = "SELECT id, nome FROM professores";
            $result = mysqli_query($conn, $sql);

            // Loop para gerar as opções do dropdown
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row["id"] . "'>" . $row["nome"] . "</option>";
            }
            
            // Fechando conexão
            mysqli_close($conn);
            ?>
        </select><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>