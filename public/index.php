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
<body data-bs-theme="light">

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
                            <a class="nav-link" href="#contato">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="modo-noturno"">
                                    <label class="form-check-label" for="modo-noturno">Modo noturno</label>
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

    <!-- Banners de serviços-->
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
                    <a href="#" class="btn botao-padrao w-100 fw-bold"data-bs-toggle="offcanvas" data-bs-target="#canvas-1" aria-controls="offcanvasRight">Quero detalhes</a>
                </div>
            </div>

            <div class="card m-4" style="width: 20rem;">
                <img src="./img/buffet-card.png" class="card-img-top" alt="Mesa de buffet com alimentos diversos">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Buffet</h5>
                    <p class="card-text">Buffet e catering personalizado para eventos, produções e celebrações. Com
                        um menu variado e adaptável às preferências do cliente, atendimento atencioso e
                        profissional.</p>
                    <a href="#" class="btn botao-padrao w-100 fw-bold mt-3"data-bs-toggle="offcanvas" data-bs-target="#canvas-2" aria-controls="offcanvasRight">Quero detalhes</a>
                </div>
            </div>

            <div class="card m-4" style="width: 20rem;">
                <img src="./img/delivery-card.png" class="card-img-top" alt="Caixa aberta armazenando comidas diversas">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Delivery</h5>
                    <p class="card-text">Para quem deseja desfrutar no conforto de casa, oferecemos delivery dos
                        produtos. Com o mesmo cardápio variado de sempre, sem perder nosso sabor e padrão de
                        qualidade.</p>
                    <a href="#" class="btn botao-padrao w-100 fw-bold"data-bs-toggle="offcanvas" data-bs-target="#canvas-3" aria-controls="offcanvasRight">Quero detalhes</a>
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

<!-- Produtos -->
    <section class="mb-3">
    <h2 class="text-center mt-3 mb-3 my-xl-5 fw-bold">Nossos Produtos</h2>
    <div class="container row mx-auto g-4 mx-0">
            <div class="col-12 col-md-6 col-xxl-4 btn">
                <div class="card rounded-0 border-0"data-bs-toggle="modal" data-bs-target="#modal-1">
                    <img src="./img/produtos-cafe-tradicional.png" alt="" class="">
                    <div class=" ">
                        <h2 class="text-center fw-bold ">Café tradicional</h2>
                    </div>
                </div>
            </div>
        <div class="col-12 col-md-6 col-xxl-4 btn">
            <div class="card rounded-0 border-0"data-bs-toggle="modal" data-bs-target="#modal-2">
                <img src="./img/produtos-cafe-especial.png" alt="" class="">
                <div class=" ">
                    <h2 class="text-center fw-bold ">Café especial</h2>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xxl-4 btn">
            <div class="card rounded-0 border-0">
                <img src="./img/produtos-vitaminas.png" alt="" class="">
                <div class=" ">
                    <h2 class="text-center fw-bold ">Smoothies e Vitaminas</h2>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xxl-4 btn">
            <div class="card rounded-0 border-0">
                <img src="./img/produtos-paes.png" alt="" class="">
                <div class=" ">
                    <h2 class="text-center fw-bold ">Pães e foccacias</h2>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xxl-4 btn">
            <div class="card rounded-0 border-0">
                <img src="./img/produtos-doces.png" alt="" class="">
                <div class=" ">
                    <h2 class="text-center fw-bold ">Doces</h2>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xxl-4 btn">
            <div class="card rounded-0 border-0">
                <img src="./img/produtos-salgados.png" alt="" class="">
                <div class=" ">
                    <h2 class="text-center fw-bold ">Salgados</h2>
                </div>
            </div>
        </div>

    </div>
    </section>

    <!-- Banner do café-->
    <section class="banners banner-3 d-flex flex-column justify-content-center text-center "> </section>

    <!-- Formulário de contato -->
    <section class="py-4 container">
        <div class="row">
            <div class="col-10 col-xl-8 mx-auto">
                <div class="border border-2 rounded p-3">
                    <h3 class="fw-bold p-3 text-center">Entre em contato</h3>
                    <form method="post" id="contato">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Nome" placeholder="nome">
                            <label for="Nome">Nome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" placeholder="name@example.com">
                            <label for="email">Email </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Telefone" placeholder="name@Telefone.com">
                            <label for="Telefone">Telefone</label>
                        </div>
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Preferência de contato: </option>
                            <option value="1">E-mail</option>
                            <option value="2">Whatszapp</option>
                            <option value="3">Ligação</option>
                        </select>
                        <label for="nivel-satisfacao" class="form-label">Nivel de satisfação:</label>
                        <input type="range" class="form-range input-range" id="nivel-satisfacao">
                        <div class="form-check ">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Gostaria de receber atualizações
                            </label>
                        </div>
                        <button type="button" class="btn botao-padrao fw-bold w-100 p-2 mt-3 py-3">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

        <!-- Rodapé -->
    <footer class="text-center">
        <section class="container p-4 pb-0 mb-4">
            <a class="btn" href="#!"><i class="bi bi-whatsapp"></i></a>
            <a class="btn" href="#!"><i class="bi bi-instagram"></i></a>
            <a class="btn" href="#!"><i class="bi bi-twitter"></i></a>
        </section>
        <div class="p-3">
            2023 <i class="bi bi-c-circle"></i> Desenvolvido por Alura | Projeto fictício sem fins comerciais.
        </div>
    </footer>
</main>

<!-- Canvas 1-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="canvas-1" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Café & Bistro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed botao-padrao" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Café
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Temos um excelente espaço para alimentação e descanso, com a vitrine recheada de doces, salgados, cafés tradicionais e especiais para desfrutar seus melhores momentos.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed botao-padrao" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Bistro
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Além de cafés o dia todo, oferecemos refeições em horário de almoço (11 às 15h) com pratos deliciosos de bistrô!
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed botao-padrao" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Coworking
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Temos espaço adequado para trabalho, com conexão de internet de alta velocidade e instalações confortáveis para reuniões.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Canvas 2 -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="canvas-2" aria-labelledby="offcanvasRightLabel">
<div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Buffet</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed botao-padrao" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Eventos
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Organizamos buffet com cardápios variados e personalizados para casamentos, festas de aniversário e outros eventos!
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed botao-padrao" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Cathering
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Oferecemos serviço de alimentação variada para coffee breaks, produções e bastidores.
                </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Canvas 3 -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="canvas-3" aria-labelledby="offcanvasRightLabel">
<div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Delivery</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed botao-padrao" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Encomendas para eventos
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Produzimos e entregamos os itens de café de nosso cardápio em grandes quantidades para seus eventos! Basta entrar em contato e fazer a reserva com 72h de antecedência.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed botao-padrao" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Entrega por aplicativo
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Entregamos pelos aplicativos Ifood e Rappi. Consulte nosso cardápio por lá e faça seu pedido!
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal 1 -->
<div class="modal fade" id="modal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Café Tradicional</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="border-0">
                    <img src="./img/produtos-cafe-tradicional.png" class="w-100" alt="">
                    <p class="">O café Serenatto é conhecido por seus blends tradicionais e saborosos, que agradam aos amantes da bebida. Nossos grãos são cuidadosamente selecionados e torrados para produzir um aroma rico e sabor equilibrado.  </p>
                    <p>Entre os cafés mais tradicionais da casa, destaca-se o "Café Serenatto", um blend exclusivo de grãos com notas de chocolate e caramelo. Outra opção popular é o "Café Italiano", um café expresso encorpado e intenso. Já o "Café Cappuccino" é uma escolha clássica para quem prefere uma bebida cremosa e suave.</p>
                </div>
            </div>
            <div class="modal-footer mx-auto border-0 rounded-0">
                <button type="button" class="btn botao-padrao" data-bs-dismiss="modal">Fecha janela</button>

            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="modal-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Café Especial</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="border-0">
                    <img src="./img/produtos-cafe-especial.png" class="w-100" alt="">
                    <p class="">Somos conhecidos também por nossos cafés especiais, que são cuidadosamente preparados com grãos selecionados de alta qualidade e técnicas de preparo precisas.</p>
                    <p> Entre as opções de cafés especiais do Café & Bistrô Serenatto, destacamos o café aeropress, que é preparado com uma técnica de imersão e pressão, resultando em uma bebida de sabor intenso e aroma acentuado. Outra opção popular é o café Hario V60, que é preparado com um filtro de papel em formato de cone e resulta em uma bebida limpa e suave, ressaltando as notas sensoriais dos grãos. Além disso, oferecemos uma variedade de bebidas geladas, como o café gelado, que é preparado com grãos torrados escuros e servido com gelo e leite, resultando em uma bebida refrescante e saborosa.</p>
                </div>
            </div>
            <div class="modal-footer mx-auto border-0 rounded-0">
                <button type="button" class="btn botao-padrao" data-bs-dismiss="modal">Fecha janela</button>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
<script src="./js/temaSite.js"></script>
</body>
</html>