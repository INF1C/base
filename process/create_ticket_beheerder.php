<?php

$create = new create;

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	var_dump($create->ticket());
	echo "<br>";
	$ticketID = $create->db->link->lastInsertID();
	$idBedrijfsMedewerker = filter_input(INPUT_POST, 'idBedrijfsMedewerker');
	$create->db->db_table = 'BEDRIJFSMEDEWERKER';
	$idBedrijf = $create->db->select(array('idBedrijf'), array('idBedrijfsMedewerker' => $idBedrijfsMedewerker))[0]['idBedrijf'];
	$create->db->db_table = 'MEDEWERKER';
	$idMedewerker = $create->db->select(array('idMedewerker'), array('Gebruikersnaam' => $_SESSION['gebruikersnaam']))[0]['idMedewerker'];
	var_dump($create->statusWijziging($ticketID, $idBedrijfsMedewerker, $idBedrijf, $idMedewerker));
} else {
	echo "Please post the next time!";
}