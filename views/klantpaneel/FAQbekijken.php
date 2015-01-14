<?php
$output = new output;
$faqinfo = $output->FAQ();
?>
<div class="content-panel">
		<table class="table table-hover">
                      echo "<table style='width:100%' border='1'>";
foreach ($faqinfo as $key => $value) {
    echo "<tr>";
    echo "<td>" . $key . "</td>";
    echo "<td>" . $value . "</td>";
    echo "</tr>";
}
echo "<pre>";var_dump($faqinfo); echo "</pre>";


//Open tickets checken
//$output = new output;
//$opentickets = $output->openTickets();
//            echo "<table border='2'>";
//    echo "<tr><th> Ticket ID </th>";
//    echo "<th> Incident Type </th>";
//    echo "<th> Probleemstelling </th>";
//    echo "<th> Oplossing </th>";
//    echo "<th> Bedrijfsnaam </th></tr>";
//foreach ($opentickets as $key => $value) {
//    echo "<tr>";
//    foreach ($value as $ticket)
//    {
//        echo "<td>" . $ticket;
//        echo "</td>";
//    }
//    echo "</tr>";
//}
//echo "<pre>";var_dump($opentickets); echo "</pre>";