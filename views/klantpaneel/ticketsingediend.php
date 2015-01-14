<?php
$db = new db;
$Gebruikersnaam = $_SESSION['gebruikersnaam'];
$idBedrijf = $db->select(NULL, NULL, "SELECT idBedrijf 
                                 FROM BEDRIJFSMEDEWERKER
                                 WHERE Gebruikersnaam = '" . $Gebruikersnaam . "'")[0]['idBedrijf'];

foreach($db->select(NULL, NULL, "SELECT IncidentType, Probleemstelling, Oplossing 
                                 FROM STATUS_WIJZIGING, TICKET, BEDRIJF
                                 WHERE TICKET.idTicket = STATUS_WIJZIGING.idTicket
                                 AND STATUS_WIJZIGING.idBedrijf = BEDRIJF.idBedrijf
                                 AND BEDRIJF.idBedrijf = '" . $idBedrijf . "'") as $key => $value)
{
    var_dump($value);
    echo "<tr>";
    echo "<td>" . $value;
    echo "</td>";
    echo "</tr>";
}
?>
