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
            if ($data[$key] === '') {
                trigger_error("Lege input");
            }
        }

        $where = array("idMedewerker" => $idMedewerker);
        $this->db->db_table = "MEDEWERKER";
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

    /*
     * Author: Rene Cordes
     */

    public function FAQ($Vraag, $idMedewerker) {
        //GEGEVENS TERUG VOEREN
        $fields = array(
            "Vraag",
            "Beschrijving",
            "Oplossing",
        );

        foreach ($fields as $key) {
            $data[$key] = filter_input(INPUT_POST, $key);
            if ($data[$key] === '') {
                trigger_error("Lege input");
            }
        }
        $where = array("idMedewerker" => $idMedewerker,
            "Vraag" => $Vraag);

        return $this->db->update($data, $where);
    }

    public function Ticket($idTicket) {   //GEGEVENS TERUG VOEREN
        $fields = array(
            "IncidentType",
            "Probleemstelling",
            "Oplossing",
        );

        foreach ($fields as $key) {
            $data[$key] = filter_input(INPUT_POST, $key);
            if ($data[$key] === '') {
                trigger_error("Lege input");
            }
        }

        $EnumCheck = array("Vraag", "Wens", "Uitval", "Functioneel probleem", "Technisch probleem");

        if (!in_array($data['IncidentType'], $EnumCheck))
            die("Check failed");


        $where = array("idTicket" => $idTicket);

        return $this->db->update($data, $where);
    }

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
            if ($data[$key] === '') {
                trigger_error("Lege input");
            }
        }

        $EnumCheck = array("Nieuw", "In behandeling", "Doorgestuurd naar engineer", "Doorgestuurd naar account manager", "opgelost", "afgemeld");

        if (!in_array($data['Status'], $EnumCheck))
            die("Check failed");

        $where = array("idStatus" => $idStatus);

        return $this->update($data, $where);
    }

}
