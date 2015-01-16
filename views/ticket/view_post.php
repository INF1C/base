<?php
if (isset($_POST['idTicket'])) {
    $idTicket = filter_input(INPUT_POST, 'idTicket');
    $output = new output;
    $ticket = $output->ticket($idTicket);
    $status = $output->Statuswijziging($idTicket);
    $laatsteStatus = end($status);
    $laatsteStatusID = key($status);
    reset($status);
    ?>
    <div class="col-lg-8 showback">
        <table class="table">
            <tr>
                <td>Ticket ID:</td>
                <td><?= $idTicket ?></td>
            </tr>
            <tr>
                <td>Bedrijf:</td>
                <td><?= $laatsteStatus['Bedrijf'] ?></td>
            </tr>
            <tr>
                <td>Incident type:</td>
                <td><?= $ticket['IncidentType'] ?></td>
            </tr>
            <tr>
                <td>Probleemstelling:</td>
                <td><?= $ticket['Probleemstelling'] ?></td>
            </tr>
            <tr>
                <td>Oplossing:</td>
                <td><?= $ticket['Oplossing'] ?></td>
            </tr>
        </table>
    </div>
    <div class="col-lg-3 showback pull-right">
        <?php
        $db = new db;
        $db->db_table = "STATUS_WIJZIGING";
        $idMedewerker = $db->select(array('idMedewerker'), array('idStatus' => $laatsteStatusID))[0]['idMedewerker'];
        $db->db_table = "MEDEWERKER";
        $afbeelding = $db->select(array('Afbeelding'), array('idMedewerker' => $idMedewerker))[0]['Afbeelding'];
        if ($afbeelding == '')
            $afbeelding = 'https://cdn2.iconfinder.com/data/icons/danger-problems/512/anonymous-512.png';
        ?>
        <img class="img-responsive img-circle" src="<?= $afbeelding ?>" alt="Anonymous">
        <p class="text-center">Medewerker: <?= $laatsteStatus['Medewerker'] ?></p>
    </div>
    <span class="clearfix"></span>
    <div class="col-lg-12 showback">
        <table class="table table-hover">
            <tr>
                <th>Datum - Tijd</th>
                <th>Status</th>
                <th>Soort contact</th>
                <th>Memo</th>
                <th>Bedrijfsmedewerker</th>
                <th>Medewerker</th>
            </tr>
            <?php
            foreach ($status as $key => $value) {
                echo "<tr>";
                foreach ($value as $key => $subvalue) {
                    if ($key == "Bedrijf")
                        continue;
                    echo "<td>" . $subvalue . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
        <?php
        //echo "<td><a href='/ticket/statuswijziging/'>Nieuwe status</a></td>";
        echo "<a href='/ticket/statuswijziging/" . $idTicket . "'>Nieuwe status</a>";
        echo "<a href='/ticket/editticket/" . $idTicket . "'>Ticket bewerken</a>";
        ?>
    </div>
    <?php
}

