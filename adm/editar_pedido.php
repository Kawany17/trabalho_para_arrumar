<?php
    include ("conexao.php");
    require ("../autenticacao.php");
    if(!isset($_SESSION)){
        session_start();
    }    
    
    if(isset($_GET['id'])){
        $id_pedido = $_GET['id'];
        $selecionar_pedido = "SELECT * FROM atividade_alunos_sesc WHERE id_pedido = $id_pedido ";
        $retorno_consulta = $mysqli->query( $selecionar_pedido) or die($mysqli->error);
        $pedido = $retorno_consulta -> fetch_assoc();
    }    
    
    if (isset($_POST['bt_nome'])){

        $nome = $_POST["bt_nome"];
        $email = $_POST["bt_email"];
        $produto = $_POST["bt_produto"];        
        $pedido = $_POST["bt_pedido"];        

        
        $sql_code = "UPDATE pedido
        SET nome = '$nome', 
        email = '$email',
        produto = '$produto',
        pedido = '$pedido'        
        WHERE id_pedido = '$id_pedido'";

        $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);

        if($deu_certo) {
            $selecionar_pedido = "SELECT * FROM pedido WHERE id_pedido = $id_pedido ";
            $retorno_consulta = $mysqli->query( $selecionar_pedido) or die($mysqli->error);
            $pedido = $retorno_consulta -> fetch_assoc();
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
                <h1>Identificador: <?php echo $id_pedido; ?></h1>
                <div class="mb-3"> 
                    <label class="form-label" for="">Nome:</label>                   
                    <input type="text" class="form-control" placeholder="Digite o seu nome" name="bt_nome"  value="<?php echo $pedido['nome']; ?>" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="">Email:</label>                  
                    <input type="text" class="form-control" placeholder="Digite o seu email" name="bt_email" value="<?php echo $pedido['email']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="">Produto:</label>                                      
                    <input type="text" class="form-control" name="bt_produto" value="<?php echo $pedido['produto']; ?>" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label" for="">Pedido:</label>                                      
                    <textarea class="form-control" rows="3"  placeholder="Digite o seu tamanho..." name="bt_pedido" required><?php echo $pedido['pedido']; ?></textarea>
                </div> 
                <?php
                    if(isset($_SESSION['resultado'])){
                        echo $_SESSION['resultado']; 
                        unset($_SESSION['resultado']);                   
                    }
                ?>
                <input class="btn btn-primary" type="submit" value="Alterar">
                <a class="btn btn-danger" href="pedidos.php">Voltar</a>                
            </form>
        </div>
    </body>
</html>