<?php
/* 	
	!!!!! LET OP !!!!!
	!!!!! wachtwoord en gebruikersnaam wijzigen functie moet nog gemaakt worden
*/


// LOAD DATA
$db = new db;


// MEDEWERKER
/*if(!empty(FILTER_INPUT(INPUT_GET, 'idMedewerker'))) {
	$idMedewerker = FILTER_INPUT(INPUT_GET, 'idMedewerker');
	$db->db_table = "MEDEWERKER";
	$data = $db->select(array('*'), array('idMedewerker' => $idMedewerker))[0];
} else {
	$data = array_fill_keys(array('idMedewerker', 'Voornaam', 'Tussenvoegsel', 'Achternaam', 'Email'), '');
}*/

// BEDRIJF
/*if(!empty(FILTER_INPUT(INPUT_GET, 'idBedrijf'))) {
	$idBedrijf = FILTER_INPUT(INPUT_GET, 'idBedrijf');
	$db->db_table = "BEDRIJF";
	$data = $db->select(array('*'), array('idBedrijf' => $idBedrijf))[0];
} else {
	$data = array_fill_keys(array('idBedrijf', 'Bedrijfsnaam', 'Adresgegevens', 'Telefoon', 'Email', 'Licentie'), '');
}*/

// BEDRIJFSMEDEWERKER
/*if(!empty(FILTER_INPUT(INPUT_GET, 'idBedrijfsMedewerker'))) {
	$idBedrijfsMedewerker = FILTER_INPUT(INPUT_GET, 'idBedrijfsMedewerker');
	$db->db_table = "BEDRIJFSMEDEWERKER";
	$data = $db->select(array('*'), array('idBedrijfsMedewerker' => $idBedrijfsMedewerker))[0];
} else {
	$data = array_fill_keys(array('idBedrijfsMedewerker', 'Voornaam', 'Tussenvoegsel', 'Achternaam', 'Email', 'Functie'), '');
}*/

// TICKET
/*if(!empty(FILTER_INPUT(INPUT_GET, 'idTicket'))) {
	$idTicket = FILTER_INPUT(INPUT_GET, 'idTicket');
	$db->db_table = "TICKET";
	$data = $db->select(array('*'), array('idTicket' => $idTicket))[0];
} else {
	$data = array_fill_keys(array('idTicket', 'IncidentType', 'Probleemstelling', 'Oplossing'), '');
}*/

// STATUS_WIJZIGING
if(!empty(FILTER_INPUT(INPUT_GET, 'idStatus'))) {
	$idStatus = FILTER_INPUT(INPUT_GET, 'idStatus');
	$db->db_table = "STATUS_WIJZIGING";
	$data = $db->select(array('*'), array('idStatus' => $idStatus))[0];
} else {
	$data = array_fill_keys(array('idStatus', 'idBedrijfsMedewerker', 'idMedewerker', 'Status', 'SoortContact', 'Memo'), '');
}

?>
<div class="form">
	<!--  EDIT MEDEWERKER (werkt)
    <form method="POST" action="/process/edit/medewerker">
        <p>
        	<span>Voornaam:</span>
        	<input type="text" name="Voornaam" value="<?= $data['Voornaam'] ?>" />
        </p>
        <p>
        	<span>Tussenvoegsel:</span>
        	<input type="text" name="Tussenvoegsel" value="<?= $data['Tussenvoegsel'] ?>" />
        </p>
        <p>
        	<span>Achternaam:</span>
        	<input type="text" name="Achternaam" value="<?= $data['Achternaam'] ?>" />
        </p>
        <p>
        	<span>Email:</span>
        	<input type="email" name="Email" value="<?= $data['Email'] ?>" />
        </p>
        <p>
        	<input type="hidden" value="<?= $data['idMedewerker'] ?>" name="idMedewerker" />
        	<input type="submit" value="submit" name="submit" />
        </p>
    </form> -->
    <!-- EDIT BEDRIJF (werkt)
    <form method="POST" action="/process/edit/bedrijf">
    	<p>
    		<span>Bedrijfsnaam:</span>
    		<input type="text" name="Bedrijfsnaam" value="<?= $data['Bedrijfsnaam'] ?>" />
    	</p>
    	<p>
    		<span>Adresgegevens:</span>
    		<textarea name="Adresgegevens"><?= $data['Bedrijfsnaam'] ?></textarea>
    	</p>
    	<p>
    		<span>Telefoon:</span>
    		<input type="text" name="Telefoon" value="<?= $data['Telefoon'] ?>" />
    	</p>
    	<p>
    		<span>Email:</span>
    		<input type="email" name="Email" value="<?= $data['Email'] ?>" />
    	</p>
    	<p>
    		<span>Heeft een licentie?</span>
    		<select name="Licentie">
    			<option value="1" <?= $data['Licentie'] == 1 ? "selected" : '' ?>>Nee</option>
    			<option value="2" <?= $data['Licentie'] == 2 ? "selected" : '' ?>>Ja</option>
    		</select>
    	</p>
    	<p>
    	    <input type="hidden" value="<?= $data['idBedrijf'] ?>" name="idBedrijf" />
        	<input type="submit" value="submit" name="submit" />
        </p>
    </form> -->
    <!-- EDIT BEDRIJFSMEDEWERKER (werkt)
    <form method="POST" action="/process/edit/bedrijfsmedewerker">
        <p>
        	<span>Voornaam:</span>
        	<input type="text" name="Voornaam" value="<?= $data['Voornaam'] ?>" />
        </p>
        <p>
        	<span>Tussenvoegsel:</span>
        	<input type="text" name="Tussenvoegsel" value="<?= $data['Tussenvoegsel'] ?>" />
        </p>
        <p>
        	<span>Achternaam:</span>
        	<input type="text" name="Achternaam" value="<?= $data['Achternaam'] ?>" />
        </p>
        <p>
        	<span>Functie:</span>
        	<input type="text" name="Functie" value="<?= $data['Functie'] ?>" />
        </p>
        <p>
        	<span>Email:</span>
        	<input type="email" name="Email" value="<?= $data['Email'] ?>" />
        </p>
        <p>
        	<input type="hidden" value="<?= $idBedrijfsMedewerker ?>" name="idBedrijfsMedewerker">
        	<input type="submit" value="submit" name="submit" />
        </p>
    </form> -->
    <!-- EDIT ticket (werkt)
    <form method="POST" action="/process/edit/ticket">
    	<p>
    		<span>IncidentType</span>
    		<select name="IncidentType">
    			<option value="Vraag" <?= $data['IncidentType'] == 'Vraag' ? 'selected' : '' ?>>Vraag</option>
    			<option value="Wens" <?= $data['IncidentType'] == 'Wens' ? 'selected' : '' ?>>Wens</option>
    			<option value="Uitval" <?= $data['IncidentType'] == 'Uitval' ? 'selected' : '' ?>>Uitval</option>
    			<option value="Functioneel probleem" <?= $data['IncidentType'] == 'Functioneel probleem' ? 'selected' : '' ?>>Functioneel Probleem</option>
    			<option value="Technisch probleem" <?= $data['IncidentType'] == 'Technisch probleem' ? 'selected' : '' ?>>Technisch Probleem</option>
    		</select>
    	</p>
	    <p>
		    <span>Probleemstelling</span>
			<textarea rows="5" cols="75" name="Probleemstelling"><?= $data['Probleemstelling'] ?></textarea>
	    </p>
	    <p>
		    <span>Oplossing</span>
		    <textarea rows="5" cols="75" name="Oplossing"><?= $data['Oplossing'] ?></textarea>
	    </p>
	    <p>
	    	<input type="hidden" value="<?= $idTicket ?>" name="idTicket" />
	    	<input type="submit" value="submit" name="submit">
	    </p> 
    </form> -->


	<!-- EDIT statuswijziging -->
    <form method="POST" action="/process/edit/statuswijziging">
	    <p>
		    <select name="Status">
		    	<option value="Nieuw" 								<?= $data['Status'] == 'Nieuw' 								? 'selected' : '' ?>>Nieuw</option>
		    	<option value="In behandeling" 						<?= $data['Status'] == 'In behandeling' 					? 'selected' : '' ?>>In behandeling</option>
		    	<option value="Doorgestuurd naar engineer" 			<?= $data['Status'] == 'Doorgestuurd naar engineer' 		? 'selected' : '' ?>>Doorgestuurd naar engineer</option>
		    	<option value="Doorgestuurd naar account manager" 	<?= $data['Status'] == 'Doorgestuurd naar account manager' 	? 'selected' : '' ?>>Doorgestuurd naar account manager</option>
		    	<option value="opgelost" 							<?= $data['Status'] == 'opgelost' 							? 'selected' : '' ?>>opgelost</option>
		    	<option value="afgemeld" 							<?= $data['Status'] == 'afgemeld' 							? 'selected' : '' ?>>afgemeld</option>
		    </select>
	    </p>
        <p>
            <span>Bedrijfsmedewerker ID: (In de toekomst kan het bewerken van de bedrijfsmedewerker mogelijk in een modal gedaan worden?)</span>
            <input type="number" name="idBedrijfsmedewerker" value="<?= $data['idBedrijfsMedewerker'] ?>" />
        </p>
        <p>
            <span>Medewerker ID: (wordt normaal opgehaald uit de sessie)(Wordt alleen weergegeven als de medewerker is ingelogd)</span>
            <input type="number" name="idMedewerker" value="<?= $data['idMedewerker'] ?>" />
        </p>
	    <p>
		    <span>Soort Contact: (bijv. telefonisch</span>
		    <input type="text" name="SoortContact" value="<?= $data['SoortContact'] ?>" />
	    </p>
	    <p>
		    <span>Memo:</span>
		    <textarea rows="5" cols="75"><?= $data['Memo'] ?></textarea>
	    </p>
		<p>
			<span>Moet de DatumTijd ook geupdate worden naar de wijziging van de statuswijziging?????</span>
			<input type="hidden" name="idStatus" value="<?= $idStatus ?>" />
	    	<input type="submit" value="submit" name="submit">
	    </p>
    </form>
   
	<!-- EDIT faq
	<form method="POST" action="/process/create/faq">
		<p>
			<span>Vraag</span>
			<input type="text" name="Vraag" />
		</p>
		<p>
			<span>Beschrijving</span>
			<textarea rows="5" cols="75" name="Beschrijving"></textarea>
		</p>
		<p>
			<span>Oplossing</span>
			<textarea rows="5" cols="75" name="Oplossing"></textarea>
		</p>
	    <p>
	    	<input type="submit" value="submit" name="submit">
	    </p>
	</form> -->
</div>

