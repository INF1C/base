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
        <?php if($_SESSION['autorisatie'] != 'Bedrijfsmedewerker') { ?>
            <a href='/ticket/editticket/<?= $idTicket ?>'>Ticket bewerken</a>
        <?php }
        if($_SESSION['autorisatie'] === 'Admin') { ?>
            <a class="pull-right" href='/beheerderspaneel/verwijder/ticket/<?= $idTicket ?>'>Ticket verwijderen</a>
        <?php } ?>
    </div>
    <div class="col-lg-3 showback pull-right">
        <?php
    $db = new db;
    $db->db_table = "STATUS_WIJZIGING";
    $idMedewerker = $db->select(array('idMedewerker'), array('idStatus' => $laatsteStatusID))[0]['idMedewerker'];
    if ($idMedewerker != ""){
        $db->db_table = "MEDEWERKER";
        $afbeelding1 = $db->select(array('Afbeelding'), array('idMedewerker' => $idMedewerker))[0]['Afbeelding'];
    }else{
        $afbeelding1 = 'http://hanssietrainorphotography.com/wp-content/uploads/2013/06/facebook-no-image1.gif';
    }
    ?>
        <img class="img-responsive img-circle" src="<?= $afbeelding1 ?>" alt="Anonymous">
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
        echo "<a class='pull-right' href='/ticket/editticket/" . $idTicket . "'>Ticket bewerken</a>";
        ?>
    </div>
    <?php
}

