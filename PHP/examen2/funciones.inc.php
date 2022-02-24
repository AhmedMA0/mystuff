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

        function bin2decimal($num){

            $num=strval($num);

            $nums=explode('|',chunk_split($num,1,'|'));
            unset($nums[count($nums)-1]);

            $nums=array_reverse($nums);

            foreach ($nums as $key => $value) {
                $res+=$value*pow(2,$key);
            }

            return $res;
        }

        function dec2bin($num){

            while ($num>1) {
                
                $res.=$num%2;
                $num=floor($num/2);
            }

            $res.=1;

            return strrev($res);
        }

        function strArray($num){
            $num=strval($num);

            $nums=explode('|',chunk_split($num,1,'|'));
            unset($nums[count($nums)-1]);

            return $nums;
        }

        function esFeliz($num){
            $nums=strArray($num);

            while (!isset($feliz)) {
            
                $res=0;
        
                foreach ($nums as $value) {
                    
                    $res+=pow($value,2);
                }

                if ($res==1) {
                    $feliz=true;
                }

                elseif ($res==$num) {
                    $feliz=false;
                }

                $nums=strArray($res);
            }

            return $feliz;
    }

        showArrayTable([1,2,3,4,5]);

        echo '<br>';

        print_r(primosFront([8,8,8,9,9,3,3,3]));

        echo '<br>';

        echo bin2decimal(11011);

        echo '<br>';
 
        echo dec2bin(27);

        echo '<br>';

        print_r(strArray(1234));

        echo '<br>';

        echo esFeliz(82);

    ?>
</body>
</html>