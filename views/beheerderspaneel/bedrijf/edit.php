<?php
$db = new db;
    $idBedrijf = $params;
    $db->db_table = "BEDRIJF";
    $data = $db->select(array('*'), array('idBedrijf' => $idBedrijf))[0];

?>

<form method="POST" action="/process/edit/bedrijf">
    <div class="form-group">
        <label for="Bedrijfsnaam">Bedrijfsnaam:</label>
      <input type="text" class="form-control" id="Bedrijfsnaam" name="Bedrijfsnaam" value="<?= $data['Bedrijfsnaam'] ?>" placeholder="Bedrijfsnaam" />
       </div>
    <div class="form-group">
        <label for="Adresgegevens">Adresgegevens:</label>
      <textarea placeholder="Adres gegevens" class="form-control" id="Adresgegevens" name="Adresgegevens"><?= $data['Adresgegevens'] ?> </textarea>
    </div>
    <div class="form-group">
        <label for="Telefoon">Telefoon:</label>
      <input type="text" class="form-control" id="Telefoon" placeholder="Telefoon" name="Telefoon" value="<?= $data['Telefoon'] ?>" />
    </div>
    <div class="form-group">
        <label for="Email">E-mail:</label>
        <input type="email" class="form-control" id="Email" name="Email" value="<?= $data['Email'] ?>" placeholder="E-mail" />
       </div>
       <label>Licentie</label>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios1" name="Licentie" value="2" <?= $data['Licentie'] == 2 ? "checked" : '' ?>>
       Ja
      </label>
    </div>
     <div class="radio">
    <label>
     <input type="radio" name="optionsRadios" id="optionsRadios2" name="Licentie" value="1" <?= $data['Licentie'] == 1 ? "checked" : '' ?>>
      Nee
    </label>
</div>
    <div class="form-group">
        <input type="hidden" value="<?= $data['idBedrijf'] ?>" name="idBedrijf" />
        <input type="submit" value="submit" name="submit" />
    </div>
</form>
