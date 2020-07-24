<?php
ini_set('display_errors', 1);

error_reporting(E_ALL);


    //   <!-- codigo requisição -->
        
      $from = "Julio_Neto@icloud.com";
      $assunto = "Contato pelo portfolio";
      $email = $_REQUEST['email'];
      $nome = $_REQUEST['nome'];
      $telefone = $_REQUEST['telefone'];
      $mensagem = $_REQUEST['mensagem'];

    
       if(empty($email) && empty($nome) && empty($telefone)) {
           echo "<script> alert('Informações incorretas, tente novamente.'); window.location.href ='../index.php?mail=erro'</script>" ;
       }else{
           echo "<script> alert('email enviado com sucesso');  window.location.href ='../index.php?mail=sucesso'</script>" ;
       }
        
    


          $corpoEmail = "<strong> Mensagem de Contato  <br> <br></strong>";
          $corpoEmail .= "<strong> Nome: </strong> $nome";
          $corpoEmail .= "<br><strong> E-mail: </strong> $email";
          $corpoEmail .= "<br><strong> Telefone: </strong> $telefone";
          $corpoEmail .= "<br><strong> Mensagem: </strong> $mensagem";
          $header = "Content-Type: text/html; charset= utf-8 \n";
          $header .= "From: $email Reply-to: $email \n";


          @mail($from, $assunto, $corpoEmail, $header); ?>




