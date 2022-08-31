<?php
require_once '../conexao/cadastroCRUD.php';
require_once '../conexao/funcoes.php';
require_once '../conexao/conexao.php';
$func = new Funcoes();
$cliente = new cliente();

if(isset($_POST['submit'])){
    if($cliente->queryInsert($_POST) == 'ok' ){
        echo '<script type="text/javascript">alert("cadastro realizado com sucesso!!")</script>';
        header("location: ../html/login.php");
    }
    else{
        echo '<script type="text/javascript">alert("erro em cadastrar")</script>';
    }
}
?>

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
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">.
    <style>
        @font-face {
        font-family: 'NauSea';
        src:url("../assets/fonts/NauSea.ttf") format("truetype");
    }
    </style>
    <title>Cadastrar - Flyin Kicks</title>
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
                                <a href="../index.html">
                                    <img src="../assets/img/logo.png" alt="logo" class="mb-5" style="width: 75px;">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active mt-2" aria-current="page" href="../index.html">
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
                                    <a href="login.html" class="login btn">Entrar</a>
                                </div>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="pesquisa form-control me-2 text-white text-center bg-black" type="search" placeholder="O que você está procurando?" aria-label="Search">
                        </form>
                    </div>
                </div>
                <a href="../index.html" class="navbarLogo btn">Flyin Kicks</a>
                <a type="button" href="#" class="sacola btn bi bi-bag"></a>
            </div>
        </nav>
    </header>







        <div id="cadastro">
            <div class="container">


                <h3 class="text-center text-white">Cadastro</h3>
                <div class="card bg-black text-center text-white">
                    <form method="POST" action="" class="form">      <!--  action="../conexao/cadastro.php" -->
                        <div class="form-group">
                            <label class="form-label"><i class="fa fa-user"></i> Nome: </label><br/>
                            <input type="name" name="nome" id="txtName" required
                            class="input form-control text-white bg-black"
                            placeholder="Digite seu nome"
                            pattern="[A-z\s]{3-12}" />
                            <br/>
                        </div>




                        
                        <div class="form-group">
                            <label class="form-label"><i class="fa fa-user"></i> Sobrenome: </label><br/>
                            <input type="name" name="sobrenome" id="txtLastname" required
                            class="input form-control text-white bg-black"
                            placeholder="Digite seu sobrenome"
                            pattern="[A-z\s]{3-50}" />
                            <br/>
                        </div>
                        <div class="form-group">
                            <label class="form-label"><i class="fa fa-envelope"></i> e-mail: </label><br/>
                            <input type="email" name="email" id="txtEmail" required
                            class="input form-control text-white bg-black"
                            placeholder="Digite seu e-mail" />
                            <br/>
                        </div>
                        <div class="form-group">
                            <label class="form-label"><i class="fa fa-key"></i> Senha: </label><br/>
                            <input type="password" name="senha" id="txtPassword" required
                            class="input form-control text-white bg-black"
                            title="A senha precisa conter 8 caracteres com pelo menos um número, uma letra maíuscula e uma minúscula"
                            placeholder="Digite sua senha"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
                            <br/>
                        </div>
                        <div class="form-group">
                            <label class="form-label"><i class="fa fa-key"></i> Repetir Senha: </label><br/>
                            <input type="password" name="confirmSenha" id="confirmPassword" required
                            class="input form-control text-white bg-black"
                            title="Reinsira a senha corretamente."
                            placeholder="Digite sua senha novamente" 
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/>
                            <br/>
                        </div>
                        <div class="form-group">
                            <label class="form-label"><i class="fa fa-mobile-phone"></i> Telefone: </label><br/>
                            <input type="tel" name="telefone" id="phoneNumber" required
                            class="input form-control text-white bg-black"
                            placeholder="99999-9999"
                            pattern="[0-9]{5}-[0-9]{4}" />
                            <br/>
                        </div>
                        <div class="form-group">
                            <label class="form-label"><i class="fa fa-map-marker"></i> Endereço: </label><br/>
                            <input type="text" name="endereco" id="txtEndereco" required
                            class="input form-control text-white bg-black"
                            placeholder="Digite seu endereço"
                             />
                            <br/>
                        </div>
                        <p>Ao clicar em "Cadastre-se", você estará de acordo com nossos <a href="#" style="color:dodgerblue">Termos</a> e <a href="#" style="color:dodgerblue">Política de Dados</a>.</p>
                        <div class="form-group">
                            <input type="submit" id="btnCadastrar" name="submit" class="btn btn-secondary btn-lg" value="Cadastre-se" onclick="validar()">
                        </div>
                        <p>Já tem cadastro? Faça login <a href="../html/login.php" style="color:dodgerblue">aqui</a>.</p>
                    </form>
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

<script  lang="javascript">
    
    function validar(){
        if(txtName.value.length < 3){
            alert("Por favor, preencha seu nome corretamente.");
            txtName.focus();
            return false;
        }
        if(txtLastname.value.length <= 3){
            alert("Por favor, preencha seu sobrenome corretamente.");
            txtLastname.focus();
            return false;
        }
        if(txtEmail.value.length<6 || txtEmail.value.indexOf("@") <=0 || txtEmail.value.lastIndexOf(".") 
            <= txtEmail.value.indexOf("@")){
            alert("Por favor, preencha seu e-mail corretamente.");
            txtEmail.focus();
            return false;
        }
        if(txtPassword.value.length <= 8){
            alert("Coloque uma senha válida, de acordo com os padrões.")
            txtPassword.focus();
            return false;
        }
        if(confirmPassword.value !== txtPassword.value){
            alert("Repita a senha corretamente.")
            confirmPassword.focus();
            return false;
        }
        if(phoneNumber.value.length <= 8){
            alert("Por favor, preencha o telefone corretamente.")
            ohoneNumber.focus();
            return false;
        }      
        
      
       
        // window.location = '../html/login.php';  
    }    
</script>