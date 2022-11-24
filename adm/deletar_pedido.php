<?php
    include ("conexao.php");
    require ("../autenticacao.php");

    if(isset($_GET['id'])){
        $id_pedido = $_GET['id'];

        $selecionar_pedido = "SELECT * FROM pedido WHERE id_pedido = $id_pedido ";
        $retorno_consulta = $mysqli->query( $selecionar_pedido) or die($mysqli->error);
        $pedido = $retorno_consulta -> fetch_assoc();
    }

    if(isset($_POST['btn_deletar'])){ //Se existir $_POST['confirmar] faça
    
        $sql_deletar = "DELETE FROM pedido WHERE id_pedido = '$id_pedido'";

        $deu_certo = $mysqli->query($sql_deletar) or die ($mysqli->error);

        
        
        if($deu_certo) {

            $_SESSION['resultado'] = "<div class='alert alert-success'>Pedido apagado. </div>";
            unset($_POST);             
        }
    }
    
?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="../femenino.css">
        <title>Deletar pedidos</title>
    </head>
    <body>
        <?php include("menu.php") ?>
        <div class="container">
            
            <h1>Deletar pedido</h1>
            <p><b>Identificador:</b> <?php if(isset($pedido['id_pedido'])){echo $pedido['id_pedido'];}else{ echo "Deletado"; }?> </p>
            <p><b>Nome do cliente:</b> <?php if(isset($pedido['nome'])){ echo $pedido['nome'];}else{ echo "Deletado"; }?> </p>
            <p><b>Email do cliente:</b> <?php if(isset($pedido['email'])){ echo $pedido['email'];}else{ echo "Deletado"; }?> </p>
            <p><b>Produto solicitado:</b> <?php if(isset($pedido['produto'])){ echo $pedido['produto'];}else{ echo "Deletado"; }?> </p>
            <p><b>Detalhes do pedido:</b> <?php if(isset($pedido['pedido'])){ echo $pedido['pedido'];}else{ echo "Deletado"; }?> </p>

            <?php
                if(isset($_SESSION['resultado'])){
                    echo $_SESSION['resultado']; 
                    unset($_SESSION['resultado']);                   
                }
            ?>
            
            

            <form action="" method="post">
                <input name="btn_deletar" class="btn btn-danger" type="submit" value="DELETAR">
                <a class="btn btn-warning" href="pedidos.php">Voltar</a>
            </form>
        </div>

    </body>
</html>