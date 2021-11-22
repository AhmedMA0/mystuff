<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function showArrayTable($nums){
            echo '<table><th>Key</th><th>Value</th>' ;
            foreach ($nums as $key => $value) {
                echo '<tr><td>',$key,'</td><td>',$value,'</td></tr>';
            }
            echo '</table>';
        }

        function primosFront($nums){
            foreach ($nums as $key => $value) {
                
                $primo=true;

                for ($i=2; $i < $value; $i++) { 
                    if ($value%$i==0) {
                        $primo=false;
                    }
                }

                if ($primo) {

                    $aux=$value;
                    
                    array_splice($nums, $key, 1);

                    array_unshift($nums, $aux);

                }
            }

            return $nums;
        }

        $array=$_POST['array'];
        $num=$_POST['num'];
        $count=$_POST['count'];
        
        if ($count<10) {
        
            if(!empty($array)){
                $nums=unserialize($array);
            }

            if (!isset($nums)) {
                $nums=[];
            }

            if (!empty($num)) {
                array_push($nums, $num);
                ++$count;
            }
        
        
        ?>
        <form action='#' method='POST'>
        <input type='number' name='num' autofocus>
        <input type='hidden' name='array' value='<?php echo serialize($nums);?>'>
        <input type='hidden' name='count' value='<?php echo $count;?>'>
        <input type='submit' value='go'>
        </form>
        <?php
        }

        else {

            $nums = unserialize($array);

            showArrayTable($nums);

            $nums=primosFront($nums);

            showArrayTable($nums);

        }




    ?>
</body>
</html>