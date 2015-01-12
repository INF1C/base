<?php
/*
 * Author: Pascal Drewes
 */
class user {
	
	public $db;

	public function __construct() {
		$this->db = new db();
		$this->db->db_table = "ACCOUNT";
	}

	public function register($fields, $Autorisatie) {
		// Store post input into $data and check for content
		$data = array();
		foreach ($fields as $key) {
			$data[$key] = filter_input(INPUT_POST, $key);
			if ($data[$key] === '') {
				trigger_error("Lege input");
			}
		}
		// Check if autorisatie is correct
		$autorisatieCheck = array('Teamleider', 'Admin', 'Medewerker', 'Bedrijfsmedewerker');
		if (!in_array($Autorisatie, $autorisatieCheck))
			trigger_error("Foute input in 'Autorisatie'");
		$data['Autorisatie'] = $Autorisatie;
		// Generate password hash using the safe PHP password_hash
		$data["Wachtwoord"] = password_hash($data["Wachtwoord"], PASSWORD_DEFAULT);
		// Check if the username allready exists
		$check = $this->db->select(array("Gebruikersnaam"), array("Gebruikersnaam" => $data["Gebruikersnaam"]));
		if (count($check) >= 1) {
			trigger_error("Gebruikersnaam bestaat al!");
			return false;
		} else {
			// Insert the data into the database
			$check = $this->db->insert($data);
			if ($check === 1) {
				return TRUE;
			} else {
				trigger_error("Error bij het aanmaken van uw account!");
			}
		}
	}

	public function login() {
		// Store data into variables
		$gebruikersnaam = filter_input(INPUT_POST, "Gebruikersnaam");
		$wachtwoord = filter_input(INPUT_POST, "Wachtwoord");
		// Check if data exists
		if ($gebruikersnaam == '' OR $wachtwoord == '') {
			return "Niet genoeg gegevens ingevoerd!";
	
		// Check if user exists
		$result = $this->db->select(array("Wachtwoord", "Autorisatie"), array("Gebruikersnaam" => $gebruikersnaam));
		if (count($result) === 0) {
			return "Gebruikersnaam niet gevonden!";

		// Store hash and check if password is correct
		$hash = $result[0]["Wachtwoord"];
		if (password_verify($wachtwoord, $hash)) {
			// Generate session variables
			$_SESSION['loggedIn'] = TRUE;
			$_SESSION['autorisatie'] = $result[0]["Autorisatie"];
			$_SESSION['gebruikersnaam'] = $gebruikersnaam;
			return TRUE;
		} 
		return "Verkeerd wachtwoord!";
	}

	public function isLoggedIn() {
		if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === TRUE) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

}
