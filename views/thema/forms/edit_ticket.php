<form method="POST" action="/process/edit/ticket">
    	<div class="form-group">
    		<span>IncidentType</span>
    		<select name="IncidentType">
    			<option value="Vraag" <?= $data['IncidentType'] == 'Vraag' ? 'selected' : '' ?>>Vraag</option>
    			<option value="Wens" <?= $data['IncidentType'] == 'Wens' ? 'selected' : '' ?>>Wens</option>
    			<option value="Uitval" <?= $data['IncidentType'] == 'Uitval' ? 'selected' : '' ?>>Uitval</option>
    			<option value="Functioneel probleem" <?= $data['IncidentType'] == 'Functioneel probleem' ? 'selected' : '' ?>>Functioneel Probleem</option>
    			<option value="Technisch probleem" <?= $data['IncidentType'] == 'Technisch probleem' ? 'selected' : '' ?>>Technisch Probleem</option>
    		</select>
    	</div>
	    <div class="form-group">
		    <span>Probleemstelling</span>
                    <textarea rows="5" cols="75" name="Probleemstelling"><?= $data['Probleemstelling'] ?></textarea>
	    </div>
	    <div class="form-group">
		    <span>Oplossing</span>
		    <textarea rows="5" cols="75" name="Oplossing"><?= $data['Oplossing'] ?></textarea>
	    </div>
	    <div class="form-group">
	    	<input type="hidden" value="<?= $idTicket ?>" name="idTicket" />
	    	<input type="submit" value="submit" name="submit">
	    </div>
</form>

