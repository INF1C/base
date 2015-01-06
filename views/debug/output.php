<?php

$output = new output;
    
        $ticket = $output->ticket(1);
 
foreach ($ticket as $key => $value) {
    echo "$value <br/>";
    echo "$key";
    
}
?>

<table style="width:100%" border="1">
  <tr>
    <td><?php echo "$key" ?></td>
    <td><?php echo "$value" ?></td> 
  </tr>
</table>

