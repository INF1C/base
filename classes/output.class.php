<?php
class output {
    
    public $db;
    
    public function __construct() {
        $this->db = new db();
    }

    /*
     * Created by Lesley Jordan van Oostenrijk
     * Date: 17-12-2014
     * Description: public function tickets -> overzicht geven van alle tickets
     */

    public function tickets($idBedrijf = NULL, $periode = NULL) {
        if($bedrijf === NULL AND $periode === NULL) {
            $this->db->db_table = "TICKET";
            $alleTicketID = $this->db->select(array("idTicket"));
            echo "<pre>"; var_dump($alleTicketID); echo "</pre>";
        } elseif($periode === NULL AND $idBedrijf != NULL) {
            $this->db->db_table = "STATUS_WIJZIGING";
            $stmt = $this->db->link->prepare("SELECT idTicket FROM STATUS_WIJZIGING WHERE idBedrijf = ? GROUP BY idBedrijf, idBedrijf");
            $stmt->bindValue(1, $idBedrijf);
            $stmt->execute();
            $alleTicketID = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } elseif($idBedrijf === NULL AND $periode != NULL) {
            $start = $periode['start'];
            $stop = $periode['stop'];
            $this->db->db_table = "STATUS_WIJZIGING";
            $stmt = $this->db->link->prepare("SELECT idTicket FROM STATUS_WIJZIGING WHERE DatumTijd >= ? AND DatumTijd <= ? GROUP BY idBedrijf, idBedrijf");
            $stmt->bindValue(1, $start);
            $stmt->bindValue(2, $stop);
            $stmt->execute();
            $alleTicketID = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        $return = array();

        foreach ($alleTicketID as $ticketArray) {
            $ticket = $ticketArray['idTicket'];

            $this->db->db_table = "TICKET";

            $return[$ticket]['IncidentType'] = $this->db->select(array("IncidentType"), array("idTicket" => $ticket));
            $return[$ticket]['ProbleemStelling'] = $this->db->select(array("ProbleemStelling"), array("idTicket" => $ticket));

            $this->db->db_table = "STATUS_WIJZIGING";
            $return[$ticket]['HuidigeStatus'] = $this->db->select(NULL, NULL, "SELECT Status FROM STATUS_WIJZIGING WHERE idTicket = " . $ticket . " ORDER BY idStatus DESC LIMIT 1");
            $return[$ticket]['GeopendOp'] = $this->db->select(NULL, NULL, "SELECT DatumTijd FROM STATUS_WIJZIGING WHERE idTicket = " . $ticket . " ORDER BY idStatus ASC LIMIT 1");

            $idBedrijf = $this->db->select(NULL, NULL, "SELECT idBedrijf FROM STATUS_WIJZIGING WHERE idTicket = " . $ticket . " ORDER BY idStatus ASC LIMIT 1")[0]['idBedrijf'];
            
            $this->db_table = "BEDRIJF";
            $return[$ticket]["Bedrijf"] = $this->db->select(array("Bedrijfsnaam"), array("idBedrijf" => $idBedrijf));
        }

        return $return;
    }

    /*
     * Created by Lesley Jordan van Oostenrijk
     * Date: 17-12-2014
     * Description: public function tickets -> overzicht geven van alle open tickets
     */

    public function openTickets() {

        $sql = "SELECT idTicket FROM STATUS_WIJZIGING WHERE Status != 'opgelost' OR Status != 'afgemeld' GROUP BY idTicket";
        $alleOpentickets = $this->db->select(NULL, NULL, $sql);
        $return = array();
        foreach ($alleOpentickets as $openticketArray) {

            //Alle data uit Ticket wordt gehaald
            $openticket = $openticketArray['idTicket'];
            $this->db->db_table = "TICKET";

            $return[$openticket]['IncidentType'] = reset(reset($this->db->select(array("IncidentType"), array("idTicket" => $openticket))));
            $return[$openticket]['ProbleemStelling'] = reset(reset($this->db->select(array("ProbleemStelling"), array("idTicket" => $openticket))));

            //Alle data uit STATUS_WIJZIGING wordt gehaald

            $this->db_table = "STATUS_WIJZIGING";
            $return[$openticket]['HuidigeStatus'] = reset(reset($this->db->select(NULL, NULL, "SELECT Status FROM STATUS_WIJZIGING WHERE idTicket = " . $openticket . " ORDER BY idStatus DESC LIMIT 1")));
            $return[$openticket]['GeopendOp'] = reset(reset($this->db->select(NULL, NULL, "SELECT DatumTijd FROM STATUS_WIJZIGING WHERE idTicket = " . $openticket . " ORDER BY idStatus ASC LIMIT 1")));

            //Deze SQL moet uit STATUS_WIJZIGING GEHAALD worden voor bedrijf
            $idBedrijf = $this->db->select(NULL, NULL, "SELECT idBedrijf FROM STATUS_WIJZIGING WHERE idTicket = " . $openticket . " ORDER BY idStatus ASC LIMIT 1")[0]['idBedrijf'];
            //Alle data uit BEDRIJF wordt gehaald

            $this->db->db_table = "BEDRIJF";
            $return[$openticket]["Bedrijf"] = reset(reset($this->db->select(array("Bedrijfsnaam"), array("idBedrijf" => $idBedrijf)))); // HIER ZIT EEN ERROR
        }

        return $return;
    }

    /*
     * Created by Lesley Jordan van Oostenrijk
     * Date: 17-12-2014
     * Description: public function tickets -> overzicht geven van alle tickets
     */

    public function oplostijdTickets() {
        $sql = "SELECT idTicket FROM STATUS_WIJZIGING WHERE Status = 'Nieuw' OR Status = 'afgemeld' GROUP BY idTicket";
        $solvetimetickets = $this->db->select(NULL, NULL, $sql);
        $return = array();

        foreach ($solvetimetickets as $ticket) {
            $this->db_table = "TICKET";

            $return[$ticket]['IncidentType'] = $this->db->select(array("IncidentType"), array("idTicket" => $ticket));
            $return[$ticket]['ProbleemStelling'] = $this->db->select(array("ProbleemStelling"), array("idTicket" => $ticket));
            $return[$ticket]['Oplossing'] = $this->db->select(array("Oplossing"), array("idTicket" => $ticket));

            $this->db_table = "STATUS_WIJZIGING";
            $return[$ticket]['GeopendOp'] = $this->db->select(NULL, NULL, "SELECT DatumTijd FROM STATUS_WIJZIGING WHERE idTicket = " . $ticket . " ORDER BY idStatus ASC LIMIT 1");
            $return[$ticket]['GeslotenOp'] = $this->db->select(NULL, NULL, "SELECT DatumTijd FROM STATUS_WIJZIGING WHERE idTicket = " . $ticket . " ORDER BY idStatus DESC LIMIT 1");

            // Hieronder is een test, dit is niet definitief (ik twijfel of het zal werken namelijk)
            $return[$ticket]['OplosTijd'] = ($return[$ticket]['GeopenOp'] - $return['GeslotenOp']);
            // End of test

            $idBedrijf = $this->db->select(NULL, NULL, "SELECT idBedrijf FROM STATUS_WIJZIGING WHERE idTicket = " . $ticket . " ORDER BY idStatus ASC LIMIT 1");

            $this->db->db_table = "BEDRIJF";
            $return[$ticket]["Bedrijf"] = $this->db->select(array("BedrijfsNaam"), array("idBedrijf" => $idBedrijf));
        }

        return $return;
    }

    /*
     * Created by Lesley Jordan van Oostenrijk
     * Date: 17-12-2014
     * Description: public function tickets -> overzicht geven van alle tickets
     */

    /*
     * Enkele ticket is opgesplits in enkele ticket en statuswijziging van een enkele ticket
     */

    public function ticket($idticket) {
        $this->db->db_table = "TICKET";
        $fields = array(
            "idTicket",
            "IncidentType",
            "Probleemstelling",
            "Oplossing"
        );
        $where = array("idTicket" => $idticket);
        return $this->db->select($fields, $where)[0];
    }

    public function Statuswijziging($idticket) {
        $this->db->db_table = "STATUS_WIJZIGING";
        $allestatusid = $this->db->select(array("idStatus"), array("idTicket" => $idticket));
        $return = array();
        foreach ($allestatusid as $statusid) {
            $return[$statusid]['DatumTijd'] = $this->db->select(array("DatumTijd"), array("idStatus" => $statusid));
            $return[$statusid]['Status'] = $this->db->select(array("Status"), array("idStatus" => $statusid));
            $return[$statusid]['SoortContact'] = $this->db->select(array("SoortContact"), array("idStatus" => $statusid));
            $return[$statusid]['Memo'] = $this->db->select(array("Memo"), array("idStatus" => $statusid));
                    
            $idbedrijfsmedewerker = $this->db->select(array("idBedrijfsMedewerker"), array("idStatus" => $statusid));
            $this->db->db_table = "BEDRIJFSMEDEWERKER";
            //ophalen achternaam van de bedrijfsmedewerker
            $return[$statusid]['Bedrijfsmedewerker'] = $this->db->select(array("Achternaam"), array("idBedrijfsMedewerker" => $idbedrijfsmedewerker));
            
            $idmedewerker = $this->db->select(array("idMedewerker"), array("idStatus" => $statusid));
            $this->db->db_table = "MEDEWERKER";
            //ophalen achternaam van de medewerker
            $return[$statusid]['Medewerker'] = $this->db->select(array("Achternaam"), array("idMedewerker" => $idmedewerker));
        }
    }

    /*
     * Author: Remco Beikes
     */
    
    public function Medewerker($idMedewerker = NULL)  {   
        //OPHALEN GEGEVENS
        $this->db->db_table = "MEDEWERKER";
        $fields = array(
            "idMedewerker",
            "Voornaam",
            "Achternaam",
            "Tussenvoegsel");


            $where = array('idMedewerker' => $idMedewerker);
        
        $Medewerker = $this->db->select($fields, $where);
        return $Medewerker;
    }

    public function BedrijfsMedewerker($idBedrijfsMedewerker) {   
        //OPHALEN GEGEVENS
        $this->db->db_table = "BEDRIJFSMEDEWERKER";
        $fields = array(
            "idBedrijfsMedewerker",
            "idBedrijf",
            "Voornaam",
            "Achternaam",
            "Tussenvoegsel",
            "Functie",
            "Email");
        $where = array('idBedrijfsMedewerker' => $idBedrijfsMedewerker);
        $BedrijfsMedewerker = $this->db->select($fields, $where);
        return $BedrijfsMedewerker;
    }

    public function Bedrijf($idBedrijf) {
        $this->db->db_table = "BEDRIJF";
        $fields = array(
            "idBedrijf",
            "Bedrijfsnaam",
            "Adresgegevens",
            "Telefoon",
            "Email",
            "Licentie");
        $where = array('idBedrijf' => $idBedrijf);
        $Bedrijf = $this->db->select($fields, $where);
        return $Bedrijf;
    }

    public function FAQ() {
        $this->db->db_table = "FAQ";
        $fields = array(
            "Vraag",
            "Beschrijving",
            "Oplossing",
            "idMedewerker"
        );
        $FAQ = $this->db->select($fields);
        return $FAQ;
    }

}
