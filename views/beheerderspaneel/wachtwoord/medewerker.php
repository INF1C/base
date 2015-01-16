<?php
$db = new db;

$idMedewerker = $params;
$db->db_table = "MEDEWERKER";
$gebruikersnaam = $db->select(array('Gebruikersnaam'), array('idMedewerker' => $idMedewerker))[0]['Gebruikersnaam'];
?>
<div class="col-lg-6 showback">
    <h3>Wachtwoord wijzigen voor: <?= $gebruikersnaam ?></h3>
    <form class="form-inline" action="/process/resetpassword/" method="POST">
        <div class="form-group">
            <label class="sr-only">Nieuwe wachtwoord</label>
            <input type="text" class="form-control" name="Wachtwoord" placeholder="Voer nieuwe wachtwoord in" required>
        </div>
        <input type="hidden" name="Gebruikersnaam" value="<?= $gebruikersnaam ?>">
        <button type="submit" class="btn btn-default" name="submit" value="submit">Verwerk</button>
    </form>
</div>