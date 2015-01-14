<div class="col-lg-12">
<?php
$output = new output;
$faqinfo = $output->FAQ();
?>
<div class="content-panel">
		<table class="table table-hover">
                    <tr>
                        <th>Vraag</th>
                        <th>Beschrijving</th>
                        <th>Oplossing</th>
                        <th>ID Medewerker</th>
                    </tr>
                    
                    <?php
foreach ($faqinfo as $key => $value) {
    echo "<tr>";
    foreach ($value as $faq)
    {
    echo "<td>" . $faq;
    echo "</td>";
    }
    echo "</tr>";
}
?>
</table>
</div>
</div>