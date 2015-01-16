<?php
isset($_POST['zoekterm']) ? $zoekterm = filter_input(INPUT_POST, 'zoekterm') : $zoekterm = '';
?>
<div class="col-lg-12">
    <div class="form-panel">
		<h2> Verwijder Medewerker</h2><br />
        <h4 class="mb"><i class="fa fa-angle-right"></i> Zoek medewerker</h4>
        <form class="form-inline" method="POST" action="" role="form">
            <div class="form-group">
                <label class="sr-only" for="zoekterm">Voor of achternaam:</label>
                <input type="text" name="zoekterm" class="form-control" id="zoekterm" placeholder="Voer een naam in" value="<?= $zoekterm ?>">
            </div>
            <button type="submit" class="btn btn-theme">Zoek</button>
        </form>
    </div><!-- /form-panel -->
    <?php
    if (isset($_POST['zoekterm'])) {
        echo "<div class='content-panel'>";
        $db = new db();
        $zoekterm = filter_input(INPUT_POST, 'zoekterm');
        $stmt = $db->link->prepare("SELECT * FROM MEDEWERKER WHERE Voornaam LIKE ? OR Achternaam LIKE ?");
        $stmt->bindValue(1, "%" . $zoekterm . "%");
        $stmt->bindValue(2, "%" . $zoekterm . "%");
        $stmt->execute();
        $returnArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "<table class='table table-hover'>";
        echo "<tr>";
        echo "<th> Gebruikersnaam </th>";
        echo "<th> E-mail </th>";
        echo "<th> Voornaam </th>";
        echo "<th> Achternaam </th>";
        echo "<th> Tussenvoegsel </th>";
        echo "<th> Afbeelding </th>";
        echo "<th> Link </th>";
        echo "</tr>";
        foreach ($returnArray as $result) {
            echo "<tr>";
            foreach ($result as $key => $subresult) {

                if ($key == "idMedewerker") {
                    $id = $subresult;
                } else {
                    echo "<td>";
                    echo $subresult;
                    echo "</td>";
                }
            }
            echo "<td><a href='/beheerderspaneel/verwijder/medewerker/" . $id . "'>Klik hier om te verwijderen</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "	</div>";
    }
    ?>
</div><!-- /col-lg-12 -->