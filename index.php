<?php 
session_start();
include 'includes/header.php'; 
?>

<div class="container-fluid mt-0 p-0">
    <!-- Hero Section -->
    <div id="heroCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#heroCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#heroCarousel" data-slide-to="1"></li>
            <li data-target="#heroCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/slider1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Monte seu look verão e economize</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/slider2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Descontos de até 50%</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/slider3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Compre agora e aproveite</h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Features Section -->
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-3">
                <i class="fas fa-truck fa-2x"></i>
                <h4>Frete grátis a partir de R$ 299,90</h4>
            </div>
            <div class="col-md-3">
                <i class="fas fa-credit-card fa-2x"></i>
                <h4>Parcele em até 06x sem juros no cartão</h4>
            </div>
            <div class="col-md-3">
                <i class="fas fa-percent fa-2x"></i>
                <h4>Ganhe 5% de desconto pagando com PIX</h4>
            </div>
            <div class="col-md-3">
                <i class="fas fa-lock fa-2x"></i>
                <h4>Compra 100% segura com criptografia SSL</h4>
            </div>
        </div>
    </div>

    <!-- Produtos Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/img/product1.jpg" class="card-img-top product-img" alt="Produto 1">
                    <div class="card-body">
                        <h5 class="card-title">Produto 1</h5>
                        <p class="card-text">Descrição curta do produto 1. R$ 49,99</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#productModal1">Ver
                            detalhes</button>
                        <button class="btn btn-outline-secondary add-to-favorites" data-product="Produto 1"><i
                                class="fas fa-heart"></i></button>
                        <button class="btn btn-outline-secondary add-to-cart" data-product="Produto 1"><i
                                class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="productModal1" tabindex="-1" role="dialog" aria-labelledby="productModalLabel1"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="productModalLabel1">Produto 1</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Descrição detalhada do produto 1.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="assets/img/product2.jpg" class="card-img-top product-img" alt="Produto 2">
                    <div class="card-body">
                        <h5 class="card-title">Produto 2</h5>
                        <p class="card-text">Descrição curta do produto 2. R$ 49,99</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#productModal2">Ver
                            detalhes</button>
                        <button class="btn btn-outline-secondary add-to-favorites" data-product="Produto 2"><i
                                class="fas fa-heart"></i></button>
                        <button class="btn btn-outline-secondary add-to-cart" data-product="Produto 2"><i
                                class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </div>



            <!-- Modal -->
            <div class="modal fade" id="productModal2" tabindex="-1" role="dialog" aria-labelledby="productModalLabel2"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="productModalLabel2">Produto 2</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Descrição detalhada do produto 2.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="assets/img/product3.jpg" class="card-img-top product-img" alt="Produto 3">
                    <div class="card-body">
                        <h5 class="card-title">Produto 3</h5>
                        <p class="card-text">Descrição curta do produto 3. R$ 49,99</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#productModal3">Ver
                            detalhes</button>
                        <button class="btn btn-outline-secondary add-to-favorites" data-product="Produto 3"><i
                                class="fas fa-heart"></i></button>
                        <button class="btn btn-outline-secondary add-to-cart" data-product="Produto 3"><i
                                class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </div>



            <!-- Modal -->
            <div class="modal fade" id="productModal3" tabindex="-1" role="dialog" aria-labelledby="productModalLabel3"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="productModalLabel3">Produto 3</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Descrição detalhada do produto 3.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>

            

        </div>

        <!-- Toast de notificação -->
        <div aria-live="polite" aria-atomic="true" style="position: relative;">
                <div id="cartToast" class="toast" style="position: absolute; top: 20px; right: 20px;">
                    <div class="toast-header">
                        <img id="toastImg" src="" class="rounded mr-2" alt="..." style="width: 20px;">
                        <strong class="mr-auto">Carrinho</strong>
                        <small class="text-muted"> Agora</small>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                    </div>
                    <div class="toast-body">
                        Produto adicionado ao carrinho!
                    </div>
                </div>
            </div>


    </div>

    
</div>
    

</div>



<script>
// Função para verificar autenticação
function isAuthenticated() {
    return <?php echo isset($_SESSION['usuario']) ? 'true' : 'false'; ?>;
}

// Função para adicionar ao carrinho
function addToCart(product, imgSrc) {
    if (!isAuthenticated()) {
        window.location.href = 'login.php';
        return;
    }

    // Mostrar o toast
    const toast = document.getElementById('cartToast');
    document.getElementById('toastImg').src = imgSrc;
    $(toast).toast({
        delay: 3000
    });
    $(toast).toast('show');

    // Incrementar o contador
    const cartCount = document.getElementById('cartCount');
    cartCount.textContent = parseInt(cartCount.textContent) + 1;
}

// Função para adicionar aos favoritos
function addToFavorites(product) {
    if (!isAuthenticated()) {
        window.location.href = 'login.php';
        return;
    }

    // Incrementar o contador de favoritos
    const favCount = document.getElementById('favCount');
    favCount.textContent = parseInt(favCount.textContent) + 1;

    // Mostrar toast de favorito
    // (pode implementar um toast similar ao do carrinho se desejar)
}

document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function() {
        const product = this.getAttribute('data-product');
        const imgSrc = this.closest('.card').querySelector('.product-img').src;
        addToCart(product, imgSrc);
    });
});

document.querySelectorAll('.add-to-favorites').forEach(button => {
    button.addEventListener('click', function() {
        const product = this.getAttribute('data-product');
        addToFavorites(product);
    });
});
</script>

<?php include 'includes/footer.php'; ?>