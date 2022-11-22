<?php
        require_once('clases/includes.php');

        $cat = $_GET['cat'];
                
        if (!empty($cat)) {
            
            $prods = Producto::verProdsxCat($cat);

            if (!empty($prods[0])) {
                foreach ($prods as $pos => $prod) {
                    
                    echo '<form class= "prod" action="editProd.php" method="post">';
                    echo '<p><span>'.$prod->getNombre().' </span>'. $prod->getPvp().'</p>';
                    echo '<p>'.$prod->getDesc().'</p>';
                    echo '<input type="hidden" value="'.$prod->getNombre().'" name="idProd">';
                    echo '<input class="submit" type="submit" value="Actualizar" name="yes">';
                    echo '</form>';
                    echo '<form class= "prod" action="eliminarProd.php" method="post">';
                    echo '<input type="hidden" value="'.$prod->getNombre().'" name="idProd">';
                    echo '<input class="submit" type="submit" value="Eliminar" name="yes">';
                    echo '</form>';
                }
            }

            else {
                echo 'Categoria sin productos.';
            }

        }

	?>