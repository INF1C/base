<div class="col-lg-6 showback">
	<h2>FAQ</h2>
	<div class="well well-lg center-block">
		<a role="button" href="/beheerderspaneel/faq/nieuw/" class="btn btn-primary btn-lg btn-block">Nieuw</a>
	</div>
</div>
<span class="clearfix"></span>
<div class="col-lg-12 showback">
<?php
$output = new output;
$faqinfo = $output->FAQ();
echo "<table class='table table-hover'>";
echo "<tr>";
echo "<th> Vraag </th>";
echo "<th> Beschrijving </th>";
echo "<th> Oplossing </ht>";
echo "<th> Auteur </th>";
echo "</tr>";
$outpu->db->db_table = "MEDEWERKER";
foreach ($faqinfo as $value) {
	echo "<tr>";
	foreach ($value as $key => $subvalue) {
		if($key == "idFAQ"){
			$idFAQ = $subvalue;
		} elseif($key == "idMedewerker") {
			$idMedewerker = $subvalue;
		} else {
			echo "<td>" . $subvalue . "</td>";
		}
	}
	echo "<td>" . implode(' ', $output->db->select(array('Voornaam', 'Achternaam'), array('idMedewerker' => $idMedewerker))[0]) . "</td>";
	echo "<td><a href='/beheerderspaneel/faq/edit/" . $idFAQ . "'>Bewerk</a></td>";
	echo "</tr>";
}
echo "</table>";
?>
</div>