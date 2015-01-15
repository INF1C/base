<?php
$db = new db;
if(!empty(FILTER_INPUT(INPUT_GET, 'idFAQ'))) {
	$idFAQ = FILTER_INPUT(INPUT_GET, 'idFAQ');
	$db->db_table = "FAQ";
	$data = $db->select(array('*'), array('idFAQ' => $idFAQ))[0];
} else {
	$data = array_fill_keys(array('idFAQ', 'Vraag', 'Beschrijving', 'Oplossing'), '');
}
?>
<form method="POST" action="/process/edit/faq">
    <div class="form-group">
	<label for="editFaqVraag">Soort Contact:</label>
    <input type="text" class="form-control" id="editFaqVraag" name="Vraag" placeholder="Vraag" value="<?= $data['Vraag'] ?>">
  </div>
  
<div class="form-group">
    <label for="editFaqBeschrijving">Beschrijving:</label>
	<textarea class="form-control" rows="5" id="editFaqBeschrijving" name="Beschrijving" placeholder="Beschrijving"><?= $data['Beschrijving'] ?></textarea>
</div>

<div class="form-group">
    <label for="editFaqOplossing">Oplossing:</label>
	<textarea class="form-control" rows="5" id="editFaqOplossing" name="Oplossing" placeholder="Oplossing"><?= $data['Oplossing'] ?></textarea>
</div>

  <button type="submit" name="submit" value="submit" class="btn btn-default">Verzend</button>
</form>