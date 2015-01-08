<?php
/* 	
	!!!!! LET OP !!!!!
	!!!!! wachtwoord wijzigen functie moet nog gemaakt worden
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
if(!empty(FILTER_INPUT(INPUT_GET, 'idBedrijf'))) {
	$idBedrijf = FILTER_INPUT(INPUT_GET, 'idBedrijf');
	$db->db_table = "BEDRIJF";
	$data = $db->select(array('*'), array('idBedrijf' => $idBedrijf))[0];
} else {
	$data = array_fill_keys(array('idBedrijf', 'Bedrijfsnaam', 'Adresgegevens', 'Telefoon', 'Email', 'Licentie'), '');
}
?>
<div class="form">
	<!--  EDIT MEDEWERKER 
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
    <!-- EDIT BEDRIJF -->
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
    			<option value="1" <?= $data['Licentie'] == 1 ? "CHECKED" ?>>Nee</option>
    			<option value="2" <?= $data['Licentie'] == 2 ? "CHECKED" ?>>Ja</option>
    		</select>
    	</p>
    	<p>
    	    <input type="hidden" value="<?= $data['idBedrijf'] ?>" name="idBedrijf" />
        	<input type="submit" value="submit" name="submit" />
        </p>
    </form> 
    <!-- EDIT BEDRIJFSMEDEWERKER
    <form method="POST" action="/process/create/bedrijfsmedewerker">
        <p>
        	<span>Gebruikersnaam:</span>
        	<input type="text" name="Gebruikersnaam" />
        </p>
        <p>
        	<span>Wachtwoord:</span>
        	<input type="password" name="Wachtwoord" />
        </p>

        <p>
        	<span>Voornaam:</span>
        	<input type="text" name="Voornaam" />
        </p>
        <p>
        	<span>Tussenvoegsel:</span>
        	<input type="text" name="Tussenvoegsel">
        </p>
        <p>
        	<span>Achternaam:</span>
        	<input type="text" name="Achternaam" />
        </p>
        <p>
        	<span>Functie:</span>
        	<input type="text" name="Functie" />
        </p>
        <p>
        	<span>Email:</span>
        	<input type="email" name="Email" />
        </p>
        <p>
        	<input type="hidden" value="3" name="Bedrijf" />
        	<input type="submit" value="submit" name="submit" />
        </p>
    </form> -->
    <!-- EDIT ticket
    <form method="POST" action="/process/create/ticket">
    	<p>
    		<span>IncidentType</span>
    		<select name="IncidentType">
    			<option value="Vraag">Vraag</option>
    			<option value="Wens">Wens</option>
    			<option value="Uitval">Uitval</option>
    			<option value="Functioneel probleem">Functioneel Probleem</option>
    			<option value="Technisch probleem">Technisch Probleem</option>
    		</select>
    	</p>
	    <p>
		    <span>Probleemstelling</span>
			<textarea rows="5" cols="75" name="Probleemstelling"></textarea>
	    </p>
	    <p>
		    <span>Oplossing</span>
		    <textarea rows="5" cols="75" name="Oplossing"></textarea>
	    </p>
	    <p>
	    	<input type="submit" value="submit" name="submit">
	    </p> 
    </form> -->


	<!-- EDIT statuswijziging
    <form method="POST" action="/process/create/statuswijziging">
	    <p>
		    <input type="hidden" name="Status" value="Nieuw" />
	    </p>
        <p>
            <span>Ticket ID:</span>
            <input type="number" name="idTicket" />
        </p>
        <p>
            <span>Bedrijfsmedewerker ID: (wordt normaal opgehaald uit de sessie)</span>
            <input type="number" name="idBedrijfsmedewerker" />
        </p>
        <p>
            <span>Medewerker ID ID: (wordt normaal opgehaald uit de sessie)(Wordt alleen weergegeven als de medewerker is ingelogd)</span>
            <input type="number" name="idMedewerker" />
        </p>
	    <p>
		    <span>Soort Contact: (bijv. telefonisch</span>
		    <input type="text" name="SoortContact" />
	    </p>
	    <p>
		    <span>Memo:</span>
		    <textarea rows="5" cols="75"></textarea>
	    </p>
		<p>
	    	<input type="submit" value="submit" name="submit">
	    </p>
    </form> -->
   
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

