<div class="col-md-6 showback">
<h2>Nieuwe statuswijziging</h2>
    <form method="POST" action="/process/create/statuswijziging">
		<input type="hidden" value="Nieuw" name="Status">
            <input type="hidden" class="form-control" id="createStatusWijzigingTicketID" name="idTicket" value="<?= $params ?>">
        <div class="form-group">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bedrijfsmedewerkermodal">Kies een bedrijfsmedewerker</button>
<!--             <input type="number" class="form-control" id="createStatusWijzigingBedrijfsMedewerkerID" name="idBedrijfsmedewerker" value="">
 -->      
 		<input type="hidden" name="idBedrijfsmedewerker" value="" id="VeldBedrijfsMedewerker">
 		</div>
        <?php
        if($_SESSION['autorisatie'] == 'Medewerker' OR $_SESSION['autorisatie'] == 'Teamleider' OR $_SESSION['autorisatie'] == 'Admin'){
        	$db = new db;
            $db->db_table = "MEDEWERKER";
            $id2 = $db->select(array('idMedewerker'), array('Gebruikersnaam' => $_SESSION['gebruikersnaam']))[0]['idMedewerker'];
            ?>
            <div class="form-group">
                <!-- <label for="createStatusWijzigingMedewerkerID">Medewerker ID:</label> -->
                <input type="hidden" name="idMedewerker" value="<?= $id2 ?>">
            </div>
        <?php } ?>
        <div class="form-group">
            <label for="createStatusWijzigingBedrijfsContact">Soort Contact:</label>
            <input type="text" class="form-control" id="createStatusWijzigingBedrijfsContact" name="SoortContact">
        </div>
          
        <div class="form-group">
            <label for="createStatusWijzigingMemo">Memo:</label>
            <textarea class="form-control" rows="5" id="createStatusWijzigingMemo" placeholder="Memo" name="Memo"></textarea>
        </div>

        <button type="submit" value="submit" name="submit" class="btn btn-default">Verzend</button>
    </form>
</div>
<div class="modal fade" id="bedrijfsmedewerkermodal" tabindex="-1" role="dialog" aria-labelledby="BedrijfsMedewerkerLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="BedrijfsMedewerkerLabel">Kies een bedrijfsmedewerker</h4>
      </div>
      <div class="modal-body">
		<h4 class="mb"><i class="fa fa-angle-right"></i> Zoek bedrijfsmedewerker</h4>
		<form class="form-inline" id="zoekBedrijfsMedewerker" role="form">
			<div class="form-group">
				<label class="sr-only" for="zoekterm">Voor of achternaam:</label>
				<input type="text" name="zoekterm" class="form-control" id="zoekterm" placeholder="Zoekterm">
			</div>
			<button type="submit" class="btn btn-theme">Zoek</button>
		</form>
		<br><br>
		<div id="searchContent">
			
		</div>
      </div>
    </div>
  </div>
</div>