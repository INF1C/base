<?php
$idTicket = $params;
echo "<pre>"; var_dump($idTicket); echo "</pre>";
$output = new output;
echo "<pre>"; var_dump($output); "</pre>";
$ticketinfo = $output->ticket($idTicket);
echo "<pre>"; var_dump($ticketinfo); echo "</pre>";
echo $ticketinfo;

?>

