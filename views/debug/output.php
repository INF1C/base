<?php

$output = new output;
    
        $ticket = $output->ticket(1);

echo "<table style='width:100%' border='1'>";

foreach ($ticket as $key => $value) {
    echo "<tr>";
    echo "<td>" . $value . "</td>";
    echo "<td>" . $key . "</td>";
    echo "</tr>";
}
?>
</table>

