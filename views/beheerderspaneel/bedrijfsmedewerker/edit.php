<div class="col-md-6 showback">
    <?php
    $db = new db;
    $idBedrijfsMedewerker = $params;
    if ($idBedrijfsMedewerker !== NULL) {
        $db->db_table = "BEDRIJFSMEDEWERKER";
        $data = $db->select(array('*'), array('idBedrijfsMedewerker' => $idBedrijfsMedewerker))[0];
    } else {
        $data = array_fill_keys(array('idBedrijfsMedewerker', 'Voornaam', 'Tussenvoegsel', 'Achternaam', 'Email', 'Functie'), '');
    }
    ?>
    <form method="POST" action="/process/edit/bedrijfsmedewerker">
        <div class="form-group">
            <h2> Bedrijfsmedewerker aanpassen </h2><br />
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
            <label for="Functie">Functie:</label>
            <input type="text" class="form-control" id="Functie" name="Functie" value="<?= $data['Functie'] ?>" placeholder="Functie" />
        </div>
        <div class="form-group">
            <label for="Email">E-mail:</label>
            <input type="email" class="form-control" id="Email" name="Email" value="<?= $data['Email'] ?>" placeholder="E-mail" />
        </div>
        <div class="form-group">
            <input type="hidden" value="<?= $idBedrijfsMedewerker ?>" name="idBedrijfsMedewerker">
            <button type="submit" name="submit" value="submit" class="btn btn-default">Verzend</button> 
        </div>
    </form>
</div>