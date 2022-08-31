<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.7">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">
    <style>
    @font-face {
        font-family: 'NauSea';
        src: url("../assets/fonts/NauSea.ttf") format("truetype");
    }
    </style>
    <title>Flyin Kicks - O melhor site de Sneakers do Brasil!</title>
    <link rel="shortcut icon" href="../assets/img/logo.ico">
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-black fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler mr-auto" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="lista bi bi-list"></span>
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <button type="button" class="close btn bi bi-x-lg accordion-body p-5 me-auto"
                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    <div class="offcanvas-body text-center">
                        <ul class="navbar-nav pe-3">
                            <li class="logo nav-item">
                                <a href="vitrine.php">
                                    <img src="../assets/img/logo.png" alt="logo" class="mb-5" style="width: 75px;">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active mt-2" aria-current="page" href="../html/vitrine.php">
                                    <p class="link">Home</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">
                                    <p class="link">Calendário</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">
                                    <p class="link">Notícias</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contato.html">
                                    <p class="link">Contato</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <div class="mb-5 mt-4">
                                    <a href="login.php" id="btnEntrar" class="login btn">Entrar</a>
                                    <form method="post">
                                        <?php 
                                    session_start();
                                    if(isset($_SESSION['usuario']['nome']))
                                    {
                                        echo('<style>#btnEntrar{ display: none; }</style>')
                                    ?>

                                        <img src="../assets/img/avatar.webp" width="100px"><br /><br />
                                        <button type="submit" name="btnSair" class="login btn">Sair</button>
                                        <?php 
                                    } 
                                    ?>
                                        <?php
                                        if(isset($_POST['btnSair'])){
                                        session_destroy();
                                        }
                                    ?>
                                    
                                    </form>
                                </div>
                            </li>
                        </ul>
                        <form class="d-flex" method="post" action="pesquisa.php">
                            <input class="pesquisa form-control me-2 text-white text-center bg-black" type="search"
                                id="codigo" placeholder="O que você está procurando?">
                        </form>
                        <?php if(isset($_GET["codigo"])) pesquisar($_GET["codigo"]);?>
                    </div>
                </div>
                <a href="vitrine.php" class="navbarLogo btn">Flyin Kicks</a>
                <a type="button" href="bag.html" class="sacola btn bi bi-bag"></a>
            </div>
        </nav>
    </header>
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0"
                class="carouselIndicator off active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1" class="carouselIndicator off"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2" class="carouselIndicator off"></button>
        </div>
        <div class="carousel-inner mt-5">
            <div class="carousel-item active">
                <a href="productPage10.html">
                    <img src="../assets/img/bannerNike1.webp" alt="Nike" class="img-fluid" style="width: 100%">
                </a>
            </div>
            <div class="carousel-item">
                <a href="productPage9.html">
                    <img src="../assets/img/BannerNike2.gif" alt="Yeezy" class="img-fluid" style="width: 100%">
                </a>
            </div>
            <div class="carousel-item">
                <a href="productPage8.html">
                    <img src="../assets/img/bannerNike3.gif" alt="Yeezus" class="img-fluid" style="width: 100%">
                </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev"></button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo"
            data-bs-slide="next"><span></span></button>
    </div>
    <div class="maisVendidos container-fluid text-white" align="center">
        <h1 class="titulo display-5 text-center mt-5 mb-5">Mais vendidos:</h1>
        <div class="row">
            <div class="col-sm">
                <div class="card bg-black btn" style="width:200px">
                    <a href="productPage1.html" class="imgCard btn">
                        <img class="card-img-top" src="../assets/img/Jordan1/img1.webp" alt="Tenis" style="width:100%">
                    </a>
                    <div class="card-body">
                        <p class="card-titulo text-white">Air Jordan 1 Low</p>
                        <p class="preco text-white">R$549,99</p><br />
                        <div class="row">
                            <div class="col-sm-6">
                                <a type="button" href="#" class="addFav btn bi bi-heart"></a>
                            </div>
                            <div class="col-sm-6">
                                <a type="button" href="#" class="addSacola btn bi bi-bag-plus"></a>
                            </div>
                        </div>
                    </div>
                </div><br />
            </div>
            <div class="col-sm">
                <div class="card bg-black btn" style="width:200px">
                    <a href="productPage2.html" class="imgCard btn">
                        <img class="card-img-top" src="../assets/img/DunkHigh/img1.webp" alt="Tenis" style="width:100%">
                    </a>
                    <div class="card-body">
                        <p class="card-titulo text-white">Nike Dunk High SE</p>
                        <p class="preco text-white">R$ 849,99</p><br />
                        <div class="row">
                            <div class="col-sm-6">
                                <a type="button" href="#" class="addFav btn bi bi-heart"></a>
                            </div>
                            <div class="col-sm-6">
                                <a type="button" href="#" class="addSacola btn bi bi-bag-plus"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card bg-black btn" style="width:200px">
                    <a href="productPage3.html" class="imgCard btn">
                        <img class="card-img-top" src="../assets/img/AirMax97/img1.webp" alt="Tenis" style="width:100%">
                    </a>
                    <div class="card-body">
                        <p class="card-titulo text-white">Nike Air Max 97 SE</p>
                        <p class="preco text-white">R$ 839,99</p><br />
                        <div class="row">
                            <div class="col-sm-6">
                                <a type="button" href="#" class="addFav btn bi bi-heart"></a>
                            </div>
                            <div class="col-sm-6">
                                <a type="button" href="#" class="addSacola btn bi bi-bag-plus"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card bg-black btn" style="width:200px">
                    <a href="productPage4.html" class="imgCard btn">
                        <img class="card-img-top" src="../assets/img/AirMax95/img1.webp" alt="Tenis" style="width:100%">
                    </a>
                    <div class="card-body">
                        <p class="card-titulo text-white">Nike Air Max 95 SE</p>
                        <p class="preco text-white">R$ 709,99</p><br />
                        <div class="row">
                            <div class="col-sm-6">
                                <a type="button" href="#" class="addFav btn bi bi-heart"></a>
                            </div>
                            <div class="col-sm-6">
                                <a type="button" href="#" class="addSacola btn bi bi-bag-plus"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lancamentos container-fluid text-white" align="center">
        <h1 class="titulo display-5 text-center mb-5"></br>Lançamentos:</h1>
        <div class="row">
            <div class="col-sm">
                <div class="card bg-black btn" style="width:200px">
                    <a href="productPage5.html" class="imgCard btn">
                        <img class="card-img-top" src="../assets/img/Yeezy/img1.webp" alt="Tenis" style="width:100%">
                    </a>
                    <div class="card-body">
                        <p class="card-titulo text-white">Yeezy Foam Runner MX Cream Clay </p>
                        <p class="preco text-white"> R$ 2400,00</p><br />
                        <div class="row">
                            <div class="col-sm-6">
                                <a type="button" href="#" class="addFav btn bi bi-heart"></a>
                            </div>
                            <div class="col-sm-6">
                                <a type="button" href="#" class="addSacola btn bi bi-bag-plus"></a>
                            </div>
                        </div>
                    </div>
                </div><br />
            </div>
            <div class="col-sm">
                <div class="card bg-black btn" style="width:200px">
                    <a href="productPage6.html" class="imgCard btn">
                        <img class="card-img-top" src="../assets/img/AirMax1/img1.webp" alt="Tenis" style="width:100%">
                    </a>
                    <div class="card-body">
                        <p class="card-titulo text-white">Concepts x Nike Air Max 1 Mellow </p>
                        <p class="preco text-white">R$ 2499,99</p><br />
                        <div class="row">
                            <div class="col-sm-6">
                                <a type="button" href="#" class="addFav btn bi bi-heart"></a>
                            </div>
                            <div class="col-sm-6">
                                <a type="button" href="#" class="addSacola btn bi bi-bag-plus"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card bg-black btn" style="width:200px">
                    <a href="productPage7.html" class="imgCard btn">
                        <img class="card-img-top" src="../assets/img/Jordan1KO/img1.webp" alt="Tenis"
                            style="width:100%">
                    </a>
                    <div class="card-body">
                        <p class="card-titulo text-white">Air Jordan 1 KO Paisley white </p>
                        <p class="preco text-white">R$ 1420,00</p><br />
                        <div class="row">
                            <div class="col-sm-6">
                                <a type="button" href="#" class="addFav btn bi bi-heart"></a>
                            </div>
                            <div class="col-sm-6">
                                <a type="button" href="#" class="addSacola btn bi bi-bag-plus"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card bg-black btn" style="width:200px">
                    <a href="productPage8.html" class="imgCard btn">
                        <img class="card-img-top" src="../assets/img/DunkLowPolaroid/img1.webp" alt="Tenis"
                            style="width:100%">
                    </a>
                    <div class="card-body">
                        <p class="card-titulo text-white">Nike SB Dunk Low Polaroid</p>
                        <p class="preco text-white">R$ 1150,00</p><br />
                        <div class="row">
                            <div class="col-sm-6">
                                <a type="button" href="#" class="addFav btn bi bi-heart"></a>
                            </div>
                            <div class="col-sm-6">
                                <a type="button" href="#" class="addSacola btn bi bi-bag-plus"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br />
        <a href="all.html" type="button" class="verTodos btn active">Ver Todos</a>
    </div>
    <div class="container-fluid bg-black">
        <footer id="myFooter">
            <div class="container-fluid bg-black text-white text-center mt-3">
                <p>&copy;Copyright 2022 | Flyin Kicks</p>
            </div>
        </footer>
    </div>
</body>

</html>