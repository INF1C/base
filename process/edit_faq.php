<?php
$edit = new edit;

if (isset($_POST['submit']) && $_POST['submit'] == 'submit') {
    $idFAQ = $_POST['idFAQ'];
    $result = $edit->FAQ($idFAQ);
    if ($result === TRUE) {
        echo'<div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Succes!</strong> De FAQ is aangepast.</div>';
        ?><p>U word terug gestuurd naar de FAQ pagina in <span id="counter">5</span> seconden.</p>
        <script type="text/javascript">
            function countdown() {
                var i = document.getElementById('counter');
                if (parseInt(i.innerHTML) <= 1) {
                    location.href = '/beheerderspaneel/faq/';
                }
                i.innerHTML = parseInt(i.innerHTML) - 1;
            }
            setInterval(function () {
                countdown();
            }, 1000);
        </script><?php
    } else {
        echo "<div class='alert alert-danger' role='alert'>Helaas, hier is iets mis gegaan. Probeer het later nog eens.<br>";
        echo $result . "</div>";
    }
} else {
    echo "Please post the next time!";
}