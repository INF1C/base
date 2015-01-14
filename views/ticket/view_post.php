<?php
if(isset($_POST['idTicket'])){
	$idTicket = filter_input(INPUT_POST, 'idTicket');
	$output = new output;
	$ticket = $output->ticket($idTicket);
	$status = $output->Statuswijziging($idTicket);
	$laatsteStatus = array_pop($status);

echo "<pre>"; var_dump(get_defined_vars()); echo "</pre>";

















}

