<div class="col-md-6 showback">
	<form method="POST" action="/process/create/ticket">
		<div class="form-group">
			<label for="createTicketType">IncidentType:</label>
			<div class="radio">
				<label>
					<input type="radio" name="IncidentType" id="createTicketTypeVraag" value="Vraag" name="IncidentType" checked>
					Vraag
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="IncidentType" id="createTicketTypeWens" value="Wens" name="IncidentType">
					Wens
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="IncidentType" id="createTicketTypeUitval" value="Uitval" name="IncidentType">
					Uitval
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="IncidentType" id="createTicketTypeFunctioneelProbleem" value="Functioneel Probleem" name="IncidentType">
					Functioneel probleem
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="IncidentType" id="createTicketTypeTechnischProbleem" value="Technisch Probleem" name="IncidentType">
					Technisch probleem
				</label>
			</div>
		</div>

		<div class="form-group">
			<label for="createTicketProbleemstelling">Probleemstelling:</label>
			<textarea class="form-control" rows="5" id="createTicketProbleemstelling" placeholder="Probleemstelling" name="Probleemstelling"></textarea>
		</div>		
		<button type="submit" value="submit" name="submit" class="btn btn-default">Verzend</button>
	</form>
</div>