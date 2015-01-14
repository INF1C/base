<?php
$output = new output;
$idBedrijfsmedewerker = $params;
$bedrijfsmedewerker = $output->BedrijfsMedewerker($idBedrijfsmedewerker)[0];

$idBedrijf = $bedrijfsmedewerker['idBedrijf'];
$bedrijf = $output->Bedrijf($idBedrijf)[0];

$statuswijziging = $output->Statuswijziging(NULL, $idBedrijfsmedewerker);
?>
<div class="col-lg-6 showback">
	<p class="text-center">Bedrijfsmedewerker:</p>
	<table class="table">
		<tr>
			<td>Bedrijfs Medewerker ID:</td>
			<td><?= $idBedrijfsmedewerker ?></td>
		</tr>
		<tr>
			<td>Voornaam:</td>
			<td><?= $bedrijfsmedewerker['Voornaam'] ?></td>
		</tr>
		<tr>
			<td>Tussenvoegsel:</td>
			<td><?= $bedrijfsmedewerker['Tussenvoegsel'] ?></td>
		</tr>
		<tr>
			<td>Achternaam:</td>
			<td><?= $bedrijfsmedewerker['Achternaam'] ?></td>
		</tr>
		<tr>
			<td>Functie:</td>
			<td><?= $bedrijfsmedewerker['Functie'] ?></td>
		</tr>
		<tr>
			<td>E-mail adres:</td>
			<td><?= $bedrijfsmedewerker['Email'] ?></td>
		</tr>
	</table>
</div>
<div class="col-lg-5 showback pull-right">
	<p class="text-center">Bedrijfsinformatie</p>
	<table class="table">
		<tr>
			<td>Bedrijfsnaam:</td>
			<td><?= $bedrijf['Bedrijfsnaam'] ?></td>
		</tr>
		<tr>
			<td>Telefoon:</td>
			<td><?= $bedrijf['Telefoon'] ?></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><?= $bedrijf['Email'] ?></td>
		</tr>
		<tr>
			<td>Licentie:</td>
			<td><?= $bedrijf['Licentie'] == 1 ? 'Nee' : 'Ja' ?></td>
		</tr>
	</table>
</div>
<div class="col-lg-12 showback">
		<h3>Status wijzigingen:</h3>
		<table class="table table-hover">
			<tr>
				<th>Datum - Tijd</th>
				<th>Status</th>
				<th>Soort contact</th>
				<th>Memo</th>
				<th>Medewerker</th>
			</tr>
			<?php
			foreach ($statuswijziging as $value) {
				echo "<tr>";
				foreach($value as $key => $subvalue){
					if($key == 'Bedrijfsmedewerker')
						continue;
					echo "<td>" . $subvalue . "</td>";
				}
				echo "</tr>";
			}
			?>
		</table>
	</div>
