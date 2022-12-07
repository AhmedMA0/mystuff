function cambEst(id, estado, tlf) {
    
    tlf = String(tlf).replace('+','P');
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) document.getElementById("ajaxDiv").innerHTML = this.responseText;
    };
    xmlhttp.open("GET","../cambiarEstadoR.php?estado="+estado+"&id="+id+"&tlf="+String(tlf),true);
    xmlhttp.send();
}