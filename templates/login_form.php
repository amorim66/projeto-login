<div class="container mt-5 d-flex justify-content-center">
<div class="card p-5 shadow" style="width: 100%; max-width: 400px;">
    <!-- Campos de login -->
    <form action="login.php" method="POST" id="loginForm">
        <div class="form-group">
            <label for="usuario">Usuário</label>
            <input type="text" class="form-control" id="usuario" name="usuario" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
            <input type="checkbox" onclick="togglePassword()"> Mostrar Senha
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>
    <div class="col-md-6 login-image" >
        <img src="assets/img/product1.jpg" class="card-img-top" alt="Produto 1" style="width: 50%; height: 80%;">
    </div>
</div>
<script>
function togglePassword() {
    var x = document.getElementById("senha");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
