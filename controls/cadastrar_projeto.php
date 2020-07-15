<?php
    require_once 'conexao.php';

    $conexao = novaConexao();

    if(isset($_POST['cadastrar'])){
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $link =  $_POST['link'];
        $foto = $_FILES["foto"];
        var_dump($foto);

        if(!empty($foto['name'])){
            $largura = 1920;
            $altura = 1080;
            $tamanho = 1500000;

            $error = array();

            if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
                $error[1] = "isso não é uma imagem.";
            }
            $dimensoes = getimagesize($foto["tmp_name"]);

            if($dimensoes[0] > $largura) {
                $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
            }
            if($foto["size"] > $tamanho) {
                    $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
            }
            
            if (count($error) == 0) {
            
                // Pega extensão da imagem
                preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
                // Gera um nome único para a imagem
                $nome_imagem = md5(uniqid(time())). "." . $ext[1];
                // Caminho de onde ficará a imagem
                $caminho_imagem = "../assets/img/portfolio/" . $nome_imagem;
                // Faz o upload da imagem para seu respectivo caminho
                move_uploaded_file($foto["tmp_name"], $caminho_imagem);
            
                // Insere os dados no banco
                $sql = "INSERT INTO projeto(titulo, descricao, img, link) VALUES ('$titulo', '$descricao', '$nome_imagem', '$link')";

        
            
                // Se os dados forem inseridos com sucesso
                if ($sql){
                    echo "<script> alert('Projeto salvo com sucesso!')</script>";
                }
            }
            // Se houver mensagens de erro, exibe-as
            if (count($error) != 0) {
                foreach ($error as $erro) {
                    echo "<script> alert('$erro. Tente novamente!')</script>";
                }
            }
                $resultado = $conexao->query($sql);

                if($conexao->error){
                    echo 'Falha: '. $conexao->error;
                }
                $conexao->close();
                echo "<script>window.location.href ='../cad_projetos.php?upload=sucesso'</script>";
        }
    }
    ?>
