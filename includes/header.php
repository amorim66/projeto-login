<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto TI</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">
    <img src="assets/img/logo.png" alt="Logo" class="d-inline-block align-top" style="width: 40px; height: 40px;">
    Projeto TI
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <?php if (!isset($_SESSION['usuario'])): ?>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Registrar</a>
      </li>
      <?php endif; ?>
      <li class="nav-item">
                <a class="nav-link" href="#" id="favorites"><i class="fas fa-heart"></i> <span id="favorites-count" class="badge badge-light">0</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="cart"><i class="fas fa-shopping-cart"></i> <span id="cart-count" class="badge badge-light">0</span></a>
            </li>
      <?php if (!isset($_SESSION['usuario'])): ?>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <?php endif; ?>
      <?php if(isset($_SESSION['usuario'])): ?>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>

