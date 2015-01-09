<div class="col-md-6">
<form method="POST" action="/process/create/bedrijf">
  <div class="form-group">
	<label for="createBedrijfNaam">Bedrijfsnaam:</label>
    <input type="text" class="form-control" id="createMedewerkerUsername" placeholder="Bedrijfsnaam">
  </div>
  <div class="form-group">
    <label for="createBedrijfAdresGegevens">Adresgegevens:</label>
	<textarea class="form-control" rows="3" id="createBedrijfAdresGegevens" placeholder="Adresgegevens"></textarea>
  </div>
  <div class="form-group">
	<label for="createBedrijfTelefoon">Telefoon:</label>
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