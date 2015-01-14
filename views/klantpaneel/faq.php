<div class="col-lg-12 showback">
<h2>FAQ - Frequently Asked Questions</h2>
<?php
$output = new output;
$faqinfo = $output->FAQ();
echo "<table class='table table-hover'>";
echo "<tr>";
echo "<th> Vraag </th>";
echo "<th> Beschrijving </th>";
echo "<th> Oplossing </ht>";
echo "<th> Auteur </th>";
echo "</tr>";
$output->db->db_table = "MEDEWERKER";
foreach ($faqinfo as $value) {
    echo "<tr>";
    foreach ($value as $key => $subvalue) {
        if($key == "idFAQ"){
            $idFAQ = $subvalue;
        } elseif($key == "idMedewerker") {
            continue;
        } 
        echo "<td>" . $subvalue . "</td>";
    }
    echo "<td>" . implode(' ', $output->db->select(array('Voornaam', 'Achternaam'), array('idMedewerker' => $idMedewerker))[0]) . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</div>
</div>