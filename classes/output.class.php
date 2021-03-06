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
        if($idBedrijf === NULL AND $periode === NULL) {
            $this->db->db_table = "TICKET";
            $alleTicketID = $this->db->select(array("idTicket"));
        } elseif($periode === NULL AND $idBedrijf != NULL) {
            $this->db->db_table = "STATUS_WIJZIGING";
            $stmt = $this->db->link->prepare("SELECT idTicket FROM STATUS_WIJZIGING WHERE idBedrijf = ? GROUP BY idTicket");
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

            $return[$ticket]['IncidentType'] = reset(reset($this->db->select(array("IncidentType"), array("idTicket" => $ticket))));
            $return[$ticket]['ProbleemStelling'] = reset(reset($this->db->select(array("ProbleemStelling"), array("idTicket" => $ticket))));

            $this->db->db_table = "STATUS_WIJZIGING";
            $return[$ticket]['HuidigeStatus'] = reset(reset($this->db->select(NULL, NULL, "SELECT Status FROM STATUS_WIJZIGING WHERE idTicket = " . $ticket . " ORDER BY idStatus DESC LIMIT 1")));
            $return[$ticket]['GeopendOp'] = reset(reset($this->db->select(NULL, NULL, "SELECT DatumTijd FROM STATUS_WIJZIGING WHERE idTicket = " . $ticket . " ORDER BY idStatus ASC LIMIT 1")));

            $idBedrijf = $this->db->select(NULL, NULL, "SELECT idBedrijf FROM STATUS_WIJZIGING WHERE idTicket = " . $ticket . " ORDER BY idStatus ASC LIMIT 1")[0]['idBedrijf'];
            $this->db->db_table = "BEDRIJF";
            $return[$ticket]["Bedrijf"] = reset(reset($this->db->select(array("Bedrijfsnaam"), array("idBedrijf" => $idBedrijf))));
        }

        return $return;
    }

    /*
     * Created by Lesley Jordan van Oostenrijk
     * Date: 17-12-2014
     * Description: public function tickets -> overzicht geven van alle open tickets
     */

    public function openTickets() {

        $sql = "SELECT idTicket FROM `STATUS_WIJZIGING` 
                WHERE idStatus IN (
                    SELECT MAX(idStatus) FROM STATUS_WIJZIGING
                    GROUP BY idTicket
                    HAVING Status NOT IN ('Nieuw', 'afgemeld')
                )";
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

    public function NietBehandeldeTickets() {

        $sql = "SELECT * FROM STATUS_WIJZIGING
                WHERE `idTicket` NOT IN (
                    SELECT `idTicket` FROM STATUS_WIJZIGING
                    WHERE `Status` <> 'Nieuw'
                    GROUP BY `idTicket`
                    )
                AND `Status` = 'Nieuw'
                GROUP BY `idticket`";
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
        $sql = "SELECT idTicket FROM STATUS_WIJZIGING WHERE Status = 'afgemeld' GROUP BY idTicket";
        $solvetimetickets = $this->db->select(NULL, NULL, $sql);
        $return = array();

        foreach ($solvetimetickets as $ticketArray) {
            $this->db->db_table = "TICKET";
            $ticket = $ticketArray['idTicket'];

            $return[$ticket]['IncidentType'] = reset(reset($this->db->select(array("IncidentType"), array("idTicket" => $ticket))));
            $return[$ticket]['ProbleemStelling'] = reset(reset($this->db->select(array("ProbleemStelling"), array("idTicket" => $ticket))));
            $return[$ticket]['Oplossing'] = reset(reset($this->db->select(array("Oplossing"), array("idTicket" => $ticket))));

            $return[$ticket]['GeopendOp'] = reset(reset($this->db->select(NULL, NULL, "SELECT DatumTijd FROM STATUS_WIJZIGING WHERE idTicket = " . $ticket . " ORDER BY idStatus ASC LIMIT 1")));
            $return[$ticket]['GeslotenOp'] = reset(reset($this->db->select(NULL, NULL, "SELECT DatumTijd FROM STATUS_WIJZIGING WHERE idTicket = " . $ticket . " ORDER BY idStatus DESC LIMIT 1")));

            // Hieronder is een test, dit is niet definitief (ik twijfel of het zal werken namelijk)
            $open = new DateTime($return[$ticket]['GeopendOp']);
            $sluit = new DateTime($return[$ticket]['GeslotenOp']);
            $verschil = $sluit->diff($open);
            $return[$ticket]['OplosTijd'] = $verschil->format('%a');
            

            // End of test
            $idBedrijf = reset(reset($this->db->select(NULL, NULL, "SELECT idBedrijf FROM STATUS_WIJZIGING WHERE idTicket = " . $ticket . " ORDER BY idStatus ASC LIMIT 1")));

            $this->db->db_table = "BEDRIJF";
            $return[$ticket]["Bedrijf"] = reset(reset($this->db->select(array("BedrijfsNaam"), array("idBedrijf" => $idBedrijf))));
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

    public function Statuswijziging($idticket = NULL, $idBedrijfsMedewerker = NULL) {
        $this->db->db_table = "STATUS_WIJZIGING";
        if($idBedrijfsMedewerker === NULL){
            $allestatusid = $this->db->select(array("idStatus"), array("idTicket" => $idticket));
        } else {
            $allestatusid = $this->db->select(array("idStatus"), array("idBedrijfsMedewerker" => $idBedrijfsMedewerker));
        }
        $return = array();
        foreach ($allestatusid as $statusarray) {
            $this->db->db_table = "STATUS_WIJZIGING";
            $statusid = $statusarray['idStatus'];
            $return[$statusid]['DatumTijd'] = reset(reset($this->db->select(array("DatumTijd"), array("idStatus" => $statusid))));
            $return[$statusid]['Status'] = reset(reset($this->db->select(array("Status"), array("idStatus" => $statusid))));
            $return[$statusid]['SoortContact'] = reset(reset($this->db->select(array("SoortContact"), array("idStatus" => $statusid))));
            $return[$statusid]['Memo'] = reset(reset($this->db->select(array("Memo"), array("idStatus" => $statusid))));
                    
            $idbedrijfsmedewerker = reset(reset($this->db->select(array("idBedrijfsMedewerker"), array("idStatus" => $statusid))));
            $idbedrijf = reset(reset($this->db->select(array("idBedrijf"), array("idStatus" => $statusid))));
            $idmedewerker = reset(reset($this->db->select(array("idMedewerker"), array("idStatus" => $statusid))));

            $this->db->db_table = "BEDRIJFSMEDEWERKER";
            //ophalen achternaam van de bedrijfsmedewerker
            $return[$statusid]['Bedrijfsmedewerker'] = implode(' ', reset($this->db->select(array("Voornaam", "Achternaam"), array("idBedrijfsMedewerker" => $idbedrijfsmedewerker))));

            $this->db->db_table = "BEDRIJF";
            $return[$statusid]['Bedrijf'] = reset(reset($this->db->select(array("Bedrijfsnaam"), array("idBedrijf" => $idbedrijf))));            
            $this->db->db_table = "MEDEWERKER";
            //ophalen achternaam van de medewerker
			$medewerker = reset($this->db->select(array("Voornaam", "Achternaam"), array("idMedewerker" => $idmedewerker)));
			if($medewerker != '') {
                $return[$statusid]['Medewerker'] = implode(' ', $medewerker);
            } else {
                $return[$statusid]['Medewerker'] = '-';
            }
        }
        return $return;
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
            "idFAQ",
            "Vraag",
            "Beschrijving",
            "Oplossing",
            "idMedewerker"
        );
        $FAQ = $this->db->select($fields);
        return $FAQ;
    }

}
