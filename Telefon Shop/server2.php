<?php

	$telefon_nev = "";
	
	$server = "localhost";
	$username = "root";
	$password = "";
	$db_name = "telefonaruhaz2";
	
	function TelefonKeres($p_telefon_nev, $p_conn){
		
		$sql = "SELECT * FROM telefonok WHERE telefon_nev LIKE '%" . $p_telefon_nev . "%'";
		$eredmeny = $p_conn->query($sql);
		
		if($eredmeny->num_rows > 0 && $p_telefon_nev != ""){
			
			$tablazat = "<table id='telefonok_tabla'><tr>";
			
			while($sor = $eredmeny->fetch_assoc()){
				
				$tablazat .=
						"<td>" .
						"<figure>" .
							"<img width='200' height='200' src=" . $sor["telefon_kep"] . ">" .
							"<figcaption id='imgfig'>" .
								$sor["telefon_nev"] . "<br>" .
								$sor["telefon_ar"] . " Ft - " . $sor["telefon_db"] . " db raktáron<br>" .
								"<input type='button' value='+' onclick='kosarhozAd()'> <input type='button' value='-' onclick='kosarbolElvesz()'>" .
							"</figcaption>" .
						"</figure>" .
						"</td>";
				
			}
			
			$tablazat .= "</tr></table>";
			
			echo $tablazat;
		}
		else{
			echo "Nincs találat";
		}
		
		
	}
	
	
	$conn = new mysqli($server, $username, $password, $db_name);
	
	if($conn->connect_error)
		die($conn->connect_error);
	
	if(isset($_GET["telefon_nev"])){
		$telefon_nev = $_GET["telefon_nev"];
		
		TelefonKeres($telefon_nev, $conn);
		
	}

?>