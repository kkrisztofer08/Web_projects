<html lang="hu">
	<head>
		<link rel="stylesheet" href="szemelyStyle.css">
		<meta charset="utf-8">
		<script>
		var counter=0;
		function tablazat(szam)
		{
		  var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			  document.getElementById("tablazat").innerHTML = this.responseText;
			}
		  };
		  
		  counter+=szam;
		  var aruStr="tablazatIr.php?szamlalo="+counter;
		  xhttp.open("GET", aruStr, true);
		  xhttp.send(null);
		}
		</script>
	</head>
	<body>
		<h1 name="cim">Személyek megjelenítése színes háttérrel</h1>
		<form action="szinesSzemelyek.php" method="post">
			Szín neve:<input name="szinNev">
			<input type="submit" name="szinAdd" value="Hozzáad">
			<input type="submit" name="szinDel" value="Törlés"> 
		</form>
		<?php
			if(isset($_POST["szinAdd"]))
			{
				$conn = new mysqli("localhost","root","","szinesemberek");
				if($conn->connect_error)
					die("Nem sikerült az adatbázishoz kapcsolódni!");
				$sql="INSERT INTO szinek (nev) VALUES ('".$_POST["szinNev"]."')";
				$conn->query($sql);
				$conn->close();
			}

			if(isset($_POST["szinDel"]))
			{
				$conn = new mysqli("localhost", "root", "", "szinesemberek");
				if($conn->connect_error){
					die("Nem sikerült kapcsolódni a szerver adatbázisához");
				}
				$sql = "DELETE FROM szinek WHERE nev='".$_POST["szinNev"]."'";
				$conn->query($sql);
				$conn->close();
			}
		?>
		<form action="szinesSzemelyek.php" method="post">
		<h2>Személy hozzáadása</h2>
		<fieldset>
			<legend>Személy adatai</legend>
			Név:<input name="nev"><br>
			Életkor:<input name="kor"><br>
			Hallgató <input type="checkbox" name="hallgato">
			Dolgozik <input type="checkbox" name="dolgozik"><br>
			Nő <input type="radio" name="nem" value="N">
			Férfi <input type="radio" name="nem" value="F"><br>
			A rekord megjelenítésénél használt háttérszín <select name="szin">
			<?php
				$conn = new mysqli("localhost","root","","szinesemberek");
				if($conn->connect_error)
					die("Nem sikerült az adatbázishoz kapcsolódni!");
				$sql="SELECT nev FROM szinek";
				$result = $conn->query($sql);
				while($row=$result->fetch_assoc())
					print('<option value="'.$row["nev"].'">'.$row["nev"].'</option>');
				$conn->close();
			?>
			</select><br>
			<input type="submit" name="szemelyAdd" value="Hozzáad">
		</fieldset>
		</form>
		<?php
			if(isset($_POST["szemelyAdd"]))
			{
				$conn = new mysqli("localhost","root","","szinesemberek");
				if($conn->connect_error)
					die("Nem sikerült az adatbázishoz kapcsolódni!");
				if(isset($_POST["hallgato"]))
					$h="true";
				else
					$h="false";
				if(isset($_POST["dolgozik"]))
					$d="true";
				else
					$d="false";
				$sql="INSERT INTO emberek (nev,kor,hallgato,dolgozik,nem,szin)
				VALUES ('".$_POST["nev"]."',".$_POST["kor"].",".$h.",".$d.",'".
				$_POST["nem"]."','".$_POST["szin"]."')";
				$conn->query($sql);
				$conn->close();
			}
		?>

		<h2>Személy törlése</h2>
		<form action="szinesSzemelyek.php" method="post">
			<fieldset>
				<legend>Személy adatai:</legend>
				Név: <input type="text" name="deleteName">
				<input type="submit" value="Törlés" name="szemelyTorol">
			</fieldset>
		</form>
		<?php
			if(isset($_POST["szemelyTorol"])){
				$conn = new mysqli("localhost","root","","szinesemberek");
				if($conn->connect_error){
					die("Nem sikerült kapcsolódni a(z) szerver adatbázisához!");
				}
				$sql = "DELETE FROM emberek WHERE nev='".$_POST["deleteName"]."'";
				$conn->query($sql);
				$conn->close();
			}
		?>

		<button onclick="tablazat(0)">Megmutat</button>
		<p align="center" id="tablazat"></p>
	</body>
</html>

