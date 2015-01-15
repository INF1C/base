<?php
isset($_POST['zoekterm']) ? $zoekterm = filter_input(INPUT_POST, 'zoekterm') : $zoekterm = '';
?>
	<div class="col-lg-12 showback">
		<h2>Zoek bedrijf</h2>
		<form class="form-inline" method="POST" action="" role="form">
			<div class="form-group">
				<label class="sr-only" for="zoekterm">Bedrijfsnaam of telefoonnummer:</label>
				<input type="text" name="zoekterm" class="form-control" id="zoekterm" placeholder="Zoekterm" value="<?= $zoekterm ?>">
			</div>
			<button type="submit" class="btn btn-theme">Zoek</button>
			<span class="clearfix"></span>
			<small>Klik op de rij om meer informatie over het specifieke bedrijf te krijgen.</small>
		</form>
	</div>
		<?php
		if (isset($_POST['zoekterm']))
		{
			echo "<div class='col-lg-12 showback'>";
			$db = new db();
			$zoekterm = filter_input(INPUT_POST, 'zoekterm');
			$stmt = $db->link->prepare("SELECT * FROM BEDRIJF WHERE Bedrijfsnaam LIKE ? OR Telefoon LIKE ?");
			$stmt->bindValue(1, "%" . $zoekterm . "%");
			$stmt->bindValue(2, "%" . $zoekterm . "%");
			$stmt->execute();
			$returnArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "<table class='table table-hover'>";
			echo "<tr>";
			echo "<th> Bedrijfsnaam </th>";
			echo "<th> Adresgegevens </th>";
			echo "<th> Telefoon </th>";
			echo "<th> Email </th>";
			echo "<th> Licentie </th>";
			echo "</tr>";
			foreach($returnArray as $result)
			{
				$id = $result['idBedrijf'];
				?><tr onclick="window.document.location='/rapporten/bedrijf/<?= $id ?>'"> <?php
				foreach($result as $key => $subresult){
					
					if($key == "idBedrijf"){
						$id = $subresult;
					} elseif ($key == "Licentie") {
						echo "<td>" . $subresult == 1 ? 'Nee' : 'Ja' . "</td>";
					} else {	
						echo "<td>";
						echo $subresult;
						echo "</td>";
					}
				}
				echo "</tr>";
			}
			echo "</table>";
			echo "	</div>";
		}
		?>