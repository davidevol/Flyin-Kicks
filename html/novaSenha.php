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
    <title>Nova Senha - Flyin Kicks</title>
    <link rel="shortcut icon" href="../assets/img/logo.ico">
</head>


<body>







<div class="container">
	<div class="row" >
		<div class="text-center text-white">
    <form method="POST" action="" class="form"> 
      <div id="senhabox" class="col-md-12 align-content-center">
            <div class="panel panel-default" >
              <div class="panel-body">
                <div class="text-center">
                  
                  <h3><i class="fa fa-user"></i></h3>
                  <h2 style="color:white" class="text-center">Digite a nova senha</h2>
                 
                  <div class="panel-body">
   
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input type="password" name="senha" placeholder="Digite sua nova senha" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <br>
                        <button type="submit"  name="btnRedefinir" class="btn btn-secondary btn-lg" onclick="validar();">Redefinir</button>   <!-- onclick="validar();" -->
                      </div>
                      </div>
                  
                    </form>
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
   
  
</script>

<?php
require_once '../conexao/cadastroCRUD.php';
require_once '../conexao/funcoes.php';
require_once '../conexao/conexao.php';

$func = new Funcoes();
$cliente = new cliente();



function isValidPassword($senha) {
  $pattern = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z\d].\S{8,36}$/';
  return preg_match($pattern, $senha) ? true : false;
}


      if(isset($_POST['btnRedefinir'])){
        if(isValidPassword($_POST['senha'])){
          $_POST['email'] = $_GET['email'];
            if($cliente->RedefinirSenha($_POST) == 'ok'){
          echo '<script type="text/javascript">alert("Senha alterada com sucesso")</script>';
          header("location: ../html/login.php");
    }
    }
    else{
      echo '<script type="text/javascript">alert("certifique-se que a senha atenda aos padroes, letra maiuscula minuscula e numeros!!")</script>';
  }
  }
   


?>