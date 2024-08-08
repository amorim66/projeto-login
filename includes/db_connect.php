<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projeto_ti";


$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
