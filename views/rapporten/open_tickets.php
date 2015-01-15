<div class="col-lg-12 showback">
	<h2>Niet behandelde Tickets</h2>
	<?php
$output = new output;
$opentickets = $output->NietBehandeldeTickets();
           echo "<table class='table table-hover'>";
   echo "<tr><th> Incident type </th>";
   echo "<th> Probleemstelling </th>";
   echo "<th> Geopend op </th>";
   echo "<th> Bedrijfsnaam </th></tr>";
foreach ($opentickets as $key => $value) {
  ?>
   <tr onclick="window.document.location='/ticket/<?= $key ?>'">;
   <?php foreach ($value as $ticket)
   {
       echo "<td>" . $ticket;
       echo "</td>";
   }
   echo "<td><a href='/beheerderspaneel/statuswijziging/nieuw/" . $key . "'>Neem in behandeling</a></td>";
   echo "</tr>";
} 
      
echo "</table>";
	?>
</div>
<div class="col-lg-12 showback">
	<h2>Open Tickets</h2>
	<?php

$output = new output;
$opentickets = $output->openTickets();
   echo "<table class='table table-hover'>";
   echo "<tr><th> ticket ID </th>";
   echo "<th> Incident type </th>";
   echo "<th> Probleemstelling </th>";
   echo "<th> Huidige status </th>";
   echo "<th> Geopend op </th>";
   echo "<th> Bedrijfsnaam </th></tr>";
foreach ($opentickets as $key => $value) {
  ?>
   <tr onclick="window.document.location='/ticket/<?= $key ?>'">;
   <?php
   
   echo "<td>" . $key . "</td>";
   foreach ($value as $ticket)
   {
       echo "<td>" . $ticket;
       echo "</td>";
   }
   echo "<td><a href='/beheerderspaneel/statuswijziging/nieuw/" . $key . "'>Nieuwe status</a></td>";
   echo "</tr>";
}
echo "</table>";
	?>
</div>




