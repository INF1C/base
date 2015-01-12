<div class="col-md-6">
<form method="POST" action="/process/create/ticket">
<div class="form-group">
	<label for="createTicketType">IncidentType:</label>
    <div class="radio">
		<label>
		<input type="radio" name="IncidentType" id="createTicketTypeVraag" value="Vraag" checked>
		Vraag
		</label>
	</div>
	<div class="radio">
	<label>
		<input type="radio" name="IncidentType" id="createTicketTypeWens" value="Wens">
		Wens
	</label>
	</div>
	<div class="radio">
		<label>
		<input type="radio" name="IncidentType" id="createTicketTypeUitval" value="Uitval">
		Uitval
		</label>
	</div>
	<div class="radio">
	<label>
		<input type="radio" name="IncidentType" id="createTicketTypeFunctioneelProbleem" value="Functioneel Probleem">
		Wens
	</label>
	</div>
	<div class="radio">
	<label>
		<input type="radio" name="IncidentType" id="createTicketTypeTechnischProbleem" value="Technisch Probleem">
		Wens
	</label>
	</div>
  </div> 
<div class="form-group">
    <label for="createTicketProbleemstelling">Oplossing:</label>
	<textarea class="form-control" rows="5" id="createTicketProbleemstelling" placeholder="Probleemstelling" resize="none"></textarea>
</div>
 <div class="form-group">
    <label for="createTicketOplossing">Oplossing:</label>
	<textarea class="form-control" rows="5" id="createTicketOplossing" placeholder="Oplossing" resize="none"></textarea>
  </div>
  <button type="submit" value="submit" class="btn btn-default">Verzend</button>
</form>
</div>