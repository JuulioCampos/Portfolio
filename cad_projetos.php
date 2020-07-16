<?php
  require_once 'controls/conexao.php';
  require_once 'controls/auth_acess.php';

?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\bootstrap\login.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta charset="utf-8">
    <title>cadastro de projeto</title>
</head>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h1>Cadastro de projetos</h1>
    </div>

    <!-- Login Form -->
    <form action="controls\cadastrar_projeto.php" method="POST" enctype="multipart/form-data">
      <input type="text"   name="titulo"    placeholder="Titulo">
      <input type="text"   name="descricao" placeholder="Descricao">
      <input type="text"   name="link"      placeholder="Link git">
      <input  type="file" name="foto" />
      <input type="submit" class="fadeIn fourth" name="cadastrar" value="Entrar">
    </form>
    <a href="controls/logout.php">
        <input style="background-color:rgb(248, 83, 83)" type="submit" class="fadeIn fourth" name="Sair" value="Sair">
    </a>
     <br/>
    <a href="index.php"><span class="backto">Voltar a página principal</span></a>

  </div>
</div>
