<?php
$create = new create;

if (isset($_POST['submit']) && $_POST['submit'] == 'submit')
{
    $bedrijfsID = $_POST['Bedrijf'];
    var_dump($create->bedrijfsMedewerker($bedrijfsID));
    if ($create->bedrijfsMedewerker($bedrijfsID) == True)
    {
        echo'<div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Succes!</strong> De bedrijfs medewerker is aangemaakt.</div>';
        ?><p>U word terug gestuurd naar de bedrijfs pagina in <span id="counter">5</span> seconden.</p>
        <script type="text/javascript">
            function countdown() {
                var i = document.getElementById('counter');
                if (parseInt(i.innerHTML) <= 1) {
                    location.href = '/beheerderspaneel/bedrijfsmedewerker/';
                }
                i.innerHTML = parseInt(i.innerHTML) - 1;
            }
            setInterval(function () {
                countdown();
            }, 1000);
        </script><?php
    }
} else
{
    echo "Probeer het opnieuw alstublieft.";
}