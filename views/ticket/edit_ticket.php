<?php
$db = new db;

	$idTicket = $params;
	$db->db_table = "TICKET";
	$data = $db->select(array('*'), array('idTicket' => $idTicket))[0];

?>
<form method="POST" action="/process/edit/ticket">
    	<div class="form-group">
    		<label for="editTicketIncidentType">IncidentType:</label>
                
                <div class="radio">
		<label>
		<input type="radio" id="editTicketIncidentTypeVraag" value="Vraag" name="IncidentType" <?= $data['IncidentType'] == 'Vraag' ? 'checked' : '' ?>>
		Vraag
		</label>
                    </div>
                
                <div class="radio">
		<label>
		<input type="radio" id="editTicketIncidentTypeWens" value="Wens" name="IncidentType" <?= $data['IncidentType'] == 'Wens' ? 'checked' : '' ?>>
		Wens
		</label>
                    </div>
                
                <div class="radio">
		<label>
		<input type="radio" id="editTicketIncidentTypeUitval" value="Uitval" name="IncidentType" <?= $data['IncidentType'] == 'Uitval' ? 'checked' : '' ?>>
		Uitval
		</label>
                    </div>
                
                <div class="radio">
		<label>
		<input type="radio" id="editTicketIncidentTypeVraag" value="Functioneel probleem" name="IncidentType" <?= $data['IncidentType'] == 'Functioneel probleem' ? 'checked' : '' ?>>
		Functioneel probleem
		</label>
                    </div>
                
                <div class="radio">
		<label>
		<input type="radio" id="editTicketIncidentTypeVraag" value="Technisch probleem" name="IncidentType" <?= $data['IncidentType'] == 'Technisch probleem' ? 'checked' : '' ?>>
		Technisch probleem
		</label>
                    </div>
    	</div>
	    <div class="form-group">
                <label for="editProbleemstelling">Probleemstelling</label>
                    <textarea class="form-control" id="editProbleemstelling" placeholder="Probleemstelling" rows="5" cols="75" name="Probleemstelling"><?= $data['Probleemstelling'] ?></textarea>
	    </div>
            
            <div class="form-group">
                <label for="editOplossing">Oplossing</label>
                    <textarea class="form-control" id="editOplossing" placeholder="Oplossing" rows="5" cols="75" name="Oplossing"><?= $data['Oplossing'] ?></textarea>
	    </div>
      
	    <div class="form-group">
	    	<input type="hidden" value="<?= $idTicket ?>" name="idTicket" />
                
  <button type="submit" name="submit" value="submit" class="btn btn-default">Bewerk</button>
	    </div>
</form>
