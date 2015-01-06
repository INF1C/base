<?php

$create = new create;

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	var_dump($create->bedrijf());
} else {
	echo "Please post the next time!";
}