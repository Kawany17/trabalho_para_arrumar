<?php
    if(!isset($_SESSION)){
        session_start();
    }
    session_unset();
    $_SESSION['id'] = "10";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial scale=1.0"> 
        <link rel="stylesheet" href="produto.css">
        <title>Meia Inteira</title>
        <!-- Ícones -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <!-- Fonte -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">

    </head>
    <body>
        <?php include ("menu.php");?>   
        <main>
            <section class="produto">
                
                <div>
                    <img src="../imagens/rainha.jpeg" alt="Produto Listrada Zebra">
                </div>
                <ul>
                    <li><div><h2>A Rainha do nada</h2></div></li>
                    <li><p>Exilada por Cardan no mundo mortal, Jude se encontra impotente e frustrada enquanto planeja reivindicar tudo que Cardan tomou dela. A oportunidade surge com sua irmã gêmea, cuja vida está em perigo. Para salvá-la de uma situação tenebrosa envolvendo Locke, Jude decide voltar ao Reino das Fadas se passando por Taryn.</p></li>
                    
                    <li><h3>Autora: Holly Black</h3></li>
                    
                    <li>
                        <form action="../contato.php" method="get">
                            <button type="submit">Comprar online</button>
                        </form> 
                    </li>
                </ul>
            </section>
        </main>
            
<br>
        <footer class="fixar">
            <ul>               
                <li> <a href="institucional.php"> Quem somos </a></li>
                <li> <a href="contatoPI.php"> Contato </a><li>
            </ul>
        </footer>

    </body>
</html>