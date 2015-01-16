<?php
$db = new db;
$id = $params;
echo "Test";
$stmt1 = $db->link->prepare("SELECT Gebruikersnaam FROM BEDRIJFSMEDEWERKER WHERE idBedrijfsMedewerker = ?");
$stmt1->bindValue(1, $id);
$stmt1->execute();
$result = $stmt1->fetch(PDO::FETCH_ASSOC)['Gebruikersnaam'];

$stmt = $db->link->prepare("DELETE FROM BEDRIJFSMEDEWERKER WHERE idBedrijfsMedewerker = ?");
$stmt->bindValue(1, $id);
$check = $stmt->execute();

$stmt2 = $db->link->prepare("DELETE FROM ACCOUNT WHERE Gebruikersnaam = ?");
$stmt2->bindValue(1, $result);
$check2 = $stmt2->execute();
if($check == 1 && $check2 == 1){
	echo'<div class="alert alert-success">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<strong>Succes!</strong> De bedrijfsmedewerker is verwijdert.</div>';
	?><p>U wordt terug gestuurd in <span id="counter">5</span> seconden.</p>
	<script type="text/javascript">
		function countdown() {
			var i = document.getElementById('counter');
			if (parseInt(i.innerHTML) <= 1) {
				location.href = '/beheerderspaneel/verwijder/bedrijfsmedewerker/';
			}
			i.innerHTML = parseInt(i.innerHTML) - 1;
		}
		setInterval(function () {
			countdown();
		}, 1000);
	</script><?php
} else {
	echo "<div class='alert alert-danger' role='alert'>Helaas, hier is iets mis gegaan. Probeer het later nog eens.<br>";
	echo $check . "</div>";
}
