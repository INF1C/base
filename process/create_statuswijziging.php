<?php

$create = new create;
$db = new db;

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	$idTicket = filter_input(INPUT_POST, 'idTicket');
	$idBedrijfsmedewerker = filter_input(INPUT_POST, 'idBedrijfsmedewerker');
	$idMedewerker = filter_input(INPUT_POST, 'idMedewerker');
	$db->db_table = "BEDRIJFSMEDEWERKER";
	$idBedrijf = $db->select(array('idBedrijf'), array('idBedrijfsMedewerker' => $idBedrijfsmedewerker))[0]['idBedrijf'];
	$result = $create->statusWijziging($idTicket, $idBedrijfsmedewerker, $idBedrijf, $idMedewerker);
    if($result === TRUE){
		echo'<div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Succes!</strong> Het account voor de medewerker is aangemaakt.</div>';
                ?><p>U wordt terug gestuurd naar de mederwerkers pagina in <span id="counter">5</span> seconden.</p>
                <script type="text/javascript">
                    function countdown() {
                        var i = document.getElementById('counter');
                        if (parseInt(i.innerHTML) <= 1) {
                        location.href = '/beheerderspaneel/medewerker/';
                    }
                        i.innerHTML = parseInt(i.innerHTML) - 1;
                }
                    setInterval(function () {
                    countdown();
                }, 1000);
            </script><?php
	} else {
        echo "<div class='alert alert-danger' role='alert'>Helaas, hier is iets mis gegaan. Probeer het later nog eens.<br>";
        echo $result . "</div>";    }
	}
} else {
	echo "U mag deze pagina niet zo opvragen!";
}