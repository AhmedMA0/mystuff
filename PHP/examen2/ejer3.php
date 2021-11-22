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

        $num=$_POST['num'];

        $feliz = esFeliz($num);

        if ($feliz) {
            echo 'Es feliz';
        }        

        else {
            echo 'No es feliz';
        }
        ?>
        <form action='#' method='POST'>
        <input type='number' name='num' autofocus>
        <input type='submit' value='go'>
        </form>
        <?php
    




    ?>
</body>
</html>