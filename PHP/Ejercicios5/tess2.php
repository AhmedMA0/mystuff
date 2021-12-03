<!DOCTYPE html>
<html>
    <body>
        <form action="#" method="post">
            <input type="text" name="a">
            <input type="submit" value="go">
        </form>
        <?php
            $a=[11, 2, 3];

            $b=[15, 2, 3];

            $c= array_intersect($a,$b);

            print_r($c);
        ?>
    </body>
</html>