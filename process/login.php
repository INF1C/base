<?php
$user = new user;
if($user->login() === TRUE){
	header("Location: /");
} else {
	$_SESSION['error'] = $user->login();
}