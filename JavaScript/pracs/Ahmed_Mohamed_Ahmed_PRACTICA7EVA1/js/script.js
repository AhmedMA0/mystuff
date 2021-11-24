//comenzamos creando una tabla html
document.write("<table>");

//declaramos el primer for que ira mostrando la tabla
for(let a = 0; a < 10; a++){
    document.write("<tr>");

    //por cada iteracion del for anterior se recorre este for que nos muestra todos los datos de cada fila (las columnas)
    for (let i = 0; i < 10; i++) {
       document.write("<td>"+a+i+"</td>");
        
    }

    //cerramos la fila de la tabla al final de cada iteracion
    document.write("</tr>");
}

//todas las filas y loumnas ya se han mostrado y cerramos la tabla para acabar
document.write("</table>");