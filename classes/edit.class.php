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
            "Email",
            "Voornaam",
            "Achternaam",
            "Tussenvoegsel");

        foreach ($fields as $key) {
            $data[$key] = filter_input(INPUT_POST, $key);
            if ($data[$key] === '' && $key !== "Tussenvoegsel") {
                return "U heeft " . $key . " niet ingevuld.";
            }
        }

        $where = array("idMedewerker" => $idMedewerker);
        $this->db->db_table = "MEDEWERKER";
        $check = $this->db->update($data, $where);
        if ($check === 1) {
            return TRUE;
        } else {
            return "Fout bij het bewerken.";
        }
    }

    public function bedrijfsMedewerker($idBedrijfsmedewerker) {
        //GEGEVENS TERUG VOEREN
        $fields = array(
            "Email",
            "Voornaam",
            "Achternaam",
            "Tussenvoegsel",
            "Functie");

        foreach ($fields as $key) {
            $data[$key] = filter_input(INPUT_POST, $key);
            if ($data[$key] === '' && $key !== "Tussenvoegsel") {
                return "U heeft " . $key . " niet ingevuld.";
            }
        }

        $where = array("idBedrijfsmedewerker" => $idBedrijfsmedewerker);
        $this->db->db_table = "BEDRIJFSMEDEWERKER";
        $check = $this->db->update($data, $where);
        if ($check === 1) {
            return TRUE;
        } else {
            return "Fout bij het bewerken.";
        }    }

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
                return "U heeft " . $key . " niet ingevuld.";
            }
        }

        $where = array("idBedrijf" => $idBedrijf);
        $this->db->db_table = "BEDRIJF";
        $check = $this->db->update($data, $where);
        if ($check === 1) {
            return TRUE;
        } else {
            return "Fout bij het bewerken.";
        }
    }

    /*
     * Author: Rene Cordes
     */

    public function FAQ($idFAQ) {
        //GEGEVENS TERUG VOEREN
        $fields = array(
            "Vraag",
            "Beschrijving",
            "Oplossing",
        );

        foreach ($fields as $key) {
            $data[$key] = filter_input(INPUT_POST, $key);
            if ($data[$key] === '') {
                return "U heeft " . $key . " niet ingevuld.";
            }
        }
        $where = array("idFAQ" => $idFAQ);
        $this->db->db_table = "FAQ";
        $check = $this->db->update($data, $where);
        if ($check === 1) {
            return TRUE;
        } else {
            return "Fout bij het bewerken.";
        }    }

    public function Ticket($idTicket) {   //GEGEVENS TERUG VOEREN
        $fields = array(
            "IncidentType",
            "Probleemstelling",
            "Oplossing",
        );

        foreach ($fields as $key) {
            $data[$key] = filter_input(INPUT_POST, $key);
            if ($data[$key] === '' && $key !== "Oplossing") {
                return "U heeft " . $key . " niet ingevuld.";
            }
        }

        $EnumCheck = array("Vraag", "Wens", "Uitval", "Functioneel probleem", "Technisch probleem");

        if (!in_array($data['IncidentType'], $EnumCheck))
            return "Waarde " . $data['IncidentType'] . " is hier niet toegestaan.";

        $where = array("idTicket" => $idTicket);
        $this->db->db_table = "TICKET";
        $check = $this->db->update($data, $where);
        if ($check === 1) {
            return TRUE;
        } else {
            return "Fout bij het bewerken.";
        }    }

    public function StatusWijziging($idStatus) { //GEGEVENS TERUG VOEREN
        $fields = array(
            "idBedrijfsMedewerker",
            "idMedewerker",
            "Status",
            "SoortContact",
            "Memo",
        );

        foreach ($fields as $key) {
            $data[$key] = filter_input(INPUT_POST, $key);
            if (($data[$key] === '' && $key !== "Memo") OR ($data[$key] === '' && $key !== "idMedewerker")) {
                return "U heeft " . $key . " niet ingevuld.";
            }
        }
        $this->db->db_table = "BEDRIJFSMEDEWERKER";
        $data['idBedrijf'] = $this->db->select(array('idBedrijf'), array('idBedrijfsMedewerker' => $data['idBedrijfsMedewerker']))[0]['idBedrijf'];
        
        if($data['idMedewerker'] == '')
            $data['idMedewerker'] = NULL;
        $EnumCheck = array("Nieuw", "In behandeling", "Doorgestuurd naar engineer", "Doorgestuurd naar account manager", "opgelost", "afgemeld");

        if (!in_array($data['Status'], $EnumCheck))
            return "Waarde " . $data['IncidentType'] . " is hier niet toegestaan.";

        $where = array("idStatus" => $idStatus);
        $this->db->db_table = "STATUS_WIJZIGING";
        $check = $this->db->update($data, $where);
        if ($check === 1) {
            return TRUE;
        } else {
            return "Fout bij het bewerken.";
        }    }

}
