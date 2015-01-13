<?php
$db = new db();

if (isset($_POST['zoekterm']))
{
	$zoekterm = "%" . filter_input(INPUT_POST, 'zoekterm') . "%";
	$stmt = $this->db->link->prepare("SELECT * FROM MEDEWERKER WHERE Voornaam LIKE ? OR Achternaam LIKE ?");
	$stmt->bindValue(1, $zoekterm);
	$stmt->bindValue(2, $zoekterm);
	$stmt->execute();
	$returnArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
	echo "<table class='table table-hover'>";
	echo "<tr><th> Link </th>";
	echo "<th> Gebruikersnaam </th>";
	echo "<th> E-mail </th>";
	echo "<th> Voornaam </th>";
	echo "<th> Achternaam </th>";
	echo "<th> Tussenvoegsel </th>";
	echo "<th> Afbeelding </th>";
	foreach($returnArray as $result)
	{
		echo "<tr>";
		foreach($result as $key => $subresult){
			echo "<td>";
			if($key == "idMedewerker"){
				$id = $subresult;
			} else {
				echo $subresult;
			}
			echo "</td>";
		}
		echo "<td><a href='/medewerker/edit/?idMedewerker=" . $id . "'>Klik hier om te bewerken</a></td>";
		echo "</tr>";
	}
} else {
	$zoekterm = "";
}
?>

<div class="col-lg-12">
	<div class="form-panel">
		<h4 class="mb"><i class="fa fa-angle-right"></i> Zoek medewerker</h4>
		<form class="form-inline" role="form">
			<div class="form-group">
				<label class="sr-only" for="zoekterm">Voor of achternaam:</label>
				<input type="text" name="zoekterm" class="form-control" id="zoekterm" placeholder="Zoekterm">
			</div>
			<button type="submit" class="btn btn-theme">Zoek</button>
		</form>
	</div><!-- /form-panel -->
</div><!-- /col-lg-12 -->