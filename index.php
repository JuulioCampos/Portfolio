<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>WEB-DEV Julio Campos</title>
    <meta name="description" content="Olá, me chamo Julio Campos e sou estudante de desenvolvimento de sistemas.">
    <link rel="icon" type="image/png" sizes="256x256" href="assets/img/profile.png">
    <link rel="icon" type="image/png" sizes="256x256" href="assets/img/profile.png">
    <link rel="icon" type="image/png" sizes="256x256" href="assets/img/profile.png">
    <link rel="icon" type="image/png" sizes="256x256" href="assets/img/profile.png">
    <link rel="icon" type="image/png" sizes="256x256" href="assets/img/profile.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<script type="text/javascript">
    function verifica() {
    if (document.forms[0].email.value.length == 0) {
        alert('Por favor, informe o seu EMAIL.');
        document.frmEnvia.email.focus();
        return false;
    }
    return true;
    }
    
    function checarEmail(){
    if( document.forms[0].email.value=="" 
    || document.forms[0].email.value.indexOf('@')==-1 
        || document.forms[0].email.value.indexOf('.')==-1 )
        {
        alert( "Por favor, informe um E-MAIL válido!" );
        return false;
        }
}

function mask(o, f) {
  setTimeout(function() {
    var v = mphone(o.value);
    if (v != o.value) {
      o.value = v;
    }
  }, 1);
}

function mphone(v) {
  var r = v.replace(/\D/g, "");
  r = r.replace(/^0/, "");
  if (r.length > 10) {
    r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
  } else if (r.length > 5) {
    r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
  } else if (r.length > 2) {
    r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
  } else {
    r = r.replace(/^(\d*)/, "($1");
  }
  return r;
}
</script>
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav" style="height: 59px;">
        <div class="container"><a class="navbar-brand d-flex justify-content-start js-scroll-trigger" href="#page-top" style="width: 210px;font-size: 18px;">Julio Campos - DEV WEB</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded"
                data-bs-hover-animate="rubberBand" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">home</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Sobre</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">contato</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead bg-primary text-white text-center">
        <div class="container"><img class="rounded-circle img-fluid d-block mx-auto mb-5" data-bs-hover-animate="swing" src="assets/img/76958427_2535670949861428_5608791804661989376_n.jpg" width="250px">
            <h1>Julio Campos</h1>
            <hr class="star-light">
            <h2 class="font-weight-light mb-0">Web Developer</h2>
        </div>
    </header>
    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary">Portfolio</h2>
            <hr class="star-dark mb-5">
            <div class="row">

                <?php 
                    require_once 'controls/conexao.php';

                    $conexao = novaConexao();

                    $sql = "SELECT * FROM projeto"; 


                    $resultado = $conexao->query($sql);

                    $projetos = [];

                    if($resultado->num_rows > 0 ){
                        while($row = $resultado->fetch_assoc()){
                            $projetos[] = $row;
                        }
                    }else if($conexao->error){
                        echo 'Falha: '. $conexao->error;
                    }
                    $conexao->close();
                
                foreach($projetos as $projeto   ):?>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-1">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets\img\portfolio\<?= $projeto['img'];?>"></a>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <section id="about" class="bg-primary text-white mb-0">
        <div class="container">
            <h2 class="text-uppercase text-center text-white">Sobre</h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="lead">Olá, me chamo Julio Campos e sou estudante de Analise e desenvolvimento de sistemas pela Faculdade de tecnologia de Americana.</p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="lead">Meus conhecimentos são:<br>HTML<br>CSS<br>JAVASCRIPT<br>PHP<br>BOOTSTRAP</p>
                </div>
            </div>
            <div class="text-center mt-4"></div>
        </div>
    </section>


    <section id="contact">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-0">Contato</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form action="controls\enviar_email.php" mathod="REQUEST" id="contactForm" name="sentMessage" novalidate="novalidate">
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>Nome</label><input class="form-control" type="text" id="name" required="" placeholder="Nome" autocomplete="on" inputmode="latin-name" name="nome"><small class="form-text text-danger help-block"></small></div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>Email </label><input class="form-control" type="email" id="email" required="" onblur="checarEmail();" placeholder="Email " inputmode="email" name="email"><small class="form-text text-danger help-block"></small></div>
                        </div>
                        <div class="control-group">
                            <div  class="form-group floating-label-form-group controls mb-0 pb-2"><label>Telefone / WhatsApp</label><input  onkeypress="mask(this, mphone);" id="phone" class="form-control" type="tel" required="" placeholder="Telefone / WhatsApp" inputmode="tel" name="telefone"><small class="form-text text-danger help-block"></small></div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-5 pb-2"><textarea class="form-control" id="message" required="" placeholder="Mensagem" rows="5" name="mensagem"></textarea><small class="form-text text-danger help-block"></small></div>
                        </div>
                        <div id="success"></div>
                        <div class="d-flex justify-content-center align-items-center form-group"><button class="btn btn-primary d-flex justify-content-center align-items-center btn-xl" id="sendMessageButton" type="submit">ENVIAR</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-xl-2 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Contato</h4>
                    <p>(19)99197-8949<br>contato@juliocampos.online</p>
                </div>
                <div class="col-md-4 offset-xl-0 mb-5 mb-lg-0">
                    <h4 class="text-uppercase">Redes sociais</h4>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" data-bs-hover-animate="swing" href="https://github.com/JuulioCampos/"><i class="fa fa-facebook fa-fw" data-bs-hover-animate="swing"></i></a></li>
                        <li class="list-inline-item"></li>
                        <li class="list-inline-item"></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" data-bs-hover-animate="swing" href="https://www.facebook.com/JuuulioCampos"><i class="fa fa-github fa-fw" data-bs-hover-animate="swing"></i></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="clearfix"></div>
                <div class="clearfix"></div>
                <div class="clearfix"></div>
            </div>
        </div>
    </footer>
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright ©&nbsp;Julio Campos 2020</small></div>
    </div>
    <div class="d-lg-none scroll-to-top position-fixed rounded"><a class="d-block js-scroll-trigger text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
        <?php foreach($projetos as $projeto   ):?>
        <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <h2 class="text-uppercase text-secondary mb-0"><?= $projeto['titulo'];?></h2>
                                    <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="assets\img\portfolio\<?= $projeto['img'];?>">
                                    <p class="mb-5"><?= $projeto['descricao'];?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" href="#"><i class="fa fa-close"></i>&nbsp;Fechar Projeto</a><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button"
                            href="http://<?= $projeto['link'];?>"><i class="fa fa-check"></i>&nbsp;Visualizar Projeto</a></div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>