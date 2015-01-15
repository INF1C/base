
<?php
$db = new db();

if (isset($_POST['zoekterm']))
{
    $zoekterm = filter_input(INPUT_POST, 'zoekterm');
    $optie = 'MEDEWERKER';
    $db->db_table = $optie;
    echo "<table border='2'>";
    echo "<tr><th> Link </th>";
    echo "<th> Gebruikersnaam </th>";
    echo "<th> E-mail </th>";
    echo "<th> Voornaam </th>";
    echo "<th> Achternaam </th>";
    echo "<th> Tussenvoegsel </th>";
    echo "<th> Afbeelding </th>";
    foreach($db->select(NULL, NULL, "SELECT * FROM " . $optie . " WHERE Achternaam LIKE '%" . $zoekterm . "%'") as $result)
    {
        echo "<tr>";
        foreach($result as $key => $subresult){
            echo "<td>";
            if($key == "idMedewerker"){
                echo "<a href='" . $subresult . "'>Link</a>";
            } else {
                echo $subresult;
            }
            echo "</td>";
        }
        echo "</tr>";
    }
}
    
echo "<p>" .
"<form action='' method='POST'>" .
    "<strong>test</strong><br />" .
    "<p>Zoekterm: <input type='text' name='zoekterm' /></p>" .
    "<p>" .
        "<input type='reset' name='reset' value='Clear Form' />" .
        "<input type='submit' name='submit' value='Zoeken' />" .
    "</p>" .
"</form>" .
"</p>";