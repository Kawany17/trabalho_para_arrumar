<?php
    include("adm/conexao.php");
    if(isset($_POST['bt_login'])){ 
        $login = $_POST['bt_login'];
        $senha = $_POST['bt_senha'];
        $sql = "SELECT * FROM  atividade_alunos_sesc WHERE nome =  '$login' limit 1";
        $sql_exec = $mysqli->query($sql) or die ($mysqli->error);
        $usuario = $sql_exec->fetch_assoc();
        
        
        if($usuario == null){            
            echo "<script>alert('login ou senha incorreto!!');</script>";
            header("location:login.php");
        }
        if(password_verify($senha, $usuario['senha'])){
            if(!isset($_SESSION)){ // Verificar se a seção 
                session_start();
        
                $_SESSION['login_nome'] = $usuario['id_login_adm'];
                header("location:adm/index.php");        
            }
        }else{
            echo("Usuário não autenticado");
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
        <link rel="stylesheet" href="femenino.css">
        <title>Área Restrita</title>
    </head>
    <body>
        <?php include("menu.php") ?>
        <br>
        <div class="container col-11 col-md9" id="form-container">
            <div class="row align-items-center gx-5">
                <div class="col-md-6 order-md-2">
                    <h2>Faça o login para continuar:</h2>
                    <form action="" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="login" name="bt_login" placeholder="Digite o seu login">
                            <label class="form-label" for="login">Login:</label>
                        </div> 
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="senha" name="bt_senha" placeholder="Digite a sua senha">
                            <label class="form-label" for="senha">Senha:</label>
                        </div>
                        <input type="submit" class="btn btn-warning" value="Entrar">
                        <a href="index.php" class="btn btn btn-danger">Sair</a>
                    </form> 
                </div>
                <div class="col-md-6 order-md-1">
                    <div class="col-12">
                        <img src="imagens/sesc.png" alt="Entrar no Sistema" class="img-fluid">
                    </div> 
                </div>
            </div>
        </div>
    </body>
</html>