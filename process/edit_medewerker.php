<?php

$edit = new edit;

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	$idMedewerker = $_POST['idMedewerker'];
	var_dump($edit->medewerker($idMedewerker));
} else {
	echo "Please post the next time!";
}