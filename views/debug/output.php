<?php

$output = new output;
    
        $ticket = $output->ticket(1);
 
foreach ($ticket as $key => $value) {
    echo "$value <br/>";
    echo "$key";
}
