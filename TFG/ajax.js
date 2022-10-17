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
      xmlhttp.open("GET","consulta.php?code="+str,true);
      xmlhttp.send();
    }
}