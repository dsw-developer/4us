<?php
$host = 'sql101.infinityfree.com'; // ou o endereço do seu servidor
$user = 'if0_38774441';      // seu usuário
$password = 'rTf6XyKKTmU5jR';      // sua senha
$database = 'if0_38774441_4us'; // nome do banco de dados

// Criação da conexão
$conn = new mysqli($host, $user, $password, $database);

// Verificação de erro na conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
