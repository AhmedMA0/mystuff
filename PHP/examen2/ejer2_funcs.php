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
    ?>
</body>
</html>