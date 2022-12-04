<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant WebPage">
    <meta name="keywords" content="food, sushi">
    <meta name="author" content="Ahmed M.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pide</title>
    <link href="estilos/universal.css" rel="stylesheet">
    <link href="estilos/header.css" rel="stylesheet">
    <link href="estilos/stylesP.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
        require_once('clases/includes.php');
    ?>
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
        <div id="buttonsM" class="buttonsM">
            <span id="home" class="buttonAni buttonHome" onclick="printForm(this.id);"><a></a></span>
            <span id="pickUp" class="buttonAni buttonPick" onclick="printForm(this.id);"><a></a></span>
        </div>

        <div class="forms" id="forms">
            <form action="insertPedido.php" method="post" id="formHome" class="formHome">

                <fieldset class="userPart" id="userPart">
                    <div class="legends">Datos Personales</div>
                        <div class="inputs">
                            <input type="text" name="nombre" id="nombre" maxlength="15" pattern="[a-zA-Z]{4,10}" placeholder="Nombre (mínimo 4 letras)" autofocus required>
                            <input type="text" name="tlf" id="tlf" pattern="(\+[\d]{1,5})[\d]{4,15}" maxlength="30" placeholder="Teléfono (con prefijo)" required>
                            <input type="text" name="dir" id="dir" minlength="10" maxlength="200" placeholder="Dirección" required>
                        </div>
                        <div class="buttons">
                            <button type="button" onclick="location.reload()" class="botone">VOLVER</button>
                            <button type="button" onclick="hideUserPart();" class="botone">SIGUIENTE</button>
                        </div>

                </fieldset>
                
                <fieldset class="pedidoPart" id="pedidoPart">
                    <div class="legends">Pedido</div>

                        <label for="card">Pago con tarjeta</label>
                        <input type="checkbox" name="card" id="card" value="card">

                        <label for="camb">¿Necesita cambio?</label>
                        <input type="checkbox" name="camb" id="camb" value="camb">

                        <div class="buttons">
                            <button type="button" onclick="showUserPart();" class="botone">ANTERIOR</button>
                            <button type="button" onclick="hidePedPart();" class="botone">SIGUIENTE</button>
                        </div>
                </fieldset>

                <fieldset class="prodPart" id="prodPart">
                    <div class="legends">Productos</div>
                        <?php
                            $cats=Categoria::verCats();

                            foreach ($cats as $key => $cat) {
                                $prods = Producto::verProdsxCat($cat->getId());
                                echo '<fieldset><legend class="legends prodsCat">'.$cat.'</legend>';

                                foreach ($prods as $pos => $prod) {
                                    echo '<div class="prodsDiv">';
                                    echo '<p class="prodInfo"><span>'.$prod->getNombre().' </span>'. $prod->getPvp().'</p>';
                                    echo '<p class="prodInfo prodDesc">'.$prod->getDesc().'</p>';
                                    echo '<input type="checkbox" value="true" name="'.$prod->getNombre().'Prod" class="checks">';
                                    echo '<input type="number" name="'.$prod->getNombre().'Cant" id="'.$prod->getNombre().'Cant" class="cantidades" value="1" min="1" disabled>';
                                    echo '</div>';
                                }

                                echo '</fieldset>';
                            }
                        ?>
                        <div class="buttons">
                            <button type="button" onclick="showPedPart();" class="botone">ANTERIOR</button>
                            <input type="submit" value="PEDIR" name="allInfo" class="botone">
                        </div>
                </fieldset>
            </form>

            <form action="insertPedido.php" method="post" id="formPick" class="formPick">

                <fieldset class="userPartPick" id="userPartPick">
                    <div class="legends">Datos personales</div>
                        <p>
                            <input type="text" name="nombre" id="nombrePick" maxlength="15" pattern="[a-zA-Z]{4,10}" placeholder="Nombre (mínimo 4 letras)" autofocus required>
                        
                            <input type="text" name="tlf" id="tlfPick" pattern="(\+[\d]{1,5})[\d]{4,15}" maxlength="30" placeholder="Teléfono (con prefijo)" required>
                        </p>
                            <input type="hidden" name="dir" id="dirPick" value="Pedido a recoger">
                        <div class="buttons">
                            <button type="button" onclick="location.reload()" class="botone">VOLVER</button>
                            <button type="button" onclick="hideUserPartPick();" class="botone">SIGUIENTE</button>
                        </div>
                </fieldset>
                <fieldset class="prodPartPick" id="prodPartPick">
                    <div class="legends">Productos</div>
                        <?php
                            $cats=Categoria::verCats();

                            foreach ($cats as $key => $cat) {
                                $prods = Producto::verProdsxCat($cat->getId());
                                echo '<fieldset><legend>'.$cat.'</legend>';

                                foreach ($prods as $pos => $prod) {
                                    echo '<div class="prodsDiv">';
                                    echo '<p class="prodInfo"><span>'.$prod->getNombre().' </span>'. $prod->getPvp().'</p>';
                                    echo '<p class="prodInfo prodDesc">'.$prod->getDesc().'</p>';
                                    echo '<input type="checkbox" value="true" name="'.$prod->getNombre().'Prod" class="checks">';
                                    echo '<input type="number" name="'.$prod->getNombre().'Cant" id="'.$prod->getNombre().'CantPick" class="cantidades" value="1" min="1" disabled>';
                                    echo '</div>';
                                }
                                echo '</fieldset>';
                            }
                        ?>
                        <div class="buttons">
                            <button type="button" onclick="showUserPartPick();" class="botone">ANTERIOR</button>
                            <input type="submit" value="PEDIR" name="allInfo" class="botone">
                        </div>
                </fieldset>

            </form>   
        </div>
    </main>

    <script src="varsPedido.js"></script>
    <script src="twoFormsPedido.js"></script>
</body>
</html>