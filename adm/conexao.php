<?php
    
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $banco="alunos";

    $mysqli = new mysqli($servidor, $usuario, $senha, $banco);

    if ($mysqli->connect_errno){
        echo "Não deu certo " . $mysqli->connect_error;
        exit();
    }

?>
    