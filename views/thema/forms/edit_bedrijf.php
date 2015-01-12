<form method="POST" action="/process/edit/bedrijf">
    	<div class="form-group">
            <label for="Bedrijfsnaam">Bedrijfsnaam:</label>
    		<input type="text" class="form-control" id="Bedrijfsnaam" name="Bedrijfsnaam" value="<?= $data['Bedrijfsnaam'] ?>" placeholder="Bedrijfsnaam" />
        </div>
    	<p>
    		<span>Adresgegevens:</span>
    		<textarea name="Adresgegevens"><?= $data['Bedrijfsnaam'] ?></textarea>
    	</p>
    	<p>
    		<span>Telefoon:</span>
    		<input type="text" name="Telefoon" value="<?= $data['Telefoon'] ?>" />
    	</p>
    	<p>
    		<span>Email:</span>
    		<input type="email" name="Email" value="<?= $data['Email'] ?>" />
    	</p>
    	<p>
    		<span>Heeft een licentie?</span>
    		<select name="Licentie">
    			<option value="1" <?= $data['Licentie'] == 1 ? "selected" : '' ?>>Nee</option>
    			<option value="2" <?= $data['Licentie'] == 2 ? "selected" : '' ?>>Ja</option>
    		</select>
    	</p>
    	<p>
    	    <input type="hidden" value="<?= $data['idBedrijf'] ?>" name="idBedrijf" />
        	<input type="submit" value="submit" name="submit" />
        </p>
</form>

<div class="form-group">
            <label for="Voornaam">Voornaam:</label>
        	<input type="text" class="form-control" id="Voornaam" name="Voornaam" value="<?= $data['Voornaam'] ?>" placeholder="Voornaam" />
</div>