<?php
    include ("conexao.php");
    //require ("../autenticacao.php");
    
    if(!isset($_SESSION)){
        session_start();
    }    
    
    if(isset($_GET['id'])){
        $id_adm = $_GET['id'];
        $selecionar_pedido = "SELECT * FROM adm_login WHERE id_login_adm = $id_adm";
        $retorno_consulta = $mysqli->query( $selecionar_pedido) or die($mysqli->error);
        $login = $retorno_consulta -> fetch_assoc();
    }    
    

    if (isset($_POST['bt_login'])){

        $login = $_POST["bt_login"];
        $senha = $_POST["bt_senha"];
            

        
        $sql_code = "UPDATE adm_login
        SET nome = '$login', 
        senha = '$senha'           
        WHERE id_login_adm = '$id_adm'";

        $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);

        
        if($deu_certo) {
            $selecionar_pedido = "SELECT * FROM adm_login WHERE id_login_adm = $id_adm ";
            $retorno_consulta = $mysqli->query( $selecionar_pedido) or die($mysqli->error);
            $login = $retorno_consulta -> fetch_assoc();
            $_SESSION['resultado'] = "<div class='alert alert-success'>Pedido alterado </div>";
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
        <title>Entre em contato</title>
    </head>
    <body>
        <?php include("menu.php") ?>
        <div class="container">
            <form class="form-horizontal" method="post">
                <h1>Identificador: <?php echo $login['id_login_adm']; ?></h1>
                <div class="mb-3"> 
                    <label class="form-label" for="">Login:</label>                   
                    <input type="text" class="form-control" placeholder="Digite o seu nome" name="bt_login"  value="<?php echo $login['nome']; ?>" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="">Senha:</label>                  
                    <input type="text" class="form-control" placeholder="Digite o seu email" name="bt_senha" value="<?php echo $login['senha']; ?>" required>
                </div>
               
                
                <?php
                    if(isset($_SESSION['resultado'])){
                        echo $_SESSION['resultado']; 
                        unset($_SESSION['resultado']);                   
                    }
                ?>
                <input class="btn btn-primary" type="submit" value="Alterar">
                <a class="btn btn-danger" href="consultar_login.php">Voltar</a>                
            </form>
        </div>
    </body>
</html>