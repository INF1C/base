<?php
$db = new db;
if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	$db->db_table = "ACCOUNT";
	$data = array('Autorisatie' => filter_input(INPUT_POST, 'Autorisatie'));
	$where = array('Gebruikersnaam' => filter_input(INPUT_POST, 'Gebruikersnaam'))
	var_dump($db->update($data, $where));
}