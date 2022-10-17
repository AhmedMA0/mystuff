<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/stylesInserts.css">
    <title>Productos</title>
</head>
<body>
    <?php   
        //abrimos la conexion a base de datos con mysqli
        $conexion = new mysqli('localhost', 'ahmed', '123456', 'mosushi');

    ?>

    <form id="catForm" class="catForm" action="#" method="post">
        <input type="text" name="nombreCat" id="nombreCat">
        <input type="submit" value="Confirmar">
	</form>

    <form id="prodForm" class="prodForm" action="#" method="post">
        <input type="text" name="nombreProd" id="nombreProd">
        <input type="text" name="desc" id="desc">
        <input type="text" name="precio" id="precio">
    
        <?php
        
            $query = $conexion->stmt_init();
            
            $query->prepare("select nombre from categoria");
            
            $query->execute();
            
            $query->bind_result($cat);
            
            echo '<select name="cats">';
            echo '<option selected="true" disabled="disabled">Elija categoría</option>';    


			while ($query->fetch()) {
				echo '<option value="'.$cat.'">'.$cat.'</option>';
			}

			echo '</select>';
            //liberamos la consulta
            $query->close();
            ?>
        <input type="submit" value="Confirmar">

    </form>
    <div id="chButtons" class="chButtons">
        <span id="cat" class="buttonAni buttonCat" onclick="printForm(this.id);"><a></a></span>
        <span id="prod" class="buttonAni buttonProd" onclick="printForm(this.id);"><a></a></span>
    </div>

    <?php
		$conexion->close();
	?>

<script src="twoFormsInserts.js"></script>
<script src="varsInserts.js"></script>

</body>
</html>