<?php
    if(!isset($_SESSION)){
        session_start();
    }
    session_unset();
    $_SESSION['id'] = "27";    
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
                    <img src="../imagens/assasin.png" alt="Produto Listrada Zebra">
                </div>
                <ul>
                    <li><div><h2>Assasin Creed: Renascença</h2></div></li>
                    <li><p>Traído pelas famílias que governam as cidades-estado italianas, um jovem embarca em uma jornada épica em busca de vingança. Para erradicar a corrupção e restaurar a honra de sua família, ele irá aprender a Arte dos Assassinos.
Ao longo do caminho, Ezio terá de contar com a sabedoria de grandes mentores, como Leonardo da Vinci e Nicolau Maquiavel, sabendo que sua sobrevivência depende inteiramente de sua perícia e habilidade.
Para os aliados, Ezio se tornará uma força de mudança, lutando por liberdade e justiça.</p></li>
                    
                    <li><h3>Oliver Bowden</h3></li>
                    
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