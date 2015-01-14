<?php

$user = new user;

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	$gebruikersnaam = $_SESSION['gebruikersnaam'];
	var_dump($user->changePassword($gebruikersnaam));
} else {
	echo "Please post the next time!";
}