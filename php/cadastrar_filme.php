<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Obtém os dados do formulário
$titulo = $_POST['titulo'];
$genero = $_POST['genero'];
$ano = $_POST['ano'];

// Insere os dados na tabela filmes
$sql = "INSERT INTO filmes (titulo, genero, ano) VALUES ('$titulo', '$genero', $ano)";

if ($conn->query($sql) === TRUE) {
    echo "Filme cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar o filme: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
