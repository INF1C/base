<?php
$output = new output;
$idBedrijf = $params;
$bedrijf = $output->Bedrijf($idBedrijf)[0];
$tickets = $output->tickets($idBedrijf);
?>
<div class="col-lg-12 showback">
	<table class="table">
		<tr>
			<td>Bedrijfs ID:</td>
			<td><?= $idBedrijf ?></td>
		</tr>
		<tr>
			<td>Bedrijfsnaam:</td>
			<td><?= $bedrijf['Bedrijfsnaam'] ?></td>
		</tr>
		<tr>
			<td>Adresgegevens:</td>
			<td><?= $bedrijf['Adresgegevens'] ?></td>
		</tr>
		<tr>
			<td>Telefoon:</td>
			<td><?= $bedrijf['Telefoon'] ?></td>
		</tr>
		<tr>
			<td>E-mail adres:</td>
			<td><?= $bedrijf['Email'] ?></td>
		</tr>
		<tr>
			<td>Licentie:</td>
			<td><?= $bedrijf['Licentie'] == 1 ? 'Nee' : 'Ja' ?></td>
		</tr>
	</table>
</div>

<div class="col-lg-12 showback">

</div>