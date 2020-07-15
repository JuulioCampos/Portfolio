<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\bootstrap\login.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta charset="utf-8">
    <title>Login</title>
</head>
<?php
        if (isset($_GET['login']) && $_GET['login'] == 'invalido'){ 
        echo " <div style='font-size:1.5rem; color:white; text-align:center;' class='bg-danger'>Usuário ou senha inválido.</div>";
           
        }elseif (isset($_GET['login']) && $_GET['login'] == 'deslogado'){ 
            echo " <div style='font-size:1.5rem; color:white; text-align:center;' class='bg-danger'>Usuário não logado!!</div>";   
		}

    ?>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h1>Login</h1>
    </div>

    <!-- Login Form -->
    <form action="controls\login.php" method="POST">
      <input type="text" class="fadeIn second" name="login" placeholder="usuario">
      <input type="password"  class="fadeIn third" name="pass" placeholder="senha">
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>
    <a href="index.php"><span class="backto">Voltar a página principal</span></a>
  </div>
</div>