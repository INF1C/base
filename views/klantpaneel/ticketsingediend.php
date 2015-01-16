<div class="col-lg-12">
    <?php
    $output = new output;
    $Gebruikersnaam = $_SESSION['gebruikersnaam'];
    $sql = "SELECT idBedrijf FROM BEDRIJFSMEDEWERKER WHERE Gebruikersnaam = '" . $Gebruikersnaam . "'";
    $idBedrijf = $output->db->select(NULL, NULL, $sql)[0]['idBedrijf'];
    $tickets = $output->tickets($idBedrijf);
    ?>
    <div class="content-panel">
        <h2> Ingediende tickets </h2> <br />
        <table class="table table-hover">
            <tr>
                <th>Incident Type</th>
                <th>Probleemstelling</th>
                <th>Huidige status</th>
                <th>Geopend op</th>
                <th>Bedrijfsnaam</th>
            </tr>
            <?php
            foreach ($tickets as $key => $value) {
                ?>
                <tr onclick= "window.document.location = '/ticket/<?= $key ?>'">
                    <?php
                    foreach ($value as $ticket) {
                        echo "<td>" . $ticket;
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                ?>
        </table>
    </div>
</div>