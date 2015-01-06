
<div class="form">
	<!--  CREATE MEDEWERKER
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
    <!-- CREATE BEDRIJF
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
    <!-- CREATE BEDRIJFSMEDEWERKER
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
    <!-- CREATE ticket -->
    <form method="POST" action="/process/create/ticket">
    	<p>
    		<span>IncidentType</span>
    		<select name="IncidentType">
    			<option value="Vraag">Vraag</option>
    			<option value="Wens">Wens</option>
    			<option value="Uitval">Uitval</option>
    			<option value="FunctioneelProbleem">Functioneel Probleem</option>
    			<option value="TechnischProbleem">Technisch Probleem</option>
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
    </form>


	<!-- CREATE statuswijziging
    <form method="POST" action="/process/create/statuswijziging">
	    <p>
		    <span>status</span>
		    <input type="text" name="Status" />
	    </p>
	    <p>
		    <span>Soort Contact</span>
		    <input type="text" name="SoortContact" />
	    </p>
	    <p>
		    <span>memo</span>
		    <textarea rows="5" cols="75"></textarea>
	    </p>
		<p>
	    	<input type="submit" value="submit" name="submit">
	    </p>
    </form>
   -->
	<!-- CREATE faq
	<form method="POST" action="/process/create/faq">
		<p>
			<span>Vraag</span>
			<input type="text" name="Vraag" />
		</p>
		<p>
			<span>Beschrijving</span>
			<textarea rows="5" cols="75" name="Beschijving"></textarea>
		</p>
		<p>
			<span>Oplossing</span>
			<textarea rows="5" cols="75" name="Oplossing"></textarea>
		</p>
	    <p>
	    	<input type="submit" value="submit" name="submit">
	    </p>
	</form>
  	-->
</div>

