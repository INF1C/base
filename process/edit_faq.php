<?php

$edit = new edit;

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	$idFAQ = $_POST['idFAQ'];
	var_dump($edit->FAQ($idFAQ));
} else {
	echo "Please post the next time!";
}