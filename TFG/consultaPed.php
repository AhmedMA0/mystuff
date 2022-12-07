<?php
    require_once('clases/includes.php');

    $cat = $_GET['cat'];
            
    if (!empty($cat)) {
        
        $prods = Producto::verProdsxCat($cat);

        foreach ($prods as $pos => $prod) {
            echo '<div class="prodsDiv">';
            echo '<p class="prodInfo"><span>'.$prod->getNombre().' </span>'. $prod->getPvp().'</p>';
            echo '<p class="prodInfo prodDesc">'.$prod->getDesc().'</p>';
            echo '<input type="checkbox" value="'.$prod->getNombre().'" name="'.$prod->getNombre().'" class="checks">';
            echo '<input type="number" name="'.$prod->getNombre().'Cant" class="cantidades" value="1" min="1" disabled>';
            echo '</div>';
        }
    }
?>