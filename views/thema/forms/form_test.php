<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Tourist Information Amsterdam</title>
		
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	</head>



<body>

<div class="container">
<div class="row">
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
		<input type="radio" name="IncidentType" id="createTicketTypeUitval" value="Uitval" checked>
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
  <button type="submit" class="btn btn-default">Verzend</button>
</form>



</div>
</div>
</div>
</body>
</html>