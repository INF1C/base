<?php
if(isset($_POST['idTicket'])){
	$idTicket = filter_input(INPUT_POST, 'idTicket');
	$output = new output;
	$ticket = $output->ticket($idTicket);
	$status = $output->Statuswijziging($idTicket);
	$laatsteStatus = array_pop($status);

	?>
	<div class="col-lg-7 showback">
		<table class="table">
			<tr>
				<td>Ticket ID:</td>
				<td><?= $idTicket ?></td>
			</tr>
			<tr>
				<td>Bedrijf:</td>
				<td><?= $laatsteStatus['Medewerker'] ?></td>
			</tr>
			<tr>
				<td>Incident type:</td>
				<td><?= $ticket['IncidentType'] ?></td>
			</tr>
			<tr>
				<td>Probleemstelling:</td>
				<td><?= $ticket['Probleemstelling'] ?></td>
			</tr>
			<tr>
				<td>Oplossing:</td>
				<td><?= $ticket['Oplossing'] ?></td>
			</tr>
		</table>
	</div>
	<div class="col-lg-3 showback">
		<img class="img-responsive img-circle" src="https://cdn2.iconfinder.com/data/icons/danger-problems/512/anonymous-512.png" alt="Anonymous">
		<p class="text-center">Medewerker: <?= $laatsteStatus['Medewerker'] ?></p>
	</div>

	<?php
	echo "<pre>"; var_dump(get_defined_vars()); echo "</pre>";

}

