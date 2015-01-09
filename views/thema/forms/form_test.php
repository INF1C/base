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



<form method="POST" action="/process/create/bedrijf">
  <div class="form-group">
	<label for="createMedewerkerUsername">Gebruikersnaam:</label>
    <input type="text" class="form-control" id="createMedewerkerUsername" placeholder="Gebruikersnaam">
  </div>
  <div class="form-group">
    <label for="createBedrijfAdresGegevens">Adresgegevens:</label>
	<textarea class="form-control" rows="3" id="createBedrijfAdresGegevens" placeholder="Adresgegevens"></textarea>
  </div>
  <div class="form-group">
	<label for="createBedrijfTelefoon">Voornaam:</label>
    <input type="text" class="form-control" id="createBedrijfTelefoon" placeholder="Telefoon">
  </div>
  <div class="form-group">
    <label for="createBedrijfEmail">Email-adres:</label>
    <input type="email" class="form-control" id="createBedrijfEmail" placeholder="Email">
  </div>
  <div class="form-group">
	<label for="createBedrijfLicentie">Heeft u een Licentie?:</label>
    <div class="radio">
		<label>
		<input type="radio" name="Licentie" id="LicentieJa" value="bedrijfLicentieJa" checked>
		Ja
		</label>
	</div>
	<div class="radio">
	<label>
		<input type="radio" name="Licentie" id="LicentieNee" value="bedrijfLicentieNee">
		Nee
	</label>
	</div>
  </div>
  <button type="submit" class="btn btn-default">Verzend</button>
</form>



</div>
</div>
</div>
</body>
</html>