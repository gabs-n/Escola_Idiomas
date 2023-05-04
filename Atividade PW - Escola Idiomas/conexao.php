<?php
//Dados para conexão com o banco de dados 
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "escola";

//Cria conexão com banco de dados 
$conn = new mysqli($servername, username, password, dbname);

//Verifica se a conexão foi bem sucedida
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

//Configura o charset para UTF-8
$conn->set_charset("utf8");

?>