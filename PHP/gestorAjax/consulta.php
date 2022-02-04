<?php
        $family = $_GET['code'];
        
        $conexion = new mysqli('localhost', 'ahmed', '123456.A', 'dwes');

        if (!empty($family)) {
            
                $prodQuery = $conexion->stmt_init();

                $prodQuery->prepare("select cod, nombre_corto, PVP from producto where familia = '".$family."';");

                $prodQuery->execute();

                $prodQuery->bind_result($cod,$name, $price);

                while ($prodQuery->fetch()) {
                    
                    echo '<form class= "prod" action="edit.php" method="post">';
                    echo '<p>'.$name.' <span>'. $price.'</span></p>';
                    echo '<input type="hidden" value="'.$cod.'" name="codP">';
                    echo '<input class="submit" type="submit" value="Actualizar" name="upd"></form>';
                }

                $prodQuery->close();
        }
		$conexion->close();
	?>