

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.7">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">
    <style>
        @font-face {
        font-family: 'NauSea';
        src:url("../assets/fonts/NauSea.ttf") format("truetype");
    }
    </style>
    <title>Flyin Kicks - O melhor site de Sneakers do Brasil!</title>
    <link rel="shortcut icon" href="../assets/img/logo.ico">
    <title>Login</title>
</head>
<body>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div class="card bg-black text-white">
                    <img class="mx-auto" src="../assets/img/logo.png" alt="thumb" width="72" height="72">
                    <h3 class="mt-5 text-center">Entrar</h3>
                    <form id="login-form" class="form" action="" method="post">
                        <div class="form-group">
                            <label for="email" class="text-white ">E-mail:</label><br>
                            <input type="text" name="email" id="inputEmail" class="input form-control text-white bg-black" placeholder="digite seu e-mail" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-white">Senha:</label><br>
                            <input type="password" name="senha" id="inputSenha" class="input form-control text-white bg-black" placeholder="digite sua senha" required>
                        </div>
                        <p class="esqueci text-muted text-center mt-2">Esqueceu a senha? <a href="../html/esqueciSenha.php" class="linkEsqueciSenha">Clique aqui</a></p>
                        <div class="row">
                            <div class="col-sm-6">
                            <a href="cadastro.php" class="btnCadastro btn ms-auto">Criar conta</a>
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" onclick="validar();" name="btnEntrar" class="btnLogin btn ms-auto">Entrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script lang="javascript">
    function validar(){
        if(inputSenha.value.length <= 8){
            alert("Informe uma senha válida!!!");
            inputSenha.focus();
            return false;
        }
        if(inputEmail.value.length<6 || 
        inputEmail.value.indexOf("@") <=0 ||
        inputEmail.value.lastIndexOf(".")
        <=inputEmail.value.indexOf("@")  ){
            alert("informe um email valido !!");
            inputEmail.focus();
            return false;
        }
     
        
    }    
  
</script>


<?php

require_once '../conexao/cadastroCRUD.php';
require_once '../conexao/funcoes.php';
require_once '../conexao/conexao.php';
$func = new Funcoes();
$cliente = new cliente();


if(isset($_POST['btnEntrar'])){
    $sessao = $cliente->login($_POST);
    if($sessao){
       session_start();
        $_SESSION['usuario']=$sessao;
        var_dump($_SESSION);
        echo '<script type="text/javascript">alert("login realizado com sucesso")</script>';
      header("location: vitrine.php");
        
    }
    else{
        echo '<script type="text/javascript">alert("email ou senha errado")</script>';
    }
}
?>
    