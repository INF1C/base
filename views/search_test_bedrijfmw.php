
<?php
$db = new db();

if (isset($_POST['zoekterm']))
{
    $zoekterm = filter_input(INPUT_POST, 'zoekterm');
    $optie = 'BEDRIJFSMEDEWERKER';
    $db->db_table = $optie;
    foreach($db->select(NULL, NULL, "SELECT * FROM " . $optie . " WHERE Achternaam LIKE '%" . $zoekterm . "%'")[0] as $key => $result)
    {
        echo $key . ":" . $result . "<br />";
        
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