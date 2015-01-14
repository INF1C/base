<?php
$output = new output;
$faqinfo = $output->FAQ();
                      echo "<table style='width:100%' border='1'>";
foreach ($faqinfo as $key => $value) {
    echo "<tr>";
    echo "<td>" . $key . "</td>";
    echo "<td>" . $value . "</td>";
    echo "</tr>";
}
echo "<pre>";var_dump($faqinfo); echo "</pre>";
?>