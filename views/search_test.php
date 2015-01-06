<?php
$db = new db();

if (isset($_POST['zoekterm'])) {
		$zoekterm = filter_input(INPUT_POST, 'zoekterm');
		$optie = filter_input(INPUT_POST, 'optie');
		$db->db_table = $optie;
		ECHO $db->select(array('*'), array(VELDNAAM -> ZOEKWAARDE));




?>