<?php

$create = new create;

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	$bedrijfsID = $_POST['Bedrijf'];
	var_dump($create->bedrijfsMedewerker($bedrijfsID));
} else {
	echo "Please post the next time!";
}