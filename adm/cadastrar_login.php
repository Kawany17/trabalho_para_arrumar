<?php
    include ("conexao.php");
    require ("../autenticacao.php");

    if(isset($_POST['bt_login'])){

        $login = $_POST['bt_login'];
        $senha = password_hash ($_POST['bt_senha'], PASSWORD_DEFAULT);

        $deu_certo = $mysqli->query("INSERT INTO atividade_alunos_sesc (nome, senha) VALUES ('$login', '$senha')") or die ($mysqli->error);

        if($deu_certo){
            $_SESSION['resultado'] = "<div class='alert alert-success'>Administrador cadastro com sucesso!!!</div>";
            unset($_POST);
        }

    }
?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="../femenino.css">
        <title>Cadastrar Login</title>
    </head>
    <body>
        <?php include("menu.php") ?>
        <div class="container">
            <form class="form-horizontal" method="post">
                <h1>Cadastrar administrador</h1>
                <div class="mb-3"> 
                    <label class="form-label" for="">Digite um novo login:</label>                   
                    <input type="text" class="form-control" placeholder="Digite o seu nome" name="bt_login" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="">Digite uma nova senha:</label>                  
                    <input type="text" class="form-control" placeholder="Digite uma nova senha" name="bt_senha" required>
                </div>
                
                <?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);                   
                    }
                ?>
                <input class="btn btn-primary" type="submit" value="Cadastrar">
                <a href="index.php" class="btn btn-danger">Voltar</a>
                <?php
                    if(isset($_SESSION['resultado'])){
                        echo $_SESSION['resultado']; 
                        unset($_SESSION['resultado']);                   
                    }
                ?>
            </form>
        </div>
    </body>
</html>