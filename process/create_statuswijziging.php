<?php

$create = new create;
$db = new db;

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	$idTicket = filter_input(INPUT_POST, 'idTicket');
	$idBedrijfsmedewerker = filter_input(INPUT_POST, 'idBedrijfsmedewerker');
	$db->db_table = "BEDRIJFSMEDEWERKER";
	$idBedrijf = $db->select(array('idBedrijf'), array('idBedrijfsMedewerker' => $idBedrijfsmedewerker))[0]['idBedrijf'];
	echo "<pre>";
	var_dump($idBedrijf);
	var_dump($create->statusWijziging($idTicket, $idBedrijfsmedewerker, $idBedrijf));
	echo "</pre>"
} else {
	echo "Please post the next time!";
}