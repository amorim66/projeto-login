<?php
include 'includes/db_connect.php';

if (isset($_GET['usuario'])) {
    $usuario = $_GET['usuario'];
    $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM usuarios WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    
    echo json_encode(['exists' => $result['count'] > 0]);
}
?>
