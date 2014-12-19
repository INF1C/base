<!--
    Edit class van Rene
        +FAQ
        +Ticket
        +Status
-->

<?php
require_once 'db.class.php';

class edit extends db {

// WIJZIG GEGEVENS MEDEWERKER
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

        return $this->update($data, $where);
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

        return $this->update($data, $where);
    }

    public function StatusWijziging($idStatus) { //GEGEVENS TERUG VOEREN
        return $data = array(
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
