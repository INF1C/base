<div class="col-lg-12 showback">
	<h2>Niet behandelde incidenten</h2>
	<?php

$output = new output;
$opentickets = $output->openTickets();
           echo "<table class='table table-hover'>";
   echo "<tr><th> Incident type </th>";
   echo "<th> Probleemstelling </th>";
   echo "<th> Huidige status </th>";
   echo "<th> Geopend op </th>";
   echo "<th> Bedrijfsnaam </th></tr>";
foreach ($opentickets as $key => $value) {
   echo "<tr>";
   foreach ($value as $ticket)
   {
       echo "<td>" . $ticket;
       echo "</td>";
   }
   echo "<td><a href='/beheerderspaneel/statuswijziging/nieuw/" . $key . "'>Nieuwe status</a></td>";
   echo "</tr>";
}

	?>
</div>




