
<?php
$db = new db();

if (isset($_POST['zoekterm']))
{
    $zoekterm = filter_input(INPUT_POST, 'zoekterm');
    $optie = 'MEDEWERKER';
    $db->db_table = $optie;
    ECHO $db->select(array('*'), array('Achternaam' => $zoekterm));
    ?>
<p>
<form action="Test123.php" method="POST">
    <strong>test</strong><br />
    <p>Zoekterm: <input type="text" name="zoekterm" /></p>
    <p>
        <input type="reset" name="reset" value="Clear Form" />
        <input type="submit" name="submit" value="Zoeken" />
    </p>
</form>
</p>