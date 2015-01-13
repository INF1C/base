<?php
$db = new db;
if(!empty(FILTER_INPUT(INPUT_GET, 'idBedrijf'))) {
    $idBedrijf = FILTER_INPUT(INPUT_GET, 'idBedrijf');
    $db->db_table = "BEDRIJF";
    $data = $db->select(array('*'), array('idBedrijf' => $idBedrijf))[0];
} else {
    $data = array_fill_keys(array('idBedrijf', 'Bedrijfsnaam', 'Adresgegevens', 'Telefoon', 'Email', 'Licentie'), '');
}
?>
<div class="col-md-6 showback">
    <form method="POST" action="/process/edit/medewerker">
            <div class="form-group">
                <label for="Voornaam">Voornaam:</label>
            	<input type="text" class="form-control" id="Voornaam" name="Voornaam" value="<?= $data['Voornaam'] ?>" placeholder="Voornaam" />
            </div>
            <div class="form-group">
                <label for="Tussenvoegsel">Tussenvoegsel:</label>
            	<input type="text" class="form-control" id="Tussenvoegsel" name="Tussenvoegsel" value="<?= $data['Tussenvoegsel'] ?>" placeholder="Tussenvoegsel" />
            </div>
            <div class="form-group">
                <label for="Achternaam">Achternaam:</label>
            	<input type="text" class="form-control" id="Achternaam" name="Achternaam" value="<?= $data['Achternaam'] ?>" placeholder="Achternaam"/>
            </div>
            <div class="form-group">
                <label for="Email">E-mail:</label>
            	<input type="email" class="form-control" id="Email" name="Email" value="<?= $data['Email'] ?>" placeholder="E-mail" />
            </div>
            <div class="form-group">
                <input type="hidden" value="<?= $data['idMedewerker'] ?>" name="idMedewerker" />
            	<input type="submit" value="submit" name="submit" />
            </div>
    </form>
    <noscript>
    <?= var_dump(get_defined_vars()) ?>
    </noscript>
</div>