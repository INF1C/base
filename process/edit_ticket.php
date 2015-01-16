<?php
$edit = new edit;
var_dump($_POST);
if (isset($_POST['submit']) && $_POST['submit'] == 'submit') {
    $idTicket = $_POST['idTicket'];
    if ($edit->ticket($idTicket) == TRUE) {

        echo '<div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Succes!</strong> De ticket is aangepast.</div>';
        ?><p>U word terug gestuurd naar de ticket pagina in <span id="counter">5</span> seconden.</p>
        <script type="text/javascript">
            function countdown() {
                var i = document.getElementById('counter');
                if (parseInt(i.innerHTML) <= 1) {
                    location.href = '/rapporten/tickets/';
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