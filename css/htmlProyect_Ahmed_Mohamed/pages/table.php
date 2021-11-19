<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Document html">
    <meta name="author" content="Ahmed R.">
    <meta name="keywords" content="computers,programing,web design,html,html5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="lang" content="es-ES">
    <link rel="icon" type="image/png" href="images/logo.png">
    <title>Schedule</title>
</head>
<body>
    <main id="contenido">
        <h1>Stargazing 3-day course</h1>
        <p>This Three Day Family Stargazing Experience with Amazing Stargazing is a getaway you’ll never forget. Learn the basics of astronomy, get to grips with astronomical equipment, discover the magic of astrophotography and enjoy awe-inspiring celestial views with this incredible package. You’ll experience glamping in a Deluxe Wigwam Cabin, and there’ll be plenty of time for you to explore the beautiful surrounding area during the days. Perfect for families looking for something a little bit ‘out of this world.’
        </p>
        <br>
        <br>
        <table border="10" cellspacing="0" align="center">
            <tr>
                <td align="center" height="50" 
                    width="100"><br>
                    <b>Day/Period</b>
                </td>
                <td align="center" height="50" 
                    width="100">
                    <b>I<br>9:30-10:20</b>
                </td>
                <td align="center" height="50" 
                    width="100">
                    <b>II<br>10:20-11:10</b>
                </td>
                <td align="center" height="50" 
                    width="100">
                    <b>III<br>11:10-12:00</b>
                </td>
                <td align="center" height="50" 
                    width="100">
                    <b>12:00-12:40</b>
                </td>
                <td align="center" height="50" 
                    width="100">
                    <b>IV<br>12:40-1:30</b>
                </td>
                <td align="center" height="50" 
                    width="100">
                    <b>V<br>1:30-2:20</b>
                </td>
            </tr>
            <tr>
                <td align="center" height="50">
                    <b>Monday</b></td>
                <td colspan="2" align="center" height="50">Introduccion to Stargazing</td>
                <td align="center" height="50">Stargazing equipment</td>
                <td rowspan="6" align="center" height="50">
                    <h2>B<br>R<br>E<br>A<br>K</h2>
                </td>
                <td colspan="2" align="center" 
                    height="50">Visit to planetarium</td>
            </tr>
            <tr>
                <td align="center" height="50">
                    <b>Tuesday</b>
                </td>
                <td align="center" height="50">The Evolving Universe</td>
                <td align="center" height="50">Physics of Stars 101</td>
                <td align="center" height="50">Astronomical Measurements and Instrumentation</td>
                <td colspan="2" align="center" height="50">Watch Party: Interstellar(optional)</td>
            </tr>
            <tr>
                <td align="center" height="50">
                    <b>Wednesday</b>
                </td>
                <td colspan="3" align="center" height="50">Final simulation</td>
                <td align="center" height="50">Your results</td>
                <td align="center" height="50">Goodbyes...</td>
            </tr>
         </table>
         <br>
         <br>
        <?php 

            $email = $_POST['email'];

            if (!isset ($email)) {

            
        ?>
                <form action="#" method="POST">
                    <p align="center">Please, introduce your email for a chance to get drafted!!!<input type="email" name="email" size="25"></p>
                </form>
        <?php 
            }
            else {
                echo '<h3>Thanks for your time, we´ll contact you soon if u got lucky!!!</h3>';
            }
        
        ?>

    </main>
</body>
</html>