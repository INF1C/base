<?php

$output = new output;
// date('Y-m-d H-i-s')
$timeframe = array('start' => '2015-01-01 00:00:00', 'stop' => date('Y-m-d H-i-s'));
echo "<pre>"; var_dump($timeframe); echo "</pre>";
$result = $output->tickets(NULL, $timeframe);

echo "<pre>";
var_dump($result);
echo "</pre>";