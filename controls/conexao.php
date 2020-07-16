<?php

    function novaConexao($banco = 'jpserr41_Portfolio'){
        $servidor = 'localhost';
        $usuario = 'jpserr41_root';
        $senha = 'Social07.';

        $conexao = new mysqli($servidor, $usuario, $senha, $banco);

        if($conexao->connect_error){
            echo ('erro de conexao: '. $conexao->connect_error);
            exit();
        }
        return $conexao;
    }
