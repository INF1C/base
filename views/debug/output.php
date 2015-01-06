<?php

$create = new output;
    
    function ticket($idticket) {
        $this->db->db_table = "TICKET";
        $fields = array(
            "idTicket",
            "IncidentType",
            "Probleemstelling",
            "Oplossing"
        );
        $where = array("idTicket" => $idticket);
        return $this->db->select($fields, $where);
                
    }
    
    var_dump($create->ticket($idTicket));