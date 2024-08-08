<?php
include 'includes/header.php';
include 'includes/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            header("Location: restricted_area.php");
        } else {
            echo '<div class="alert alert-danger" role="alert">Senha incorreta</div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">Usuário não encontrado</div>';
    }
}

include 'templates/login_form.php';
include 'includes/footer.php';
?>
