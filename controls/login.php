<?php
    require_once 'conexao.php';

    $conexao = novaConexao();

    $usuario = mysqli_real_escape_string($conexao, $_POST['login']);
    $senha = mysqli_real_escape_string($conexao, $_POST['pass']);

    $sql= "SELECT usuario, senha FROM cadastro WHERE usuario = '$usuario' AND senha = '$senha' ";

    $resultado = $conexao->query($sql);

    $rows = $resultado->num_rows;

    if($rows > 0){
        echo "
            <div class='alert alert-danger' role='alert'>
                Logando...
            </div>
        ";
            setcookie("login", $usuario);
            $_SESSION['user'] = $usuario;
    
            echo "<script>window.location.href = '../cad_projetos.php' </script> ";
        }else{
            echo "<script>window.location.href ='../login.php?login=invalido'</script> ";
        };  

    $conexao->close(); 
