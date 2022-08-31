<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.7">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/productPage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">.
    <style>
        @font-face {
        font-family: 'NauSea';
        src:url("../assets/fonts/NauSea.ttf") format("truetype");
    }
    </style>
    <title>Flyin Kicks</title>
    <link rel="shortcut icon" href="../assets/img/logo.ico">
</head>
<body>
    <header>
        <nav class="navbar bg-black fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler mr-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="lista bi bi-list"></span>
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <button type="button" class="close btn bi bi-x-lg accordion-body p-5 me-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    <div class="offcanvas-body text-center">
                        <ul class="navbar-nav pe-3">
                            <li class="logo nav-item">
                                <a href="../html/vitrine.php">
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
                                <a class="nav-link disabled" href="#">
                                    <p class="link">Contato</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <div class="mb-5 mt-4">
                                    <a href="login.php" class="login btn">Entrar</a>
                                </div>
                            </li>
                        </ul>
                        <form class="d-flex" method="post" action="pesquisa.php">
                            <input class="pesquisa form-control me-2 text-white text-center bg-black" type="search" id="codigo" name="codigo" placeholder="O que você está procurando?">
                            <button name="bt1" class="pesquisa btn bi bi-search text-white"></button>
                        </form>
                        
                    </div>
                </div>
                <a href="../html/vitrine.php" class="navbarLogo btn">Flyin Kicks</a>
                <a type="button" href="./bag.html" class="sacola btn bi bi-bag"></a>
            </div>
        </nav>
    </header>
   
    <?php
if(isset($_POST["bt1"])) pesquisar($_POST["codigo"]);	
if(isset($_GET["codigo"])) pesquisar($_GET["codigo"]);
	?>

        <div class="compreTbm container-fluid text-white" align="center"><br/>
            <h2 class="aviso text-center">Você também pode se interessar:</h2><br/><br/>
            <div class="row">
                <div class="col-sm">
                    <div class="card bg-black btn" style="width:200px">
                        <a href="#" class="imgCard btn">
                            <img class="card-img-top" src="../assets/img/Jordan1/img1.webp" alt="Tenis" style="width:100%">
                        </a>
                        <div class="card-body">
                            <p class="card-titulo text-white">Air Jordan 1 Low</p>
                            <p class="cardPreco text-white">R$549,99</p><br/>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a type="button" href="#" class="addFav btn bi bi-heart"></a>
                                </div>
                                <div class="col-sm-6">
                                    <a type="button" href="#" class="addSacola btn bi bi-bag-plus"></a>
                                </div>
                            </div>
                        </div>
                    </div><br/>
                </div>
                <div class="col-sm">
                    <div class="card bg-black btn" style="width:200px">
                        <a href="#" class="imgCard btn">
                            <img class="card-img-top" src="../assets/img/DunkHigh/img1.webp" alt="Tenis" style="width:100%">
                        </a>
                        <div class="card-body">
                            <p class="card-titulo text-white">Nike Dunk High SE</p>
                            <p class="cardPreco text-white">R$ 849,99</p><br/>
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
                        <a href="#" class="imgCard btn">
                            <img class="card-img-top" src="../assets/img/AirMax97/img1.webp" alt="Tenis" style="width:100%">
                        </a>
                        <div class="card-body">
                            <p class="card-titulo text-white">Nike Air Max 97 SE</p>
                            <p class="cardPreco text-white">R$ 839,99</p><br/>
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
                        <a href="#" class="imgCard btn">
                            <img class="card-img-top" src="../assets/img/AirMax95/img1.webp" alt="Tenis" style="width:100%">
                        </a>
                        <div class="card-body">
                            <p class="card-titulo text-white">Nike Air Max 95 SE</p>
                            <p class="cardPreco text-white">R$ 709,99</p><br/>
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




<?php
function pesquisar($codigo){
	$conexao = new mysqli("localhost", "root", "", "loja");
	$sql = "select * from produto where codigo=$codigo";
	$resultado = mysqli_query($conexao, $sql);
	if($reg = mysqli_fetch_array($resultado)){
		$nome  = $reg["nome"];
		$valor = $reg["valor"];
		$codigo = $reg["codigo"];
		$descricao = $reg["descricao"];
		$a = "a.jpg";
		$b = "b.jpg";
		$c = "c.jpg";

        
       echo "
       
       <div class='container-fluid text-white mt-5 p-5'>
        <div class='row'>
            <div class='col-lg-6'>
                <div id='demo' class='carousel slide' data-bs-ride='carousel'>
                    <div class='carousel-indicators'>
                        <button type='button' data-bs-target='#demo' data-bs-slide-to='0' class='carouselIndicator off active'></button>
                        <button type='button' data-bs-target='#demo' data-bs-slide-to='1' class='carouselIndicator off'></button>
                        <button type='button' data-bs-target='#demo' data-bs-slide-to='2' class='carouselIndicator off'></button>
                        <button type='button' data-bs-target='#demo' data-bs-slide-to='3' class='carouselIndicator off'></button>
                    </div>
                    <div class='carousel-inner'>
                        <div class='carousel-item active'>
                            <img src=../assets/img/caroucel/$codigo.jpg alt='tenis1' class='img-fluid' style='width: 100%'>
                        </div>
                        <div class='carousel-item'>
                            <img src=../assets/img/caroucel/$codigo$a alt='tenis2' class='img-fluid' style='width: 100%'>
                        </div>
                        <div class='carousel-item'>
                            <img src=../assets/img/caroucel/$codigo$b alt='tenis3' class='img-fluid' style='width:100%'>
                        </div>
                        <div class='carousel-item'>
                            <img src=../assets/img/caroucel/$codigo$c alt='tenis4' class='img-fluid' style='width:100%'>
                        </div>
                    </div>
                    <button class='carousel-control-prev' type='button' data-bs-target='#demo' data-bs-slide='prev'>
                    </button>
                    <button class='carousel-control-next' type='button' data-bs-target='#demo' data-bs-slide='next'>
                        <span></span>
                    </button>
                </div>
            </div>
            <div class='col-lg-6'>
                <div class='container text-center'>
                    <h1 class='titulo display-4'>$nome</h1>
                    <div class='descProduto'>
                        <h3 class='preco'>por R$ $valor</h3>
                        </br>
                        <p class='tamanhoTitulo'>Tamanho:</p>
                        <div class='col-sm-3 mx-auto'>
                            <select class='tamanhoSelect form-select bg-black'>
                                <option>39</option>
                                <option>40</option>
                                <option>41</option>
                                <option>42</option>
                                <option>43</option>
                                <option>44</option>
                                <option>45</option>
                                <option>46</option>
                            </select><br/><br/>
                        </div>
                        <div class='d-grid'>
                            <button type='button' class='btnAdd btn btn-lg btn-block'>Adicionar a Sacola</button>
                            <div class='mt-4'></div>
                            <button type='button' class='btnComprar btn btn-block'>Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='descricao container-fluid'>
            <br/>
            <h4><b>Descrição:</b></h4>
            <p>
            $descricao
            <br/><br/>
            </p>
        </div>
       
       ";

	} else {
		echo "
        </br>
        <h2 align='center' class='mt-5' >Não encontramos o código do tênis informado!</h2>
        </br>
        ";
        
	}
	mysqli_close($conexao);
}