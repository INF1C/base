<?php
$db = new db;
$idMedewerker = $params;
if ($idMedewerker !== NULL) {
    $db->db_table = "MEDEWERKER";
    $data = $db->select(array('*'), array('idMedewerker' => $idMedewerker))[0];
} else {
    $data = array_fill_keys(array('idMedewerker', 'Voornaam', 'Achternaam', 'Tussenvoegsel', 'Email'), '');
}
?>
<div class="col-md-6 showback">
    <form method="POST" action="/process/edit/medewerker">
        <div class="form-group">
            <h2>Medewerker bewerken</h2><br />
            <label for="Voornaam">Voornaam:</label>
            <input type="text" class="form-control" id="Voornaam" name="Voornaam" value="<?= $data['Voornaam'] ?>" placeholder="Voornaam"  required />
        </div>
        <div class="form-group">
            <label for="Tussenvoegsel">Tussenvoegsel:</label>
            <input type="text" class="form-control" id="Tussenvoegsel" name="Tussenvoegsel" value="<?= $data['Tussenvoegsel'] ?>" placeholder="Tussenvoegsel" />
        </div>
        <div class="form-group">
            <label for="Achternaam">Achternaam:</label>
            <input type="text" class="form-control" id="Achternaam" name="Achternaam" value="<?= $data['Achternaam'] ?>" placeholder="Achternaam"  required />
        </div>
        <div class="form-group">
            <label for="Email">E-mail:</label>
            <input type="email" class="form-control" id="Email" name="Email" value="<?= $data['Email'] ?>" placeholder="E-mail"  required />
        </div>
        <div class="form-group">
            <input type="hidden" value="<?= $data['idMedewerker'] ?>" name="idMedewerker" />
            <button type="submit" name="submit" value="submit" class="btn btn-default">Verzend</button>    </div>
        </div>
    </form>
    <noscript>
    <?= var_dump(get_defined_vars()) ?>
    </noscript>
</div>