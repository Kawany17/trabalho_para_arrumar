<?php
    if(!isset($_SESSION)){
        session_start();
    }
    session_unset();
    $_SESSION['id'] = "16";    
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
                    <img src="../fotos/teniscoraçao.png" alt="Produto Listrada Zebra">
                </div>
                <ul>
                    <li><div><h2>Tênis Preto Infantil- Confortavel </h2></div></li>
                    <li><p>Tênis femenino confortável</p></li>
                    <li>Marca: Moleca</li>                
                    <li>Tamanho: <button>23 ao 28</button> <button>29 ao 33</button></li>
                    <li>Variante: <button>Única</button></li>
                    <li>Quantidade: 
                        <select name="quantidade" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </li>
                    <li><h3>R$150,00</h3></li>
                    <li>Até x2 no cartão sem juros</li>
                    <li>
                        <form action="../contato.php" method="get">

                            <button type="submit">Entre em contato</button>
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