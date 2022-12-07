<?php
    require_once('clases/includes.php');

    $cat = $_GET['cat'];
            
    if (!empty($cat)) {
        
        $prods = Producto::verProdsxCat($cat);

        if (!empty($prods)) {
            echo '<tr><th>Nombre</th><th>Precio</th><th>Desripción</th><th>Opciones</th></tr>';
            foreach ($prods as $pos => $prod) {
                echo '<tr class="prod">';
                echo '<td class="nombreTd">'.$prod->getNombre().'</td><td class="precioTd">'.$prod->getPvp().'</td><td class="descTd">'.$prod->getDesc().'</td>';
                echo '<td><div class="optionTd">';
                echo '<form action="editProd.php" method="post">';
                echo '<input type="hidden" value="'.$prod->getNombre().'" name="idProd">';
                echo '<input class="submit" type="submit" value="Actualizar" name="yes">';
                echo '</form>';
                echo '<form action="eliminarProd.php" method="post">';
                echo '<input type="hidden" value="'.$prod->getNombre().'" name="idProd">';
                echo '<input class="submit" type="submit" value="Eliminar" name="yes">';
                echo '</form>';
                echo '</div></td>';
                echo '</tr>';
            }
        }

        else {
            echo 'Categoria sin productos.';
        }
    }
?>