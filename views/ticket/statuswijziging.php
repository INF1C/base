<?php
$idTicket = $params;
$output = new output;
$ticketinfo = $output->ticket($idTicket);

echo $ticketinfo;

?>

