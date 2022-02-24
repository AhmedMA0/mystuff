
var paR = document.getElementById('error');
var butR = document.getElementById('botonRegistro').value;
var emailR = document.getElementById('correoRegistro').value;
var nameR = document.getElementById('nombreRegistro').value;
var passR = document.getElementById('passRegistro').value;

function register(emailR, nameR, passR) {
    if (!emailR || !nameR || !passR){
		paR.innerHTML = 'Faltan datos;'
    } 
	
	else{
		var xmlhttp = new XMLHttpRequest();

		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) paR.innerHTML = 'Registro correcto';
		};

		xmlhttp.open("GET","registro.php?email="+emailR+"&name="+nameR+"&pass="+passR,true);
		xmlhttp.send();
    }
}
