<?php
isset($_POST['zoekterm']) ? $zoekterm = filter_input(INPUT_POST, 'zoekterm') : $zoekterm = '';
?>
<div class="col-lg-12">
    <div class="form-panel">
        <h2> Nieuwe Bedrijfsmedewerker</h2><br />
        <h4 class="mb"><i class="fa fa-angle-right"></i> Zoek bedrijf</h4>
        <form class="form-inline" method="POST" action="" role="form">
            <div class="form-group">
                <label class="sr-only" for="zoekterm">Bedrijfsnaam of telefoonnummer:</label>
                <input type="text" name="zoekterm" class="form-control" id="zoekterm" placeholder="Zoekterm" value="<?= $zoekterm ?>">
            </div>
            <button type="submit" class="btn btn-theme">Zoek</button>
        </form>
    </div><!-- /form-panel -->
    <?php
    if (isset($_POST['zoekterm'])) {
        echo "<div class='content-panel'>";
        $db = new db();
        $zoekterm = filter_input(INPUT_POST, 'zoekterm');
        $stmt = $db->link->prepare("SELECT * FROM BEDRIJF WHERE Bedrijfsnaam LIKE ? OR Telefoon LIKE ?");
        $stmt->bindValue(1, "%" . $zoekterm . "%");
        $stmt->bindValue(2, "%" . $zoekterm . "%");
        $stmt->execute();
        $returnArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "<table class='table table-hover'>";
        echo "<tr>";
        echo "<th> Bedrijfsnaam </th>";
        echo "<th> Adresgegevens </th>";
        echo "<th> Telefoon </th>";
        echo "<th> Email </th>";
        echo "<th> Licentie </th>";
        echo "</tr>";
        foreach ($returnArray as $result) {
            echo "<tr>";
            foreach ($result as $key => $subresult) {

                if ($key == "idBedrijf") {
                    $id = $subresult;
                } else {
                    echo "<td>";
                    echo $subresult;
                    echo "</td>";
                }
            }
            echo "<td><a href='/beheerderspaneel/bedrijfsmedewerker/nieuw/" . $id . "'>Klik hier om te bewerken</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "	</div>";
    }
    ?>
</div><!-- /col-lg-12 -->