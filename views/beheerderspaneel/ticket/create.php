<div class="col-md-6 showback">
    <form method="POST" action="/process/create/ticket/beheerderspaneel">
        <div class="form-group">
            <h2> Nieuwe ticket </h2><br />
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
                    <input type="radio" name="IncidentType" id="createTicketTypeFunctioneelProbleem" value="Functioneel probleem" name="IncidentType">
                    Functioneel probleem
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="IncidentType" id="createTicketTypeTechnischProbleem" value="Technisch probleem" name="IncidentType">
                    Technisch probleem
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="createTicketProbleemstelling">Probleemstelling:</label>
            <textarea class="form-control" rows="5" id="createTicketProbleemstelling" placeholder="Probleemstelling" name="Probleemstelling" required></textarea>
        </div>
        <div class="form-group">
            <label for="createTicketSoortContact">Soort contact:</label>
            <input type="text" class="form-control" id="createTicketSoortContact" name="SoortContact" placeholder="bijv. e-mail" required>
        </div>
        <input type="hidden" name="idBedrijfsMedewerker" value="<?= $params ?>">
        <input type="hidden" name="Status" value="Nieuw">
        <button type="submit" value="submit" name="submit" class="btn btn-default">Verzend</button>
    </form>
</div>