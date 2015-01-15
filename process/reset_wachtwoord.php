<?php

$user = new user;

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	$gebruikersnaam = filter_input(INPUT_POST, 'Gebruikersnaam');
	var_dump($user->changePassword($gebruikersnaam));
} else {
	echo "Please post the next time!";
}