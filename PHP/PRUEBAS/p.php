<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Comprobacion</title>
    <link rel='stylesheet' href='./CSS/estilo.css'>
</head>
<body>
    <?php 
    
    $adivinar =$_POST['adivinar'];
    $palabraInt = $_POST['palabraInt'];
    $array = $_POST['guion'];
    $letras = [];
    $contador =0;
    

        
        if(!empty($array)){
            $guion = unserialize($array);
                
        }else{

            for($i=1;$i<=strlen($adivinar);$i++){
                $guion[$i] = '_';
                echo $guion[$i].' ';
            }
        }
        
        
        if(!empty($palabraInt)){

            $letras = separarLetras($adivinar);
            
            if(in_array($palabraInt,$letras)){
                
                $posicion = array_keys($letras,$palabraInt);
                
                $guion[$posicion[0]] = $letras[$posicion[0]];
                
                    foreach($guion as $valor){
                        echo $valor;
                    }
                
            }
            
        }

        function separarLetras($adivinar){
            
            for($i=1;$i<=strlen($adivinar);$i++){
            
                $longitud = -strlen($adivinar)+$i;
                
                if($longitud == 0){
                    $longitud =+ 1;
                }
        
                $letras[$i] = substr($adivinar,$contador,$longitud);
                
                ++$contador;
                
                
            }
            return $letras;
        }
    ?>
        <p>
            <form action='#' method='post'>
                <input type='text' name='palabraInt' id='palabraInt' required>
                <input type='hidden' name='adivinar' value='<?php echo $adivinar;?>'>
                <input type='hidden' name='guion' value='<?php echo serialize($guion);?>' >
                <input type='submit' value='Comprobar'>
            </form>

        </p>
        

</body>
</html>