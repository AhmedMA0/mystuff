<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant WebPage">
    <meta name="keywords" content="food, sushi">
    <meta name="author" content="Ahmed M.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pide</title>
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

        <div class="forms">
            <form action="insertPedido.php" method="post" id="formHome" class="formHome">

                <fieldset class="userPart" id="userPart">
                    <legend>Datos personales</legend>
                        <p>
                            <div class="labels" id="nombreLabel"><label for="nombre">Nombre:</label></div>
                            <input type="text" name="nombre" id="nombre" maxlength="15" pattern="[a-zA-Z]{4,10}" placeholder="Nombre de minimo 4 letras" autofocus required>
                        
                            <div class="labels" id="tlfLabel"><label for="tlf">Teléfono:</label></div>
                            <input type="text" name="tlf" id="tlf" pattern="[\d]{9,15}" maxlength="30" placeholder="Numero de minimo 9 digitos" required>
                        </p>
                        <br>
                        <p>
                            <div class="labels" id="dirLabel"><label for="dir" >Dirección:</label></div>
                            <input type="text" name="dir" id="dir" minlength="10" maxlength="200" required>
                        </p>
                        <button type="button" onclick="location.reload()">VOLVER</button>
                        <button type="button" onclick="hideUserPart();">SIGUIENTE</button>

                </fieldset>
                
                <fieldset class="pedidoPart" id="pedidoPart">
                    <legend>Pedido</legend>

                        <label for="card">Pago con tarjeta</label>
                        <input type="checkbox" name="card" id="card" value="card">

                        <label for="camb">¿Necesita cambio?</label>
                        <input type="checkbox" name="camb" id="camb" value="camb">
                        <button type="button" onclick="showUserPart();">ANTERIOR</button>
                        <button type="button" onclick="hidePedPart();">SIGUIENTE</button>
                </fieldset>

                <fieldset class="prodPart" id="prodPart">
                    <legend>Productos</legend>
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
                                    echo '<input type="number" name="'.$prod->getNombre().'Cant" id="'.$prod->getNombre().'Cant" class="cantidades" value="1" min="1" disabled>';
                                    echo '</div>';
                                }

                                echo '</fieldset>';
                            }
                        ?>
                        <button type="button" onclick="showPedPart();">ANTERIOR</button>
                        <input type="submit" value="PEDIR" name="allInfo">
                </fieldset>
            </form>

            <form action="insertPedido.php" method="post" id="formPick" class="formPick">

                <fieldset class="userPartPick" id="userPartPick">
                    <legend>Datos personales</legend>
                        <p>
                            <div class="labels" id="nombreLabelPick"><label for="nombre">Nombre:</label></div>
                            <input type="text" name="nombre" id="nombrePick" maxlength="15" pattern="[a-zA-Z]{4,10}" placeholder="Nombre de minimo 4 letras" autofocus required>
                        
                            <div class="labels" id="tlfLabelPick"><label for="tlf">Teléfono:</label></div>
                            <input type="text" name="tlf" id="tlfPick" pattern="[\d]{9,15}" maxlength="30" placeholder="Numero de minimo 9 digitos" required>
                        </p>
                            <input type="hidden" name="dir" id="dirPick" value="Pedido a recoger">
                        <button type="button" onclick="location.reload()">VOLVER</button>
                        <button type="button" onclick="hideUserPartPick();">SIGUIENTE</button>
                </fieldset>
                <fieldset class="prodPartPick" id="prodPartPick">
                    <legend>Productos</legend>
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
                        <button type="button" onclick="showUserPartPick();">ANTERIOR</button>
                        <input type="submit" value="PEDIR" name="allInfo">
                </fieldset>

            </form>   
        </div>
    </main>

    <script src="varsPedido.js"></script>
    <script src="twoFormsPedido.js"></script>
</body>
</html>