<?php
//Tickets test WERKT NIET
$output = new output;
$Ticketinfo = $output->tickets('1');
                              echo "<table style='width:100%' border='1'>";
foreach ($Ticketinfo as $key => $value) {
    echo "<tr>";
    echo "<td>" . $key . "</td>";
    echo "<td>" . $value . "</td>";
    echo "</tr>";
}
echo "<pre>";var_dump($Ticketinfo); echo "</pre>";
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
//FAQ test
//$output = new output;
//$faqinfo = $output->FaqOphalen();
//                      echo "<table style='width:100%' border='1'>";
//foreach ($faqinfo as $key => $value) {
//    echo "<tr>";
//    echo "<td>" . $key . "</td>";
//    echo "<td>" . $value . "</td>";
//    echo "</tr>";
//}
//echo "<pre>";var_dump($faqinfo); echo "</pre>";
//Bedrijf test
//$output = new output;
//$bedrijfinfo = $output->Bedrijf(1)[0];
//              echo "<table style='width:100%' border='1'>";
//foreach ($bedrijfinfo as $key => $value) {
//    echo "<tr>";
//    echo "<td>" . $key . "</td>";
//    echo "<td>" . $value . "</td>";
//    echo "</tr>";
//}
//echo "<pre>";var_dump($bedrijfinfo); echo "</pre>";
//Bedrijfsmedewerker test
//$output = new output;
//$bedrijfsmedewerkerinfo = $output->Bedrijfsmedewerker(5)[0];
//              echo "<table style='width:100%' border='1'>";
//foreach ($bedrijfsmedewerkerinfo as $key => $value) {
//    echo "<tr>";
//    echo "<td>" . $key . "</td>";
//    echo "<td>" . $value . "</td>";
//    echo "</tr>";
//}
//echo "<pre>";var_dump($bedrijfsmedewerkerinfo); echo "</pre>";
//Medewerker test
//$output = new output;
//$medewerkerinfo = $output->Medewerker(1)[0];
//      echo "<table style='width:100%' border='1'>";
//foreach ($medewerkerinfo as $key => $value) {
//    echo "<tr>";
//    echo "<td>" . $key . "</td>";
//    echo "<td>" . $value . "</td>";
//    echo "</tr>";
//}
//echo "<pre>";var_dump($medewerkerinfo); echo "</pre>";

//Oplostijd tickets
//$output = new output;

//$oplostijdtickets = $output->oplostijdTickets();
  //      echo "<table style='width:100%' border='1'>";
//foreach ($oplostijdtickets as $key => $value) {
  //  echo "<tr>";
    //echo "<td>" . $value . "</td>";
    //echo "<td>" . $key . "</td>";
    //echo "</tr>";
//}
//echo "<pre>";var_dump($oplostijdtickets); echo "</pre>";

//Alle tickets weergeven
//$output = new output;
    
  //      $ticket = $output->ticket(1);

//echo "<table style='width:100%' border='1'>";

//foreach ($ticket as $key => $value) {
  //  echo "<tr>";
    //echo "<td>" . $value . "</td>";
    //echo "<td>" . $key . "</td>";
    //echo "</tr>";
//}
?>
</table>

