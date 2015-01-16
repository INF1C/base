<?php
$db = new db;
$id = $params;
$sql = 	"SET @naam := (SELECT Gebruikersnaam FROM BEDRIJFSMEDEWERKER WHERE idBedrijfsMedewerker = ?);" .
		" DELETE FROM BEDRIJFSMEDEWERKER WHERE idBedrijfsMedewerker = ?; " .
		" DELETE FROM ACCOUNT WHERE Gebruikersnaam = @user;";
$stmt = $db->link->prepare($sql);
$stmt->bindValue(1, $id);
$stmt->bindValue(2, $id);
$check = $stmt->execute();
if($check == 1){
	echo'<div class="alert alert-success">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<strong>Succes!</strong> De bedrijfsmedewerker is verwijdert.</div>';
	?><p>U wordt terug gestuurd in <span id="counter">5</span> seconden.</p>
	<script type="text/javascript">
		function countdown() {
			var i = document.getElementById('counter');
			if (parseInt(i.innerHTML) <= 1) {
				location.href = '/beheerderspaneel/verwijder/';
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
