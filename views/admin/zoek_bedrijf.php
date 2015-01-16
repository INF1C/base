<?php
isset($_POST['zoekterm']) ? $zoekterm = filter_input(INPUT_POST, 'zoekterm') : $zoekterm = '';
?>
<div class="col-lg-12 showback">

        <h2> Verwijder Bedrijf</h2><br />
        <h4 class="mb"><i class="fa fa-angle-right"></i> Zoek bedrijf</h4>
        <form class="form-inline" method="POST" action="" role="form">
            <div class="form-group">
                <label class="sr-only" for="zoekterm">Bedrijfsnaam:</label>
                <input type="text" name="zoekterm" class="form-control" id="zoekterm" placeholder="Voer een bedrijfsnaam in" value="<?= $zoekterm ?>">
            </div>
            <button type="submit" class="btn btn-theme">Zoek</button>
        </form>
<!-- /form-panel -->
    <?php
    if (isset($_POST['zoekterm'])) {
        echo "<div class='content-panel'>";
        $db = new db();
        $zoekterm = filter_input(INPUT_POST, 'zoekterm');
        $stmt = $db->link->prepare("SELECT * FROM BEDRIJF WHERE Bedrijfsnaam LIKE ?");
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
                } elseif ($key == "Licentie") {
                    echo "<td>";
                    echo $subresult == 1 ? 'Nee' : 'Ja';
                    echo "</td>";
                } else {
                    echo "<td>";
                    echo $subresult;
                    echo "</td>";
                }
            }
            echo "<td><a href='/beheerderspaneel/verwijder/bedrijf/" . $id . "'>Klik hier om te verwijderen</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "	</div>";
    }
    ?>
</div><!-- /col-lg-12 -->