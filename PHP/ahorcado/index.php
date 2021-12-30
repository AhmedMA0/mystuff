<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <h1>EL AHORCADO</h1>
        <?php

            $intentos=$_POST['ints'];

            if (!isset($intentos)) {
                $intentos=0;
            }

            if ($intentos<6) {
            
                if (!empty($_POST['aciertos'])&&!empty($_POST['fallos'])) {
                    $fallos=unserialize($_POST['fallos']);
                    $aciertos=unserialize($_POST['aciertos']);
                }

                else {
                    $fallos=[];
                    $aciertos=[];
                }
                
                
                $palabras=['TELEFONO','PANTALLA', 'AMERICA', 'POSTAL', 'JUGUETE'];
                $letras=unserialize($_POST['letras']);
                $palabra=$_POST['palabra'];

                if (empty($letras)) {
                    $numPalabra=rand(0,4);
                    $letras=str_split($palabras[$numPalabra],1);
                    $palabra=$palabras[$numPalabra];
                }


                //si el usuario aun no ha intentado enviar datos le mostramos el formulario 
                if (empty($_POST['go'])){
                    ?>
                    <fieldset>
                    <form action='#' method='POST'>
                    Adivina adivina: <input type='text' name='letra' pattern='[A-ZñÑa-z]||[A-ZñÑa-z]*' autofocus>
                    <input type='submit' value='GoGoGo' name='go'>
                    <input type='hidden' name='letras' value='<?php echo serialize($letras)?>'>
                    <input type='hidden' name='ints' value='<?php echo $intentos?>'>
                    <input type='hidden' name='palabra' value='<?php echo $palabra?>'>


                    </form>
                    </fieldset>
                        <br>
                        <br>
                        <br>
                        <!-- Aqui mostramos la agenda por pantalla en el caso de que haya datos en ella-->
                        <table><tr>
                        <?php
                        
                        foreach ($letras as $le) {
                            if (in_array($le,$aciertos)) {
                                echo '<td>',$le,'</td>';
                            }
                            else {
                                echo '<td>_</td>';
                            }
                        }
                        
                        ?>
                        </table>
                        <?php
                        echo '<img src="images/',$intentos,'.png">';    
                }

                //si el usuario ya ha intentado enviar datos se ejecuta el resto del programa
                else {

                    //se intentan recibir los datos que el usuario ha intentado enviar
                    $letra=strtoupper($_POST['letra']);

                    
                
                    //si el nombre esta vacio se obliga al usuario ha introducirlo y no se continua hasta que lo haga
                    if (empty($letra)) {
                        
                        echo '<h3>Debes introducir al menos una letra para adivinar </h3> <br>';
                        ?>
                        <fieldset>
                        <form action='#' method='POST'>
                            Adivina adivina: <input type='text' name='letra' pattern='[A-ZÑña-z]||[A-ZÑña-z]*' autofocus>
                            <input type='hidden' name='fallos' value='<?php echo serialize($fallos)?>'>
                            <input type='hidden' name='aciertos' value='<?php echo serialize($aciertos)?>'>
                            <input type='hidden' name='letras' value='<?php echo serialize($letras)?>'>
                            <input type='hidden' name='ints' value='<?php echo $intentos?>'>
                            <input type='hidden' name='palabra' value='<?php echo $palabra?>'>

                            <input type='submit' value='GoGoGo' name='go'>
                        </form>
                        </fieldset>

                        <br>
                        <br>
                        <br>
                        <!-- Aqui mostramos la agenda por pantalla en el caso de que haya datos en ella-->
                        <table><tr>
                        <?php
                        
                        foreach ($letras as $le) {
                            if (in_array($le,$aciertos)) {
                                echo '<td>',$le,'</td>';
                            }
                            else {
                                echo '<td>_</td>';
                            }
                        }
                        
                        ?>
                        </table>
                        <?php
                        echo '<img src="images/',$intentos,'.png">';

                    }

                    elseif (strlen($letra)>1&&$letra!='ñ'&&$letra!='Ñ') {
                        if ($letra==$palabra) {
                            
                            echo 'Enhorabuena, lo has clavado.';
                        }

                        else {
                            echo 'Buen intento, la plabara era: ',$palabra,' .';
                            echo '<img src="images/6.png">';

                        }
                    }
                    //si se ha introducido algo realizamos otras comprobaciones para realizar una accion u otra dependiendo de la accion del usuario
                    else{
                        if (in_array($letra,$aciertos)||in_array($letra,$fallos)) {
                            echo '<h3>Intento ya introduciodo</h3>';
                        }
                        else {
                            
                        
                            if (in_array($letra,$letras)) {
                                array_push($aciertos,$letra);
                            }

                            else {
                                $intentos++;
                                array_push($fallos,$letra);
                            }
                        }

                        $yasta=true;
                        foreach ($letras as $le) {
                            if (!in_array($le,$aciertos)) {
                                $yasta=false;
                            }
                            
                        }

                        if ($yasta==true) {
                            echo 'Enhorabuena';
                        }

                        else {
                            
                        
                            ?>
                            
                            <!-- el formulario que siempre se enseña para poder seguir metiendo datos-->
                            <fieldset>
                            <form action='#' method='POST'>
                            Adivina adivina: <input type='text' name='letra' pattern='[A-ZÑña-z]||[A-ZÑña-z]*' autofocus>
                            <input type='hidden' name='fallos' value='<?php echo serialize($fallos)?>'>
                            <input type='hidden' name='aciertos' value='<?php echo serialize($aciertos)?>'>
                            <input type='hidden' name='letras' value='<?php echo serialize($letras)?>'>
                            <input type='hidden' name='ints' value='<?php echo $intentos?>'>
                            <input type='hidden' name='palabra' value='<?php echo $palabra?>'>


                            <input type='submit' value='GoGoGo' name='go'>
                            </form>
                            </fieldset>

                            <br>
                            <br>
                            <br>

                            <!-- Aqui mostramos la agenda por pantalla en el caso de que haya datos en ella-->
                            <table><tr>
                            <?php
                            
                            foreach ($letras as $le) {
                                if (in_array($le,$aciertos)) {
                                    echo '<td>',$le,'</td>';
                                }
                                else {
                                    echo '<td>_</td>';
                                }
                            }
                            
                            ?>
                            </table>

                            <img src="">
                            
                            <?php
                            echo '<img src="images/',$intentos,'.png">';

                            echo $intentos;

                        }
                    }
                }
            }

            else {
                
                echo 'Intentos agotados';
                ?>
                <table><tr>
                <?php
                
                foreach ($letras as $le) {
                    if (in_array($le,$aciertos)) {
                        echo '<td>',$le,'</td>';
                    }
                    else {
                        echo '<td>_</td>';
                    }
                }
                
                ?>
                </table>
                <?php

                echo '<img src="images/',$intentos,'.png"> <br>';


            }
        ?>
    </body>
</html>