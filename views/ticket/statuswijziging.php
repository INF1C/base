<?php
$idTicket = $params;
$output = new output;
$ticketinfo = $output->ticket(5);

foreach($ticketinfo as $test1 => $test)
{
    echo "<tr><td>" . $test1 . "</td>";
    foreach($test as $key)
    {
        echo "<tr>" . $key . "</tr>";
    }
    echo "</th>";
}

?>

