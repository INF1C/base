<form method="POST" action="/process/edit/medewerker">
        <div class="form-group">
            <label for="Voornaam">Voornaam:</label>
        	<input type="text" id="Voornaam" name="Voornaam" value="<?= $data['Voornaam'] ?>" placeholder="Voornaam" />
        </div>
        <div class="form-group">
            <label for="Tussenvoegsel">Tussenvoegsel:</label>
        	<input type="text" id="Tussenvoegsel" name="Tussenvoegsel" value="<?= $data['Tussenvoegsel'] ?>" placeholder="Tussenvoegsel" />
        </div>
        <div class="form-group">
            <label for="Achternaam">Achternaam:</label>
        	<input type="text" id="Achternaam" name="Achternaam" value="<?= $data['Achternaam'] ?>" placeholder="Achternaam"/>
        </div>
        <div class="form-group">
            <label for="Email">E-mail:</label>
        	<input type="email" id="Email" name="Email" value="<?= $data['Email'] ?>" placeholder="E-mail" />
        </div>
        <div class="form-group">
            <input type="hidden" value="<?= $data['idMedewerker'] ?>" name="idMedewerker" />
        	<input type="submit" value="submit" name="submit" />
        </div>
</form>