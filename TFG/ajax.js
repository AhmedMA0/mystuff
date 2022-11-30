function showProd(str) {
    if (str == ""){
      document.getElementById("prods").innerHTML = "";
      return;
    } 
	
	else{
      var xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) document.getElementById("prods").innerHTML = this.responseText;
      };
      xmlhttp.open("GET","consulta.php?cat="+str,true);
      xmlhttp.send();
    }
}

function showPed(str) {
    if (str == ""){
      document.getElementById("peds").innerHTML = "";
      return;
    } 
	
	else{
      var xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) document.getElementById("peds").innerHTML = this.responseText;
      };
      xmlhttp.open("GET","consultaPeds.php?estado="+str,true);
      xmlhttp.send();
    }
}

function showRes(str) {
  if (str == ""){
    document.getElementById("reses").innerHTML = "";
    return;
  } 

else{
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) document.getElementById("reses").innerHTML = this.responseText;
    };
    xmlhttp.open("GET","consultaRes.php?estado="+str,true);
    xmlhttp.send();
  }
}