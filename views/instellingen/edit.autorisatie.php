<?php
$userName = $params;
$db = new db;

$db->db_table = "ACCOUNT";
$autorisatie = $db->select(array("Autorisatie"), array("Gebruikersnaam" => $gebruikersnaam))[0]['Autorisatie'];
?>

<form method="POST" action="/process/edit/autorisatie">
	<div class="form-group">
		<label>Selecteer de nieuwe autorisatie voor <?= $userName ?>:</label>
	</div>
	<div class="radio">
		<label>
			<input type="radio" name="Autorisatie" id="AutorisatieRadio" value="Admin" <?= $autorisatie == "Admin" ? "checked" : "" ?>>
			Admin
		</label>
	</div>
	<div class="radio">
		<label>
			<input type="radio" name="Autorisatie" id="AutorisatieRadio" value="Teamleider" <?= $autorisatie == "Teamleider" ? "checked" : "" ?>>
			Teamleider
		</label>
	</div>
	<div class="radio">
		<label>
			<input type="radio" name="Autorisatie" id="AutorisatieRadio" value="Medewerker" <?= $autorisatie == "Medewerker" ? "checked" : "" ?>>
			Medewerker
		</label>
	</div>
	<button type="submit" name="submit" value="submit" class="btn btn-theme">Zoek</button>
</form>