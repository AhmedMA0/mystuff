<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            function generaArrayInt($n,$min,$max){
                for ($i=0; $i < $n; $i++) { 
                    $a[$i]=rand($min, $max);
                }

                return $a;
            }

            function minimoArrayInt($array){

                $min=$array[0];                
                foreach ($array as $y){ 
                    if ($y<$min) {
                        $min=$y;
                    }
                }

                return $min;
            }

            function maximoArrayInt($array){

                $max=$array[0];                
                foreach ($array as $y){ 
                    if ($y>$max) {
                        $max=$y;
                    }
                }

                return $max;
            }

            function mediaArrayInt($array){
                foreach ($array as $y) {
                    $a+=$y;
                }   

                return $a/count($array);
            }

            function estaEnArray($array, $n){
                foreach ($array as $y) {
                    if ($y == $n) {
                        return true;
                    }
                } 
                
                return false;

            }

            function posicionEnArray($array, $n){
                foreach ($array as $y => $k) {
                    if ($k == $n) {
                        return $y;
                    }
                } 
                
                return false;

            }

            function volteaArrayInt($array){
                for ($i=count($array)-1, $j=0; $i >= 0; $i--, $j++) { 

                    $array2[$j]=$array[$i];
                }

                return $array2;
            }

            function rotaDerechaArrayInt($array, $n){
                for ($i=0; $i < $n; $i++) { 
                    
                    $aux=$array[count($array)-1];

                    for ($j=count($array)-1,$z=count($array)-2; $j > 0; $j--, $z--) { 

                        $array[$j]=$array[$z];
                    }

                    $array[0]=$aux;
                }

                return $array;
            }

            function rotaIzquierdaArrayInt($array, $n){
                for ($i=0; $i < $n; $i++) { 
                    
                    $aux=$array[0];

                    for ($j=0,$z=1; $j < count($array)-1; $j++, $z++) { 

                        $array[$j]=$array[$z];
                    }

                    $array[count($array)-1]=$aux;
                }

                return $array;
            }
        ?>
    </body>
</html>
