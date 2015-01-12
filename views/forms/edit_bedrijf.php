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

<form method="POST" action="/process/edit/bedrijf">
   	<div class="form-group">
        <label for="Bedrijfsnaam">Bedrijfsnaam:</label>
   		<input type="text" class="form-control" id="Bedrijfsnaam" name="Bedrijfsnaam" value="<?= $data['Bedrijfsnaam'] ?>" placeholder="Bedrijfsnaam" />
       </div>
   	<div class="form-group">
        <label for="Adresgegevens">Adresgegevens:</label>
   		<textarea placeholder="Adres gegevens" class="form-control" id="Adresgegevens" name="Adresgegevens"><?= $data['Bedrijfsnaam'] ?> </textarea>
   	</div>
   	<div class="form-group">
        <label for="Telefoon">Telefoon:</label>
   		<input type="text" class="form-control" id="Telefoon" placeholder="Telefoon" name="Telefoon" value="<?= $data['Telefoon'] ?>" />
   	</div>
   	<div class="form-group">
        <label for="Email">E-mail:</label>
       	<input type="email" class="form-control" id="Email" name="Email" value="<?= $data['Email'] ?>" placeholder="E-mail" />
       </div>
   	<div class="form-group">
   		<label for="Licentie">Licentie</label>
        <input id="Licentie" class="form-control" placeholder="Heeft u een licentie?">
   		<select name="Licentie">
   			<option value="1" <?= $data['Licentie'] == 1 ? "selected" : '' ?>>Nee</option>
   			<option value="2" <?= $data['Licentie'] == 2 ? "selected" : '' ?>>Ja</option>
   		</select>
   	</div>
   	<div class="form-group">
   	    <input type="hidden" value="<?= $data['idBedrijf'] ?>" name="idBedrijf" />
      	<input type="submit" value="submit" name="submit" />
    </div>
</form>
