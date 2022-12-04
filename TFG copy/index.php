<!DOCTYPE html>
<html id="html" lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant WebPage">
    <meta name="keywords" content="food, sushi">
    <meta name="author" content="Ahmed M.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link href="estilos/universal.css" rel="stylesheet">
    <link href="estilos/header.css" rel="stylesheet">
    <link href="estilos/styles.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
<header>
        <div class="logo" onclick="location.href='./'">
            <img src="images/logo.png" alt="Logo" class="logoIcon">
            <p class="display">MÕ SUSHI WOK FUSION</p>
        </div>
        <nav>
            <a href="./">Home</a>
            <a href="./pedido.php">Pedir</a>
            <a href="reserva.php">Reservar</a>
            <a href="checkPedido.php">Comprobar pedido</a>
            <a href="checkReserva.php">Comprobar reserva</a>
        </nav>
    </header>
    <main>
        <div class="heroDiv">
            <div class="heroImg">
                <div class="textbuttons">
                    <p class="textito">Un nuevo sabor</p>
                    <p>
                        <span class="tittle display">Bienvenidos a <br> la cocina de MÕ</span>
                        <br>
                        Disfrutad del viaje.
                    </p>

                    <div class="buttonsHero">
                        <span class="buttonAni buttonPed"><a href="pedido.php"></a></span>
                        <span class="buttonAni buttonRes"><a href="reserva.php"></a></span>
                    </div>
                </div>
                <div class="imageDiv">
                    <img src="images/hero.png" alt="Hero Image" class="image">
                </div>
            </div>

            
        </div>
        <div class="usContainer">
            <div class="us">
                <div class="usImages">
                        <img src="images/us0.jpg" alt="us0">
                        <img src="images/us1.jpg" alt="us1">
                        <img class="vertical" src="images/us2.jpg" alt="us2">
                </div>
                <div class="usText">
                    <h3 class="display">Sobre nosotros</h3>
                    <p>
                        Aspiramos a crear algo diferente y divertido 
                        adaptado a los gustos de hoy y precios asequibles.
                        Desde aqui te invitamos a recorrer los sabores 
                        autenticos de Japon dentro de nuestra cocina 
                        Mediterránea.
                    </p>
                </div>
            </div>
        </div>

        <p class="menuText display">Nuestro Menú</p>
        <div class="menuDiv">
            <div class="menu">
                <img class="pagMenu" id="pagMenu" src="images/menu/1.jpg" alt="Menu Page">
                <input disabled class="pageDisplay" id="pageDisplay" type="text" value="1/7">
                <div class="menuButtons">
                    <button class="nextPrev" id="prev" onclick="prevPage();"><i class="fas fa-chevron-circle-left"></i></button>
                    <button class="nextPrev" id="next" onclick="nextPage();"><i class="fas fa-chevron-circle-right"></i></button>
                </div>
                <div class="buttonsHero secondButtons">
                    <span class="buttonAni buttonPed"><a href="pedido.php"></a></span>
                    <span class="buttonAni buttonRes"><a href="reserva.php"></a></span>
                </div>
            </div>
        </div>

    </main>
    <footer>
    </footer>

    <script src="https://kit.fontawesome.com/cf65667542.js" crossorigin="anonymous"></script>
    <script src="pages.js"></script>
    <script src="varsIndex.js"></script>

    

</body>
</html>