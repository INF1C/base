<?php
require_once 'user.class.php';
class create extends user {
    
    public function __construct() {
        parent::__construct();
    }
    
public function FAQ() {
//Kevin Bosman
$this->db_table = "MEDEWERKER";

$fields = array("idMedewerker");
$where = array("Gebruikersnaam" => $_SESSION['gebruikersnaam']);

$idMedewerker = $this->select($fields, $where); 
//↑Medewerker id van de ingelogde gebruiker


$this->db_table = "FAQ";

 $fields = array(
	"Vraag",
	"Beschrijving",
	"Oplossing");
	
//↑Ophalen van de benodige velden

	$data = array();
        foreach ($fields as $key) {
            $data[$key] = filter_input(INPUT_POST, $key);
				if ($data[$key] === '') {
					trigger_error("U heeft niets ingevuld!");
				}
		}
//↑Vullen van de benodige velden
			
	$check = $this->insert($data);
        if ($check === 1){
            return TRUE;
        } 	else{
				trigger_error("Fout tijdens het aanmaken van uw FAQ");
			}
//↑Velden naar database sturen
}



public function ticket() {
//Kevin Bosman
$this->db_table = "TICKET";

$fields = array(
	"IncidentType",
	"Probleemstelling",
	"Oplossing");
	
//↑Ophalen van de benodige velden

	$data = array();
        foreach ($fields as $key) {
            $data[$key] = filter_input(INPUT_POST, $key);
				if ($data[$key] === '') {
					trigger_error("U heeft niets ingevuld!");
				}
		}
		$incident = array('Vraag','Wens','Uitval','Functioneel probleem','Technisch probleem');
			if(!in_array($data["IncidentType"], $incident)){
				trigger_error("De invulmogelijkheden zijn: Vraag, Wens, Uitval, Functioneel probleem, Technisch probleem. Uw ingevulde incidenttype voldoet hier niet aan!");
			}
		
//↑Vullen van de benodige velden
			
	$check = $this->insert($data);
        if ($check === 1){
            return TRUE;
        } 	else{
				trigger_error("Fout tijdens het aanmaken van uw ticket");
			}
//↑Velden naar database sturen

}



public function status($idTicket, $idBedrijfsmedewerker, $idBedrijf, $idMedewerker) {
//Kevin Bosman
$this->db_table = "STATUS_WIJZIGING";

 $fields = array(
	"Status",
	"SoortContact",
	"Memo",
 );
//↑Ophalen benodige velden

	$data = array();
        foreach ($fields as $key) {
            $data[$key] = filter_input(INPUT_POST, $key);
				if ($data[$key] === '') {
					trigger_error("U heeft niets ingevuld!");
				}
		}
//↑Checken of er iets ingevuld is	
		
$data["idTicket"] = $idTicket;
$data["idBedrijfsmedewerker"] = $idBedrijfsmedewerker;
$data["idBedrijf"] = $idBedrijf;
$data["idMedewerker"] = $idMedewerker;

	$status = array('Nieuw','In behandeling','Doorgestuurd naar engineer','Doorgestuurd naar account manager','Opgelost','Afgemeld');
			if(!in_array($data["Status"], $status)){
				trigger_error("De invulmogelijkheden zijn: Nieuw, In behandeling, Doorgestuurd naar engineer, Doorgestuurd naar account manager, Opgelost , Afgemeld. Uw ingevulde incidenttype voldoet hier niet aan!");
			}
//↑Checken of status voldoet aan de voorwaarden		
			
			
	date_default_timezone_set('Europe/Amsterdam');		
	$date = date('Y-m-d H-i-s');
	$data["DatumTijd"] = array("DatumTijd" => $date);
//↑Timestamp aanmaken voor DatumTijd veld	
	
	$check = $this->insert($data);
        if ($check === 1){
            return TRUE;
        } 	else{
				trigger_error("Fout tijdens het wijzigigen van de status");
			}
//↑Velden naar database sturen			
}

}