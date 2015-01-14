<?php
$output = new output;
$idBedrijfsmedewerker = $params;
$bedrijfsmedewerker = $output->BedrijfsMedewerker($idBedrijfsmedewerker)[0];

$idBedrijf = $bedrijfsmedewerker['idBedrijf'];
$bedrijf = $output->Bedrijf($idBedrijf);

$statuswijziging = $output->Statuswijziging(NULL, $idBedrijfsmedewerker);
?>
<div class="col-lg-6 showback">
<pre><?php var_dump(get_defined_vars()); ?></pre>
</div>