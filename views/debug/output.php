<?php

$output = new output;
    
        $ticket = $output->ticket(1);
 
foreach ($ticket as $key => $value) {
    echo "$value <br/>";
    echo "$key";
    
}
?>

<table style="width:100%">
  <tr>
    <td>Jill</td>
    <td>Smith</td> 
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td> 
    <td>94</td>
  </tr>
</table>

