<?php

$output = new output;
// date('Y-m-d H-i-s')
$result = $output->tickets(NULL, array('start' => '2015-01-01 00:00:00', 'stop' => date('Y-m-d H-i-s')));

echo "<pre>";
var_dump($result);
echo "</pre>";