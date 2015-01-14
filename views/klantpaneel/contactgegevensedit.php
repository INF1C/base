<?php
$db = new db;
$Gebruikersnaam = $_SESSION['gebruikersnaam'];

$idBedrijfsmedewerker = $db->select(NULL, NULL, "SELECT idBedrijfsMedewerker
                                 FROM BEDRIJFSMEDEWERKER
                                 WHERE Gebruikersnaam = '" . $Gebruikersnaam . "'")[0]['idBedrijfsmedewerker'];
medewerker($idBedrijfsmedewerker);
?>
