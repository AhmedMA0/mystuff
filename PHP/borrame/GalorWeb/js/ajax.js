function show(query, page) {
    if (query == ""){
		console.log('empty');
    } 
	
	else{
		var xmlhttp = new XMLHttpRequest();

	

		xmlhttp.open("GET","consulta.php?query="+query+"&page="+page,true);
		xmlhttp.send();
    }
}
