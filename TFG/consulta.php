<?php
        $cat = $_GET['cat'];
        
        $conexion = new mysqli('localhost', 'ahmed', '123456', 'mosushi');
        
        if (!empty($cat)) {
            
                $prodQuery = $conexion->stmt_init();

                $prodQuery->prepare("select nombre, descr, precio from producto where idCat = ".$cat.";");

                $prodQuery->execute();

                $prodQuery->bind_result($name, $desc, $price);

                while ($prodQuery->fetch()) {
                    
                    echo '<form class= "prod" action="editProd.php" method="post">';
                    echo '<p>'.$name.' <span>'. $price.'</span></p>';
                    echo '<p>'.$desc.'</span></p>';
                    echo '<input type="hidden" value="'.$name.'" name="idProd">';
                    echo '<input class="submit" type="submit" value="Actualizar" name="yes">';
                    echo '</form>';
                    echo '<form class= "prod" action="eliminarProd.php" method="post">';
                    echo '<input type="hidden" value="'.$name.'" name="idProd">';
                    echo '<input class="submit" type="submit" value="Eliminar" name="yes">';
                    echo '</form>';
                }


                $prodQuery->close();
        }
		$conexion->close();
	?>