<?php
$db = new db;
$id = $params;
$stmt = $db->link->prepare("DELETE FROM STATUS_WIJZIGING WHERE idTicket = ?");
$stmt->bindValue(1, $id);
$check = $stmt->execute();

$stmt2 = $db->link->prepare("DELETE FROM TICKET WHERE idTicket = ?");
$stmt2->bindValue(1, $id);
$check2 = $stmt2->execute();
if($check == 1 && $check2 == 1){
	echo'<div class="alert alert-success">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<strong>Succes!</strong> Het ticket is verwijdert.</div>';
	?><p>U wordt terug gestuurd in <span id="counter">5</span> seconden.</p>
	<script type="text/javascript">
		function countdown() {
			var i = document.getElementById('counter');
			if (parseInt(i.innerHTML) <= 1) {
				location.href = '/';
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
