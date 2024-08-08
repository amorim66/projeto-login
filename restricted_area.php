<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
include 'includes/header.php';
?>
<div class="container mt-5">
    <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?></h2>
    <p>Esta é a área restrita.</p>
</div>
<?php include 'includes/footer.php'; ?>
