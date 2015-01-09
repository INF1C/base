<?php

$output = new output;
$medewerkerinfo = $output->Medewerker(1);
      echo "<table style='width:100%' border='1'>";
foreach ($medewerkerinfo as $key => $value) {
  echo "<tr>";
echo "<td>" . $value . "</td>";
echo "<td>" . $key . "</td>";
echo "</tr>";
}
echo "<pre>";var_dump($opentickets); echo "</pre>";
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
//echo "<pre>";var_dump($opentickets); echo "</pre>";

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

