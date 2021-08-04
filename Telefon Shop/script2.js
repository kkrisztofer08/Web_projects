var xhttp = new XMLHttpRequest();

function telefonLeker(){
	
	var nev = document.getElementById("telefon_nev_input").value;
	
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("eredmeny").innerHTML = this.responseText;
		}
	};
	
	xhttp.open("GET", "server2.php?telefon_nev=" + nev, true);
	xhttp.send();
	
}