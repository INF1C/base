<?php
$idTicket = $params;
$output = new output;
$ticketinfo = $output->ticket(5);
var_dump($ticketinfo);
foreach ($ticketinfo as $key => $value) {
			echo "<tr>";
			foreach($value as $key => $subvalue){
				if($key == "Bedrijf")
					continue;
				echo "<td>" . $subvalue . "</td>";
			}
			echo "</tr>";
		}

?>

