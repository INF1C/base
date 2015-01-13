
<?php
$db = new db();

if (isset($_POST['zoekterm']))
{
    $zoekterm = filter_input(INPUT_POST, 'zoekterm');
    $optie = 'BEDRIJF';
    $db->db_table = $optie;
    echo "<table border='2'>";
    echo "<tr><th> Link </th>";
    echo "<th> Bedrijfsnaam </th>";
    echo "<th> Adresgegevens </th>";
    echo "<th> Telefoonnummer </th>";
    echo "<th> E-mail </th>";
    echo "<th> Licentie </th></tr>";
    foreach($db->select(NULL, NULL, "SELECT * FROM " . $optie . " WHERE Bedrijfsnaam LIKE '%" . $zoekterm . "%'") as $result)
    {
        echo "<tr>";
        foreach($result as $key => $subresult){
            echo "<td>";
            if($key == "idBedrijf"){
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
"<form action='' method='POST'>" .
    "<strong>test</strong><br />" .
    "<p>Zoekterm: <input type='text' name='zoekterm' /></p>" .
    "<p>" .
        "<input type='reset' name='reset' value='Clear Form' />" .
        "<input type='submit' name='submit' value='Zoeken' />" .
    "</p>" .
"</form>" .
"</p>";