<?php

$edit = new edit;

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	$idBedrijfsMedewerker = $_POST['idBedrijfsMedewerker'];
	if($edit->bedrijfsMedewerker($idBedrijfsMedewerker) == TRUE){
	
	echo'<div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Succes!</strong> De bedrijfsmedewerker is aangepast.</div>';
        ?><p>U word terug gestuurd naar de bedrijfsmedewerker pagina in <span id="counter">5</span> seconden.</p>
        <script type="text/javascript">
        function countdown() {
        var i = document.getElementById('counter');
        if (parseInt(i.innerHTML)<=1) {
        location.href = '/beheerderspaneel/bedrijfsmedewerker/';
    }
    i.innerHTML = parseInt(i . innerHTML) - 1;
}
setInterval(function(){countdown();}, 1000);
</script><?php

	
	
	
	}
} else {
	echo "Please post the next time!";
}