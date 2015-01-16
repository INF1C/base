<div class="col-md-6 showback">
    <h2> Nieuwe Medewerker</h2><br />
    <form method="POST" action="/process/create/medewerker">
        <div class="form-group">
            <label for="createMedewerkerUsername">Gebruikersnaam:</label>
            <input type="text" class="form-control" id="createMedewerkerUsername" placeholder="Gebruikersnaam" name="Gebruikersnaam">
        </div>

        <div class="form-group">
            <label for="createMedewerkerPassword">Wachtwoord:</label>
            <input type="password" class="form-control" id="createMedewerkerPassword" placeholder="Wachtwoord" name="Wachtwoord">
        </div>

        <div class="form-group">
            <label for="createMedewerkerVoornaam">Voornaam:</label>
            <input type="text" class="form-control" id="createMedewerkerVoornaam" placeholder="Voornaam" name="Voornaam">
        </div>

        <div class="form-group">
            <label for="createMedewerkerVoegsel">Tussenvoegsel:</label>
            <input type="text" class="form-control" id="createMedewerkerVoegsel" placeholder="Tussenvoegsel" name="Tussenvoegsel">
        </div>

        <div class="form-group">
            <label for="createMedewerkerAchternaam">Achternaam:</label>
            <input type="text" class="form-control" id="createMedewerkerAchternaam" placeholder="Achternaam" name="Achternaam">
        </div>

        <div class="form-group">
            <label for="createMedewerkerEmail">E-mail:</label>
            <input type="email" class="form-control" id="createMedewerkerEmail" placeholder="Email" name="Email">
        </div>

        <button type="submit" name="submit" value="submit" class="btn btn-default">Verzend</button>
    </form>
</div>