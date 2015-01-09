<?php

$output = new output;

$tickets = $output->openTickets();

echo "<pre>";
var_dump($tickets);
echo "</pre>";