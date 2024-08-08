<div class="container mt-5">
    <h2>Registrar</h2>
    <form action="register.php" method="POST" id="registerForm">
        <div class="form-group">
            <label for="usuario">Usuário</label>
            <input type="text" class="form-control" id="usuario" name="usuario" required>
            <small id="usuarioFeedback" class="form-text"></small>
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
            <ul id="passwordCriteria" class="list-unstyled"></ul>
        </div>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="idade">Idade</label>
            <input type="number" class="form-control" id="idade" name="idade" min="18" max="120" required>
        </div>
        <div class="form-group">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" required>
        </div>
        <div class="form-group">
            <label for="rua">Rua</label>
            <input type="text" class="form-control endereco" id="rua" name="rua" disabled required>
        </div>
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control endereco" id="bairro" name="bairro" disabled required>
        </div>
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control endereco" id="cidade" name="cidade" disabled required>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" class="form-control endereco" id="estado" name="estado" disabled required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>

<script>
document.getElementById('usuario').addEventListener('input', function() {
    const usuario = this.value;
    const feedback = document.getElementById('usuarioFeedback');
    feedback.textContent = 'Verificando disponibilidade...';
    document.addEventListener('DOMContentLoaded', function() {
    let cartCount = 0;
    let favoritesCount = 0;

    function showToast(message, imageUrl) {
        const toastContainer = document.getElementById('toast-container');
        const toastHTML = `
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="${imageUrl}" class="rounded mr-2" alt="..." style="width: 50px;">
                    <strong class="mr-auto">Produto</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    ${message}
                </div>
            </div>`;
        toastContainer.innerHTML += toastHTML;
        $('.toast').toast('show');
    }

    document.getElementById('cart').addEventListener('click', function() {
        cartCount++;
        document.getElementById('cart-count').textContent = cartCount;
        showToast('Produto adicionado ao carrinho', 'assets/images/products/product1.jpg');
    });

    document.getElementById('favorites').addEventListener('click', function() {
        favoritesCount++;
        document.getElementById('favorites-count').textContent = favoritesCount;
        showToast('Produto adicionado aos favoritos', 'assets/images/products/product1.jpg');
    });
});

    fetch(`validate_username.php?usuario=${usuario}`)
        .then(response => response.json())
        .then(data => {
            if (data.exists) {
                feedback.textContent = 'Nome de usuário já existe';
                feedback.style.color = 'red';
            } else {
                feedback.textContent = 'Nome de usuário disponível';
                feedback.style.color = 'green';
            }
        });
});
</script>
