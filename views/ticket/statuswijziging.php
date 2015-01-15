<div class="col-md-6 showback">
    <form method="POST" action="/process/create/statuswijziging">
        	<label for="editStatusWijzigingStatus">Status:</label>
    <div class="radio">
		<label>
		<input type="radio" id="editStatusWijzigingStatusNieuw" value="Nieuw" name="Status">
		Nieuw
		</label>
	</div>
	
	<div class="radio">
	<label>
		<input type="radio" id="editStatusWijzigingStatusBehandeling" value="In behandeling" name="Status">
		In Behandeling
	</label>
	</div>
	
	<div class="radio">
		<label>
		<input type="radio"  id="editStatusWijzigingStatusEngineer" value="Doorgestuurd naar engineer" name="Status" >
		Doorgestuurd naar engineer
		</label>
	</div>
	
	<div class="radio">
	<label>
		<input type="radio" id="editStatusWijzigingStatusManager" value="Doorgestuurd naar account manager" name="Status" >
		Doorgestuurd naar accountmanager
	</label>
	</div>
	
	<div class="radio">
	<label>
		<input type="radio" id="editStatusWijzigingStatusOpgelost" value="opgelost" name="Status">
		Opgelost
	</label>
	</div>
	
	<div class="radio">
	<label>
		<input type="radio" id="editStatusWijzigingStatusAfgemeld" value="afgemeld" name="Status" >
		Afgemeld
	</label>
	</div>
        <div class="form-group">
            <input type="hidden" class="form-control" id="createStatusWijzigingTicketID" name="idTicket" value="<?= $params ?>">
        </div>
        <div class="form-group">
            <p>Modal maybe?</p>
            <input type="number" class="form-control" id="createStatusWijzigingBedrijfsMedewerkerID" name="idBedrijfsmedewerker" value="">
        </div>
        <?php
        if($_SESSION['autorisatie'] == 'Medewerker'){
            $db->db_table = "MEDEWERKER";
            $id2 = $db->select(array('idMedewerker'), array('Gebruikersnaam' => $_SESSION['gebruikersnaam']))[0];
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