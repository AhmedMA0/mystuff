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

            function esCapicua($n){

                $n2=$n;

                while ($n2 > 0) {
                    $rev = ($rev * 10) + ($n2 % 10);
                    $n2 = floor($n2 / 10);
                }

                if ($n == $rev) {
                    return true;
                }
                
                return false;
            }

            function esPrimo($n){

                for ($i=2; $i < $n; $i++) { 

                    if ($n%$i == 0) {
                        return false;
                    }
                }

                return true;
            }

            function siguientePrimo($n){
                $sigPrimo=$n;

                do{
                    ++$sigPrimo;
                    $primo = true;

                    for ($i=2; $i < $sigPrimo; $i++) { 

                        if ($sigPrimo%$i == 0) {
                        $primo=false;
                        }
                    }
                }while ($primo == false);

                return $sigPrimo;
            }

            function potencia($n, $p){
                $h=$n;

                for ($i=0; $i < $p-1; $i++) { 

                    $h*=$n; 
                }

                return $h;
            }

            function digitos($n){
                while ($n > 0) {
                    $n = floor($n / 10);
                    ++$t;
                }

                return $t;
            }

            function voltea($n){
                while ($n > 0) {
                    $rev = ($rev * 10) + ($n % 10);
                    $n = floor($n / 10);
                }

                return $rev;
            }

            function digitoN($n,$p){

                while ($n > 0) {
                    $rev = ($rev * 10) + ($n % 10);
                    $n = floor($n / 10);
                }

                for ($i=0; $i < $p; $i++) { 
                    $rev = floor($rev/10);
                }

                return $rev%10;
            }

            function posicionDeDigito($n,$p){
                
                while ($n > 0) {
                    $rev = ($rev * 10) + ($n % 10);
                    $n = floor($n / 10);
                }

                for ($i=0; $i < $p; $i++) { 
                    if ($rev%10==$p) {
                        return $i;
                    }
                    $rev = floor($rev/10);
                }

                return -1;
            }

            function quitaPorDetras($n,$p){
                for ($i=0; $i < $p; $i++) { 
                    $n = floor($n / 10);
                }

                return $n;
            }

            function quitaPorDelante($n,$p){
                while ($n > 0) {
                    $rev = ($rev * 10) + ($n % 10);
                    $n = floor($n / 10);
                }

                for ($i=0; $i < $p; $i++) { 
                    $rev = floor($rev / 10);
                }

                while ($rev > 0) {
                    $f = ($f * 10) + ($rev % 10);
                    $rev = floor($rev / 10);
                }
                
                return $f;
            }

            /*function pegaPorDetras($n,$d){
                $n=strval($n);
                $d=strval($d);

                $n.=$d;

                return intval($n);
            }

            function pegaPorDelante($n,$d){
                $n=strval($n);
                $d=strval($d);

                $d.=$n;

                return intval($d);
            }*/

            function pegaPorDetras($n,$d){
                $n*=10;
                return $n+=$d;    
            }

            function pegaPorDelante($n,$d){
                $n2=$n;
                while ($n > 0) {
                    ++$nd;
                    $n = floor($n / 10);
                }
                for ($i=0; $i < $nd; $i++) { 
                    $d*=10;
                }
                return $d+$n2;
            }
            
            function trozoDeNumero($n,$i,$f){

                $nl=strlen((string)$n)-1;

                while ($n > 0) {
                    $rev = ($rev * 10) + ($n % 10);
                    $n = floor($n / 10);
                }

                for ($j=0; $j < $i; $j++) { 
                    $rev= floor($rev / 10);
                }

                while ($rev > 0) {
                    $n2 = ($n2 * 10) + ($rev % 10);
                    $rev = floor($rev / 10);
                }
                
                for ($h=0; $h < $nl-$f; $h++) { 
                    $n2 = floor($n2 /10);
                }

                return $n2;
            }   

            /*function juntaNumeros($n1,$n2){
                $n1=strval($n1);
                $n2=strval($n2);

                return $n1.$n2;
            }*/

            function juntaNumeros($n1,$n2){
                while ($n2 > 0) {
                    $rev = ($rev * 10) + ($n2 % 10);
                    $n2 = floor($n2 / 10);
                }

                $aux=$rev;

                while ($aux > 0) {
                    $aux = floor($aux / 10);
                    ++$s;
                }
                
                for ($i=0; $i < $s; $i++) { 
                    
                    $n1*=10;
                    $n1+=$rev%10;
                    $rev = floor($rev / 10);
                }

                return $n1;
            }
        ?>
    </body>
</html>
