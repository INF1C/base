<?php
$output = new output;

$opentickets = $output->openTickets();
        echo "<table style='width:100%' border='1'>";
foreach ($opentickets as $key => $value) {
    echo "<tr>";
    echo "<td>" . $value . "</td>";
    echo "<td>" . $key . "</td>";
    echo "</tr>";
}
echo "<pre>";var_dump($opentickets); echo "</pre>";

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

