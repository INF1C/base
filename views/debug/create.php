
<div class="form">
	<!--  CREATE MEDEWERKER (werkt)
    <form method="POST" action="/process/create/medewerker">
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
        	<span>Email:</span>
        	<input type="email" name="Email" />
        </p>
        <p>
        	<input type="submit" value="submit" name="submit" />
        </p>
    </form> -->
    <!-- CREATE BEDRIJF (werkt)
    <form method="POST" action="/process/create/bedrijf">
    	<p>
    		<span>Bedrijfsnaam:</span>
    		<input type="text" name="Bedrijfsnaam" />
    	</p>
    	<p>
    		<span>Adresgegevens:</span>
    		<textarea name="Adresgegevens"></textarea>
    	</p>
    	<p>
    		<span>Telefoon:</span>
    		<input type="text" name="Telefoon" />
    	</p>
    	<p>
    		<span>Email:</span>
    		<input type="email" name="Email" />
    	</p>
    	<p>
    		<span>Heeft een licentie?</span>
    		<select name="Licentie">
    			<option value="1">Nee</option>
    			<option value="2">Ja</option>
    		</select>
    	</p>
    	<p>
        	<input type="submit" value="submit" name="submit" />
        </p>
    </form> -->
    <!-- CREATE BEDRIJFSMEDEWERKER (werkt)
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
    <!-- CREATE ticket (werkt)
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


	<!-- CREATE statuswijziging (werkt)
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
   
	<!-- CREATE faq -->
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
	</form>
</div>

