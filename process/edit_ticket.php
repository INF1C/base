<?php

$edit = new edit;

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	$idTicket = $_POST['idTicket'];
	var_dump($edit->ticket($idTicket));
} else {
	echo "Please post the next time!";
}