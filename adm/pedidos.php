<?php
    include ("conexao.php");
    require ("../autenticacao.php");

    $selecionar_sql = "SELECT * FROM atividade_alunos_sesc";

    $retorno_consulta = $mysqli->query( $selecionar_sql) or die($mysqli->error);
    $quantidade_pedidos = $retorno_consulta->num_rows; // Retornar quantidade de linhas
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
        
        <title>Document</title>
    </head>
    <body>
        <?php include("menu.php") ?>

        <div class="container">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <th>Identificador</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Produto</th>                       
                        <th>Data</th>
                        <th colspan="2">Ações</th>
                    </thead>
                    <tbody>
                        <?php
                            if ( $quantidade_pedidos == 0){ ?>
                            <tr>
                                <td colspan="5"> Nenhuma mensagem foi cadastrada.</td>
                            </tr>

                        <?php   } else { 

                            while ($mensagem = $retorno_consulta -> fetch_assoc()){
                                $data = date("d/m/Y H:i", strtotime($mensagem['data']));

                                
                        ?>
                                <tr>

                                    <td><?php echo $mensagem['id_pedido']; ?></td>
                                    <td><?php echo ($mensagem['nome']); ?></td>
                                    <td><?php echo ($mensagem['email']); ?></td>
                                    <td><?php echo ($mensagem['produto']); ?></td>                                    
                                    <td><?php echo $data; ?></td>
                                    <td>
                                        <a class="btn btn-default" href="editar_pedido.php?id=<?php echo $mensagem['id_pedido']; ?>" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a>
                                        <a class="btn btn-default" href="deletar_pedido.php?id=<?php echo $mensagem['id_pedido']; ?>" role="button"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Deletar</a>
                                    </td>

                                </tr> 

                            <?php

                                }                        

                            ?>  

                        <?php

                        }                        

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>