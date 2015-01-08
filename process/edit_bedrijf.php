<?php

$edit = new edit;

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	$idBedrijf = $_POST['idBedrijf'];
	var_dump($edit->bedrijf($idBedrijf));
} else {
	echo "Please post the next time!";
}