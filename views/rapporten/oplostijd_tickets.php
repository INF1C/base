<div class="col-lg-12 showback">
    <h2>Oplostijd</h2>
    <?php
    $output = new output;

    $oplostijd = $output->oplostijdTickets();
    echo "<table class='table table-hover'>";
    echo "<tr><th> Incident type </th>";
    echo "<th> Probleemstelling </th>";
    echo "<th> Oplossing </th>";
    echo "<th> Geopen op </th>";
    echo "<th> Gesloten op </th>";
    echo "<th> Oplostijd (dagen) </th>";
    echo "<th> Bedrijfsnaam </th></tr>";
    foreach ($oplostijd as $key => $value) {
        ?>
        <tr onclick="window.document.location = '/ticket/<?= $key ?>'">
            <?php
            foreach ($value as $ticket) {
                echo "<td>" . $ticket;
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>

</div>