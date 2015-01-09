<?php
//Bedrijf test
$output = new output;
$bedrijfinfo = $output->BedrijfOphalen('Drewes-Webdesign')[0];
              echo "<table style='width:100%' border='1'>";
foreach ($bedrijfinfo as $key => $value) {
    echo "<tr>";
    echo "<td>" . $key . "</td>";
    echo "<td>" . $value . "</td>";
    echo "</tr>";
}
echo "<pre>";var_dump($bedrijfinfo); echo "</pre>";
//Bedrijfsmedewerker test
//$output = new output;
//$bedrijfsmedewerkerinfo = $output->BedrijfsmedewerkerOphalen(5)[0];
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

