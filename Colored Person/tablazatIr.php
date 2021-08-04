<?php
	print("<table border='1'><tr><th onclick='tablazat(1)'>Név</th><th>Életkor</th><th>Hallgató</th>
	<th>Dolgozik</th><th>Nem</th></tr>");
	
	$conn = new mysqli("localhost","root","","szinesemberek");
	if($conn->connect_error)
		die("Nem sikerült az adatbázishoz kapcsolódni!");
		
	$rendez="";	
	if($_GET["szamlalo"]!=0)
	{
		if($_GET["szamlalo"]%2==1)
			$rendez=" ORDER BY nev ASC";
		else 
			$rendez=" ORDER BY nev DESC";
	}
		
	$sql="SELECT * FROM emberek".$rendez;
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc())
		print('<tr bgcolor="'.$row["szin"].'"><td>'.$row["nev"].'</td><td>'.$row["kor"].'</td><td>'.
		$row["hallgato"].'</td><td>'.$row["dolgozik"].'</td><td>'.$row["nem"].'</td></tr>');
	$conn->close();	
	
	print("</table>");
?>