<div class="col-md-6 showback">
    <form method="POST" action="/process/create/bedrijfsmedewerker">
        <div class="form-group">
            <label for="createBedrijfMedewerkerUsername">Gebruikersnaam:</label>
            <input type="text" class="form-control" id="createBedrijfMedewerkerUsername" placeholder="Gebruikersnaam" name="Gebruikersnaam">
        </div>

        <div class="form-group">
            <label for="createBedrijfMedewerkerPassword">Wachtwoord:</label>
            <input type="password" class="form-control" id="createBedrijfMedewerkerPassword" placeholder="Wachtwoord" name="Wachtwoord">
        </div>

        <div class="form-group">
            <label for="createBedrijfMedewerkerVoornaam">Voornaam:</label>
            <input type="text" class="form-control" id="createBedrijfMedewerkerVoornaam" placeholder="Voornaam" name="Voornaam">
        </div>

        <div class="form-group">
            <label for="createBedrijfMedewerkerVoegsel">Tussenvoegsel:</label>
            <input type="text" class="form-control" id="createBedrijfMedewerkerVoegsel" placeholder="Tussenvoegsel" name="Tussenvoegsel">
        </div>

        <div class="form-group">
            <label for="createBedrijfMedewerkerAchternaam">Achternaam:</label>
            <input type="text" class="form-control" id="createBedrijfMedewerkerAchternaam" placeholder="Achternaam" name="Achternaam">
        </div>

        <div class="form-group">
            <label for="createBedrijfMedewerkerFunctie">Functie:</label>
            <input type="text" class="form-control" id="createBedrijfMedewerkerFunctie" placeholder="Functie" name="Functie">
        </div>

        <div class="form-group">
            <label for="createBedrijfMedewerkerEmail">E-Mail:</label>
            <input type="text" class="form-control" id="createBedrijfMedewerkerAchternaam" placeholder="E-Mail" name="Email">
        </div>

        <!-- Value moet met een GET opgehaald worden -->
        <input type="hidden" value="<?= $params; ?>" name="Bedrijf" />
        <button type="submit" name="submit" value="submit" class="btn btn-default">Verzend</button>
    </form>
</div>