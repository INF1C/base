<div class="col-md-6">
    <h2> Nieuw Bedrijf</h2><br />
    <form method="POST" action="/process/create/bedrijf">
        <div class="form-group">
            <label for="createBedrijfNaam">Bedrijfsnaam:</label>
            <input type="text" class="form-control" id="createMedewerkerUsername" placeholder="Bedrijfsnaam" name="Bedrijfsnaam" required>
        </div>

        <div class="form-group">
            <label for="createBedrijfAdresGegevens">Adresgegevens:</label>
            <textarea class="form-control" rows="3" id="createBedrijfAdresGegevens" placeholder="Adresgegevens"name="Adresgegevens" required></textarea>
        </div>

        <div class="form-group">
            <label for="createBedrijfTelefoon">Telefoon:</label>
            <input type="text" class="form-control" id="createBedrijfTelefoon" placeholder="Telefoon" name="Telefoon" required>
        </div>

        <div class="form-group">
            <label for="createBedrijfEmail">Email-adres:</label>
            <input type="email" class="form-control" id="createBedrijfEmail" placeholder="Email" name="Email" required>
        </div>

        <div class="form-group">
            <label for="createBedrijfLicentie">Heeft u een Licentie?:</label>
            <div class="radio">
                <label>
                    <input type="radio" name="Licentie" id="LicentieJa" value="2" name="Licentie" checked>
                    Ja
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="Licentie" id="LicentieNee" value="1" name="Licentie">
                    Nee
                </label>
            </div>
        </div>

        <button type="submit" name="submit" value="submit" class="btn btn-default">Verzend</button>
    </form>
</div>