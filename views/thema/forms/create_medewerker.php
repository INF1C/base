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


<form method="POST" action="/process/create/medewerker">
  <div class="form-group">
	<label for="createMedewerkerUsername">Gebruikersnaam:</label>
    <input type="text" class="form-control" id="createMedewerkerUsername" placeholder="Gebruikersnaam">
  </div>
  <div class="form-group">
    <label for="createMedewerkerPassword">Wachtwoord:</label>
    <input type="password" class="form-control" id="createMedewerkerPassword" placeholder="Password">
  </div>
  <div class="form-group">
	<label for="createMedewerkerVoornaam">Voornaam:</label>
    <input type="text" class="form-control" id="createMedewerkerVoornaam" placeholder="Voornaam">
  </div>
  <div class="form-group">
	<label for="createMedewerkerVoegsel">Tussenvoegsel:</label>
    <input type="text" class="form-control" id="createMedewerkerVoegsel" placeholder="Tussenvoegsel">
  </div>
  <div class="form-group">
	<label for="createMedewerkerAchternaam">Voornaam:</label>
    <input type="text" class="form-control" id="createMedewerkerAchternaam" placeholder="Achternaam">
  </div>
  <div class="form-group">
    <label for="createMedewerkerEmail">Email-adres:</label>
    <input type="email" class="form-control" id="createMedewerkerEmail" placeholder="Email">
  </div>
  <button type="submit" class="btn btn-default">Verzend</button>
</form>


</div>
</div>
</div>
</body>
</html>