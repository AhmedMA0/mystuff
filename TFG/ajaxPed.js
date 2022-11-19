function cambEst(id, estado) {
  
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) document.getElementById("ajaxDiv").innerHTML = this.responseText;
    };
    xmlhttp.open("GET","cambiarEstado.php?estado="+estado+"&id="+id,true);
    xmlhttp.send();

    location.href='./verPedidoC.php'
}