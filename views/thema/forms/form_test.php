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
<form method="POST" action="/process/create/statuswijziging">
<div class="form-group">
	<input type="hidden" name="Status" value="Nieuw" />
</div> 

<div class="form-group">
	<label for="createStatusWijzigingTicketID">Ticket ID:</label>
    <input type="number" class="form-control" id="createStatusWijzigingTicketID">
  </div>
  
 <div class="form-group">
	<label for="createStatusWijzigingBedrijfsMedewerkerID">Bedrijfsmedewerker ID:</label>
    <input type="number" class="form-control" id="createStatusWijzigingBedrijfsMedewerkerID">
  </div>
  
   <div class="form-group">
	<label for="createStatusWijzigingMedewerkerID">Medewerker ID:</label>
    <input type="number" class="form-control" id="createStatusWijzigingMedewerkerID">
  </div>
  
   <div class="form-group">
	<label for="createStatusWijzigingBedrijfsContact">Soort Contact:</label>
    <input type="text" class="form-control" id="createStatusWijzigingBedrijfsContact">
  </div>
  
<div class="form-group">
    <label for="createStatusWijzigingMemo">Memo:</label>
	<textarea class="form-control" rows="5" id="createStatusWijzigingMemo" placeholder="Memo" resize="none"></textarea>
</div>

  <button type="submit" value="submit" class="btn btn-default">Verzend</button>
</form>
</div>




</div>
</div>
</body>
</html>