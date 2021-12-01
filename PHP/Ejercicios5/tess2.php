<!DOCTYPE html>
<html>
    <body>
        <form action="#" method="post">
            <input type="text" name="a">
            <input type="submit" value="go">
        </form>
        <?php
            if ($_POST['a']=='ñ') {
                echo 'hola';
            }
        ?>
    </body>
</html>