<?php

$create = new create;
$db = new db;

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	session_start();
	$_SESSION['gebruikersnaam'] = "pascal";
	echo "<pre>";
	var_dump($create->faq());
	echo "</pre>";
} else {
	echo "Please post the next time!";
}