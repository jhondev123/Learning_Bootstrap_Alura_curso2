<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href=".." type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Serenatto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700&family=Barlow:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

<header>

    <nav class="navbar bg-body-secondary fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <h1 class="navbar-brand" href="#"><img src="./img/logo.png" alt=""></h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="./img/logo-mobile.png" alt=""></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Modo noturno</label>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

</header>

<main>
    <section class="banners banner-1 d-flex flex-column justify-content-center text-center ">
        <div class="banner-titulo bg-body-secondary py-5">
            <h2 class="fw-bold">Sua Pausa para desfrutar a vida!!</h2>
            <p>Boas-vindas ao Bistrô Serenatto! Um ambiente aconchegante e acolhedor para apreciar um bom café.</p>
        </div>
    </section>

    <section class="py-5">
        <h2 class="text-center fw-bold pb-1">Nossos serviços</h2>

        <div class="container d-flex justify-content-around flex-wrap">

            <div class="card m-4" style="width: 20rem;">
                <img src="./img/cafe-card.png" class="card-img-top"
                     alt="Balcão de padaria tradicional com alimentos diversos">
                <div class="card-body">
                    <h5 class="card-title py-2 fw-bold">Café & Bistrô</h5>
                    <p class="card-text">Nosso bistrô oferece uma ampla variedade de cafés, smoothies, deliciosos
                        salgados e sobremesas. Uma excelente opção para quem busca um lugar tranquilo e
                        aconchegante.</p>
                    <a href="#" class="btn botao-padrao w-100 fw-bold" data-bs-toggle="offcanvas" data-bs-target="#canvas-1" aria-controls="offcanvasRight">Quero detalhes</a>
                </div>
            </div>

            <div class="card m-4" style="width: 20rem;">
                <img src="./img/buffet-card.png" class="card-img-top" alt="Mesa de buffet com alimentos diversos">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Buffet</h5>
                    <p class="card-text">Buffet e catering personalizado para eventos, produções e celebrações. Com
                        um menu variado e adaptável às preferências do cliente, atendimento atencioso e
                        profissional.</p>
                    <a href="#" class="btn botao-padrao w-100 fw-bold mt-3">Quero detalhes</a>
                </div>
            </div>

            <div class="card m-4" style="width: 20rem;">
                <img src="./img/delivery-card.png" class="card-img-top" alt="Caixa aberta armazenando comidas diversas">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Delivery</h5>
                    <p class="card-text">Para quem deseja desfrutar no conforto de casa, oferecemos delivery dos
                        produtos. Com o mesmo cardápio variado de sempre, sem perder nosso sabor e padrão de
                        qualidade.</p>
                    <a href="#" class="btn botao-padrao w-100 fw-bold mt-3">Quero detalhes</a>
                </div>
            </div>
        </div>
    </section>

    <section class="banners banner-2 d-flex flex-column justify-content-center text-center ">
        <div class="banner-titulo bg-body-secondary py-5">
            <h2 class="fw-bold">Portas abertas para todos os públicos.</h2>
            <p>Nosso espaço é aconchegante, pet friendly, preparado para receber crianças e pessoas com deficiência. Também oferecemos ambiente de coworking!</p>
        </div>
    </section>
    <section class="banners banner-3 d-flex flex-column justify-content-center text-center "> </section>
</main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
</body>
</html>