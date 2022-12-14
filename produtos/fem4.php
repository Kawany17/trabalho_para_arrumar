<?php
    if(!isset($_SESSION)){
        session_start();
    }
    session_unset();
    $_SESSION['id'] = "4";
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
                    <img src="../imagens/ste.png" alt="Produto Listrada Zebra">
                </div>
                <ul>
                    <li><div><h2>O Iluminado</h2></div></li>
                    <li><p>O Iluminado centra-se na vida de Jack Torrance, um aspirante a escritor e alcoólatra em recuperação que aceita o emprego de zelador na baixa temporada do famoso Hotel Overlook, nas montanhas do Colorado, para onde se muda com sua esposa Wendy e seu filho Danny.
</p></li>
                    
                    <li><h3>Autor: Stephen</h3></li>
                   
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