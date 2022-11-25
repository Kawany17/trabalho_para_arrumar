<?php
    include("conexao.php");

    $sql_mensagens = "SELECT * FROM adm_login";
    $consulta_mensagens = $mysqli->query($sql_mensagens) or die($mysqli->error);
    $quantidade_mensagens = $consulta_mensagens->num_rows; //retomar quantidade de linhas

     


?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <title>Consultar os logins</title>
    </head>
    <body>
       
        <div class="container">
        <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <th> ID </th>
                <th> login </th>
                <th> Senha </th>
                <th> Funcionalidades </th>
            </thead>
            <tbody>
                <?php if ( $quantidade_mensagens == 0){ ?>
                <tr>
                    <td colspan="6"> Nenhuma mensagem foi cadastrada.</td>
                </tr>
                <?php    } else {
                    while ($mensagem = $consulta_mensagens -> fetch_assoc()){
                   
                ?>
                    <tr>

                    <td><?php echo $mensagem['id_login_adm']; ?></td>
                    <td><?php echo $mensagem['nome']; ?></td>
                    <td><?php echo $mensagem['senha']; ?></td>                   
                    
                    <td>
                        
                    <a class="btn btn-default" href="editar_login.php?id=<?php echo $mensagem['id_login_adm']; ?>" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a>
                    <a class="btn btn-default" href="deletar_login.php?id=<?php echo $mensagem['id_login_adm']; ?>" role="button"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Deletar</a>
        </td>
        </tr>
                
            <?php
            }
            ?>

        <?php
            }
            ?>
        </tbody>


        
        </table
        </div>
        </div>

        
    </body>
</html>