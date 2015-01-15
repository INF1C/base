<?php
$idTicket = $params;
$output = new output;
$ticketinfo = $output->ticket(5);

foreach($ticketinfo as $test)
{
    echo "<th>";
    foreach($test as $key)
    {
        echo "<tr>" . $key . "</tr>";
    }
    echo "</th>";
}

?>

