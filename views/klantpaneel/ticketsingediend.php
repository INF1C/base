<div class="col-lg-12">
<?php
$db = new db;
$Gebruikersnaam = $_SESSION['gebruikersnaam'];
$idBedrijf = $db->select(NULL, NULL, "SELECT idBedrijf 
                                 FROM BEDRIJFSMEDEWERKER
                                 WHERE Gebruikersnaam = '" . $Gebruikersnaam . "'")[0]['idBedrijf'];
?>
    <div class="content-panel">
		<table class="table table-hover">
                    <tr>
                        <th>Incident Type</th>
                        <th>Probleemstelling</th>
                        <th>Oplossing</th>
                    </tr>
    <?php
foreach($db->select(NULL, NULL, "SELECT IncidentType, Probleemstelling, Oplossing 
                                 FROM STATUS_WIJZIGING, TICKET, BEDRIJF
                                 WHERE TICKET.idTicket = STATUS_WIJZIGING.idTicket
                                 AND STATUS_WIJZIGING.idBedrijf = BEDRIJF.idBedrijf
                                 AND BEDRIJF.idBedrijf = '" . $idBedrijf . "'") as $key => $value)
{
    echo "<tr>";
    foreach($value as $ticket)
    {    
    echo "<td>" . $ticket;
    echo "</td>";
    }
    echo "</tr>";
}
?>
</div>
</div>