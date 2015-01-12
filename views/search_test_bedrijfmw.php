
<?php
$db = new db();

if (isset($_POST['zoekterm']))
{
    $zoekterm = filter_input(INPUT_POST, 'zoekterm');
    $optie = 'BEDRIJFSMEDEWERKER';
    $db->db_table = $optie;
    echo "<table class='table table-striped'>";
    echo "<tr><th> Link </th>";
    echo "<th> BedrijfsID </th>";
    echo "<th> Gebruikersnaam </th>";
    echo "<th> E-mail </th>";
    echo "<th> Voornaam </th>";
    echo "<th> Achternaam </th>";
    echo "<th> Tussenvoegsel </th>";
    echo "<th> Functie </th></tr>";
    foreach($db->select(NULL, NULL, "SELECT * FROM " . $optie . " WHERE Achternaam LIKE '%" . $zoekterm . "%'" . " OR Voornaam LIKE '%" . $zoekterm . "%") as $result)
    {
        echo "<tr>";
        foreach($result as $key => $subresult){
            echo "<td>";
            if($key == "idBedrijfsMedewerker"){
                echo "<a href='" . $subresult . "'>Link</a>";
            } else {
                echo $subresult;
            }
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
    
echo "<p>" .
"<div class='col-md-4'>" .
"<form action='' method='POST' class='in-line'>" .
    "<div class='form-group'>
		<label class='sr-only' for='searchBedrijfMedewerkerZoekterm'>\</label>
		<input type='text' class='form-control' id='searchBedrijfMedewerkerZoekterm' placeholder='Zoekterm' name='zoekterm'>
	</div>" .
	
	"<div class='form-group'>
		<label class='sr-only' for='searchBedrijfMedewerkerReset'>\</label>
		<input type='reset' class='form-control' id='searchBedrijfMedewerkerReset' value='Reset' name='reset'>
	</div>" .
	
	"<div class='form-group'>
		<label class='sr-only' for='searchBedrijfMedewerkerSubmit'>\</label>
		<input type='submit' class='form-control' id='searchBedrijfMedewerkerSubmit' value='Zoeken' name='submit'>
	</div>" .
	"</p>" .
"</form>" .
"</div>" .
"</p>";

	