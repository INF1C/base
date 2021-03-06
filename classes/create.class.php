<?php

class create {

    public $db;
    public $user;

    public function __construct() {
        $this->db = new db();
        $this->user = new user();
    }

    /*
     * Author: Kevin Bosman
     */

    public function FAQ() {
        $this->db->db_table = "MEDEWERKER";

        $fields = array("idMedewerker");
        $where = array("Gebruikersnaam" => $_SESSION['gebruikersnaam']);

        $idMedewerker = $this->db->select($fields, $where)[0]['idMedewerker'];
        //↑Medewerker id van de ingelogde gebruiker


        $this->db->db_table = "FAQ";
        $fields = array(
            "Vraag",
            "Beschrijving",
            "Oplossing");
        //↑Ophalen van de benodige velden

        $data = array();
        foreach ($fields as $key) {
            $data[$key] = filter_input(INPUT_POST, $key);
            if ($data[$key] === '') {
                return "U heeft het veld " . $key . " niet ingevuld!";
            }
        }
        //↑Vullen van de benodige velden

        $data['idMedewerker'] = $idMedewerker;
        $check = $this->db->insert($data);
        if ($check === 1) {
            return TRUE;
        } else {
            return "Fout tijdens het aanmaken van uw FAQ";
        }
        //↑Velden naar database sturen
    }

    public function ticket() {
        $this->db->db_table = "TICKET";

        $fields = array(
            "IncidentType",
            "Probleemstelling",
            "Oplossing");
        //↑Ophalen van de benodige velden

        $data = array();
        foreach ($fields as $key) {
            $data[$key] = filter_input(INPUT_POST, $key);
            if ($data[$key] === '' && $key !== "Oplossing") {
                return "U heeft niets ingevuld!";
            }
        }
        $incident = array('Vraag', 'Wens', 'Uitval', 'Functioneel probleem', 'Technisch probleem');
        if (!in_array($data["IncidentType"], $incident)) {
            return "De invulmogelijkheden zijn: Vraag, Wens, Uitval, Functioneel probleem, Technisch probleem. Uw ingevulde incidenttype voldoet hier niet aan!";
        }
        //↑Vullen van de benodige velden

        $check = $this->db->insert($data);
        if ($check === 1) {
            return TRUE;
        } else {
            return "Fout tijdens het aanmaken van uw ticket";
        }
        //↑Velden naar database sturen
    }

    public function statusWijziging($idTicket, $idBedrijfsmedewerker = NULL, $idBedrijf = NULL, $idMedewerker = NULL, $status = NULL) {
        $this->db->db_table = "STATUS_WIJZIGING";

        $fields = array(
            "Status",
            "SoortContact",
            "Memo",
        );
        //↑Ophalen benodige velden

        $data = array();
        foreach ($fields as $key) {
            $data[$key] = filter_input(INPUT_POST, $key);
            if ($data[$key] === '' && $key !== "Memo") {
                return "U heeft " . $key . " niet ingevuld!";
            }
        }
        //↑Checken of er iets ingevuld is	
        $data["idTicket"] = $idTicket;
        if($idBedrijfsmedewerker !== NULL)
            $data["idBedrijfsmedewerker"] = $idBedrijfsmedewerker;
        if($idBedrijf !== NULL)
            $data["idBedrijf"] = $idBedrijf;
        if($idMedewerker !== NULL)
            $data["idMedewerker"] = $idMedewerker;
        if($status !== NULL)
            $data["Status"] = $status;

        $status = array('Nieuw', 'In behandeling', 'Doorgestuurd naar engineer', 'Doorgestuurd naar account manager', 'opgelost', 'afgemeld');
        if (!in_array($data["Status"], $status)) {
            return "De invulmogelijkheden zijn: Nieuw, In behandeling, Doorgestuurd naar engineer, Doorgestuurd naar account manager, Opgelost , Afgemeld. Uw ingevulde incidenttype voldoet hier niet aan!";
        }
        //↑Checken of status voldoet aan de voorwaarden		


        date_default_timezone_set('Europe/Amsterdam');
        $date = date('Y-m-d H-i-s');
        $data["DatumTijd"] = $date;
        //↑Timestamp aanmaken voor DatumTijd veld	

        $check = $this->db->insert($data);
        if ($check === 1) {
            return TRUE;
        } else {
            return "Fout tijdens het wijzigigen van de status";
        }
        //↑Velden naar database sturen			
    }

    /*
     * Author: Martijn Posthuma
     */

    //Dit haalt de data uit de velden en stopt ze in de database
    public function medewerker() {
        $this->db->db_table = "MEDEWERKER";
        if ($this->user->register(array("Gebruikersnaam", "Wachtwoord"), "Medewerker")) {
            $data = array();
            $fields = array(
                "Gebruikersnaam",
                "Email",
                "Voornaam",
                "Achternaam",
                "Tussenvoegsel");
            foreach ($fields as $field) {
                $data[$field] = filter_input(INPUT_POST, $field);
                if ($data[$field] === '' && $field !== "Tussenvoegsel") {
                    return "U heeft " . $field . " niet ingevuld!";
                }
            }
            // Insert the data into the database
            $this->db->db_table = "MEDEWERKER";
            $check = $this->db->insert($data);
            if ($check === 1) {
                return TRUE;
            } else {
                return "Error bij het aanmaken van uw account";
            }
        }
    }

    //Dit haalt de data uit de velden en stopt ze in de database
    public function bedrijfsMedewerker($idBedrijf) {
        $this->db->db_table = "BEDRIJF";
        //Dit contoleerd of er wel een bedrijf is
        $check = $this->db->select(array($idBedrijf), array("idBedrijf" => $idBedrijf));
        if (count($check) === 1) {
            if ($this->user->register(array("Gebruikersnaam", "Wachtwoord"), "Bedrijfsmedewerker")) {
                $data = array();
                $fields = array(
                    "Gebruikersnaam",
                    "Email",
                    "Voornaam",
                    "Achternaam",
                    "Tussenvoegsel",
                    "Functie");
                foreach ($fields as $field) {
                    $data[$field] = filter_input(INPUT_POST, $field);
                    if ($data[$field] === '' && $field !== "Tussenvoegsel") {
                        return "U heeft " . $field . " niet ingevuld!";
                    }
                }
                $data['idBedrijf'] = $idBedrijf;
                // Insert the data into the database
                $this->db->db_table = "BEDRIJFSMEDEWERKER";
                $check = $this->db->insert($data);
                if ($check === 1) {
                    return TRUE;
                } else {
                    return "Error bij het aanmaken van uw account";
                }
            }
        } else {
            return "Bedrijf bestaat niet";
        }
    }

    //Dit haalt de data uit de velden en stopt ze in de database
    public function bedrijf() {
        $this->db->db_table = "BEDRIJF";
        $data = array();
        $fields = array(
            "Bedrijfsnaam",
            "Adresgegevens",
            "Telefoon",
            "Email",
            "Licentie");
        foreach ($fields as $field) {
            $data[$field] = filter_input(INPUT_POST, $field);
            if ($data[$field] === '') {
                return "U heeft " . $field . " niet ingevuld!";
            }
        }
        // Insert the data into the database
        $this->db->db_table = "BEDRIJF";
        $check = $this->db->insert($data);
        if ($check === 1) {
            return TRUE;
        } else {
            return "Error bij het aanmaken van uw account";
        }
    }

}
