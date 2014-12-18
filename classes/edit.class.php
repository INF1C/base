<?php
class edit {

    public $db;

    public function __construct() {
        $this->db = new db();
    }

    /*
     * Author: Sieger van Iest
     */
    
    // WIJZIG GEGEVENS MEDEWERKER
    public function medewerker($idMedewerker) {
        //GEGEVENS TERUG VOEREN
        $fields = array(
            "Gebruikersnaam",
            "Email",
            "Voornaam",
            "Achternaam",
            "Tussenvoegsel");

        foreach ($fields as $key) {
            $data[$key] = filter_input(INPUT_POST, $key);
            if ($data[$key] === '') {
                trigger_error("Lege input");
            }
        }
        
        $where = array("idMedewerker" => $idMedewerker);

        return $this->db->update($data, $where);
    }

    public function bedrijfsMedewerker($idBedrijfsmedewerker) {
        //GEGEVENS TERUG VOEREN
        $fields = array(
            "Gebruikersnaam",
            "Email",
            "Voornaam",
            "Achternaam",
            "Tussenvoegsel",
            "Functie");
        
        foreach ($fields as $key) {
            $data[$key] = filter_input(INPUT_POST, $key);
            if ($data[$key] === '') {
                trigger_error("Lege input");
            }
        }

        $where = array("idBedrijfsmedewerker" => $idBedrijfsmedewerker);

        return $this->db->update($data, $where);
    }

    public function bedrijf($idBedrijf) {
        //GEGEVENS TERUG VOEREN
        $fields = array(
            "Bedrijfsnaam",
            "Adresgegevens",
            "Telefoon",
            "Email",
            "Licentie");
        
        foreach ($fields as $key) {
            $data[$key] = filter_input(INPUT_POST, $key);
            if ($data[$key] === '') {
                trigger_error("Lege input");
            }
        }

        $where = array("idBedrijf" => $idBedrijf);

        return $this->db->update($data, $where);
    }

}
