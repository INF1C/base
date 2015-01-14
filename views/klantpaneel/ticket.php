<div class="col-md-6 showback">
<h2 class="text-center">Ticket aanmaken</h2>
	<form method="POST" action="/process/create/ticket/klantpaneel">
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
		<div class="form-group">
			<label for="createTicketSoortContact">Soort contact:</label>
			<input type="text" class="form-control" id="createTicketSoortContact" name="SoortContact" placeholder="E-mail">
		</div>
		<button type="submit" value="submit" name="submit" class="btn btn-default">Verzend</button>
	</form>
</div>