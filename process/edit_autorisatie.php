<?php
$db = new db;
if (isset($_POST['submit']) && $_POST['submit'] == 'submit') {
    $db->db_table = "ACCOUNT";
    $data = array('Autorisatie' => filter_input(INPUT_POST, 'Autorisatie'));
    $where = array('Gebruikersnaam' => filter_input(INPUT_POST, 'Gebruikersnaam'));
    if ($db->update($data, $where) == TRUE) {

        echo'<div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Succes!</strong> De autorisatie is aangepast.</div>';
        ?><p>U word terug gestuurd naar de autorisatie pagina in <span id="counter">5</span> seconden.</p>
        <script type="text/javascript">
            function countdown() {
                var i = document.getElementById('counter');
                if (parseInt(i.innerHTML) <= 1) {
                    location.href = '/instellingen/autorisatie/';
                }
                i.innerHTML = parseInt(i.innerHTML) - 1;
            }
            setInterval(function () {
                countdown();
            }, 1000);
        </script><?php
    } else {
        echo "Helaas, hier is iets mis gegaan. Probeer het later nog eens.";
    }
} else {
    echo "Please post the next time!";
}

