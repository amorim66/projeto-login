<?php
include 'includes/header.php';
include 'includes/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    // Verifica se o nome de usuário já existe
    $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM usuarios WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    if ($result['count'] > 0) {
        echo '<div class="alert alert-danger" role="alert">Nome de usuário já existe. Por favor, escolha outro.</div>';
    } else {
        $sql = "INSERT INTO usuarios (usuario, senha, nome, idade, cep, rua, bairro, cidade, estado) 
                VALUES ('$usuario', '$senha', '$nome', '$idade', '$cep', '$rua', '$bairro', '$cidade', '$estado')";
        
        if ($conn->query($sql) === TRUE) {
            header("Location: login.php");
            echo '<div class="alert alert-success" role="alert">Usuário criado com sucesso!</div>';
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }
}

include 'templates/registration_form.php';
include 'includes/footer.php';
?>
