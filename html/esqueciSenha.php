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



                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 style="color:white" class="text-center">Esqueceu sua senha?</h2>
                  <p style="color:white">Você pode resetar a sua senha aqui.</p>
                  <div class="panel-body">
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="txtEmail" name="email" placeholder="endereço de email" class="form-control"  type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <br>
                        <input type="submit" name="btnVerificaEmail" class="btn btn-secondary btn-lg" value="Verificar Email" onclick="validar()">
                      </div>
                      </div>
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
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
<script lang="javascript">
  function validar(){
      if(txtEmail.value.length<6 || 
      txtEmail.value.indexOf("@") <=0 ||
      txtEmail.value.lastIndexOf(".")
      <=txtEmail.value.indexOf("@")  ){
          alert("informe um email valido !!");
          txtEmail.focus();
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







if(isset($_POST['btnVerificaEmail'])){
  $email = $cliente->queryVerificaEmail($_POST);
  if($email) {
    header("location: ../html/novaSenha.php?email=".$email['email']);
  }

else{

  echo '<script type="text/javascript">alert("email nao encontrado")</script>';
}
}  
      
     
?>





  