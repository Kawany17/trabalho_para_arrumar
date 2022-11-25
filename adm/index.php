<?php
    include ("conexao.php");
   require ("../autenticacao.php");
?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="../femenino.css">
        <title>Document</title>
    </head>
    <body>
        <?php include("menu.php") ?>
        <div class="container">
            <br>
            <h2>Pedidos</h2>
            <h4>Consultar Pedidos <a class="btn btn-warning" href="pedidos.php" target="_blank">Acessar</a></h4>
            <h4>Apagar Pedidos <a class="btn btn-warning" href="#" target="_blank">Acessar</a></h4>
            <h4>Alterar Pedidos <a class="btn btn-warning" href="#" target="_blank">Acessar</a></h4>
            <hr>
            <h2>ADM - LOGIN</h2>
            <h4>Cadastrar ADM - Login <a class="btn btn-warning" href="cadastrar_login.php" target="_blank">Acessar</a></h4>
            <h4>Apagar ADM - Login <a class="btn btn-warning" href="#" target="_blank">Acessar</a></h4>
            <h4>Alterar ADM - Login <a class="btn btn-warning" href="#" target="_blank">Acessar</a></h4>
            <h4>Consultar ADM - Login <a class="btn btn-warning" href="#" target="_blank">Acessar</a></h4>
        </div>
        <div class="container text-center">
            <a class="btn btn-danger" href="../sair.php">Sair do sistema</a>
            
        </div>
    </body>
</html>