<?php
$db = new db;
$idFAQ = $params;
if($idFAQ !== NULL) {
	$db->db_table = "FAQ";
	$data = $db->select(array('*'), array('idFAQ' => $idFAQ))[0];
} else {
	$data = array_fill_keys(array('idFAQ', 'Vraag', 'Beschrijving', 'Oplossing'), '');
}
?>
<div class="col-lg-10 showback">
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
<input type="hidden" name="idFAQ" value="<?= $idFAQ ?>">
  <button type="submit" name="submit" value="submit" class="btn btn-default">Verzend</button>
</form></div>