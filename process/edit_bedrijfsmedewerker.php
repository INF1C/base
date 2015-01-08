<?php

$edit = new edit;

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	$idBedrijfsMedewerker = $_POST['idBedrijfsMedewerker'];
	var_dump($edit->bedrijfsMedewerker($idBedrijfsMedewerker));
} else {
	echo "Please post the next time!";
}