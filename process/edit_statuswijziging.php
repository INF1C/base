<?php

$edit = new edit;

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	$idStatus = $_POST['idStatus'];
	var_dump($edit->StatusWijziging($idStatus));
} else {
	echo "Please post the next time!";
}