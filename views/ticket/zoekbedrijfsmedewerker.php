<?php
		if (isset($_POST['zoekterm']))
		{
			$db = new db();
			$zoekterm = filter_input(INPUT_POST, 'zoekterm');
			$stmt = $db->link->prepare("SELECT * FROM BEDRIJFSMEDEWERKER WHERE Voornaam LIKE ? OR Achternaam LIKE ?");
			$stmt->bindValue(1, "%" . $zoekterm . "%");
			$stmt->bindValue(2, "%" . $zoekterm . "%");
			$stmt->execute();
			$returnArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "<table class='table table-hover'>";
			echo "<tr>";
			echo "<th> idBedrijf </th>";
			echo "<th> Gebruikersnaam </th>";
			echo "<th> Email </th>";
			echo "<th> Voornaam </th>";
			echo "<th> Achternaam </th>";
			echo "<th> Tussenvoegsel </th>";
			echo "<th> Functie </th>";
			echo "</tr>";
			foreach($returnArray as $result)
			{
				echo "<tr>";
				foreach($result as $key => $subresult){
					
					if($key == "idBedrijfsMedewerker"){
						$id = $subresult;
					} else {
						echo "<td>";
						echo $subresult;
						echo "</td>";
					}
				}
				echo "<td><a href='' onclick=\"$('#VeldBedrijfsMedewerker').val('" . $id . "')\">Klik hier om te bewerken</a></td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		?>