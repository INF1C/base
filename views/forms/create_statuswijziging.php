<div class="col-md-6">
    <form method="POST" action="/process/create/statuswijziging">
        <div class="form-group">
            <input type="hidden" name="Status" value="Nieuw" />
        </div> 

        <div class="form-group">
            <label for="createStatusWijzigingTicketID">Ticket ID:</label>
            <input type="number" class="form-control" id="createStatusWijzigingTicketID" name="idTicket">
        </div>
          
        <div class="form-group">
            <label for="createStatusWijzigingBedrijfsMedewerkerID">Bedrijfsmedewerker ID:</label>
            <input type="number" class="form-control" id="createStatusWijzigingBedrijfsMedewerkerID" name="idBedrijfsmedewerker">
        </div>
        <?php
        if($_SESSION['autorisatie'] == 'Medewerker'){
            $db->db_table = "MEDEWERKER";
            $id = $db->select(array('idMedewerker'), array('Gebruikersnaam' => $_SESSION['gebruikersnaam']))[0];
            ?>
            <div class="form-group">
                <!-- <label for="createStatusWijzigingMedewerkerID">Medewerker ID:</label> -->
                <input type="hidden" name="idMedewerker" value="<?= $id ?>">
            </div>
        <?php } ?>
        <div class="form-group">
            <label for="createStatusWijzigingBedrijfsContact">Soort Contact:</label>
            <input type="text" class="form-control" id="createStatusWijzigingBedrijfsContact" name="SoortContact">
        </div>
          
        <div class="form-group">
            <label for="createStatusWijzigingMemo">Memo:</label>
            <textarea class="form-control" rows="5" id="createStatusWijzigingMemo" placeholder="Memo" name="Memo"></textarea>
        </div>

        <button type="submit" value="submit" name="submit" class="btn btn-default">Verzend</button>
    </form>
</div>