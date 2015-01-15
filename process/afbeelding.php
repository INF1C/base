<?php
if (isset($_POST['avatar-image']) && $_POST['avatar-image'] == '') {
	$error[] = "Er is iets fout gegaan tijdens het uploaden. Probeer het later nog een keer.";
} elseif ($_FILES['avatar-image']['error'] == 0)  {
	$target_dir = "/var/www/clients/client1/web5/web/base/upload/";
	$fileName = explode(".", basename($_FILES["avatar-image"]["name"]));
	$newFileName = $_SESSION['gebruikersnaam'] . "." . end($fileName);
	$target_file = $target_dir . $newFileName;
	$save_file = "/base/upload/" . $newFileName;
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["avatar-image"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $error[] = "Dit is geen afbeelding.";
        $uploadOk = 0;
    }

	// Check file size
	if ($_FILES["avatar-image"]["size"] > 500000) {
	    $error[] = "De afbeelding die u probeert te uploaden is te groot.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	$fileTypes = array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG', 'GIF');
	if(!in_array($imageFileType, $fileTypes)) {
	    $error[] = "Alleen afbeeldingen met bestandstype JPG, JPEG, PNG & GIF mogen worden geupload.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    $error[] = "Het uploaden is niet gelukt.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["avatar-image"]["tmp_name"], $target_file)) {
	    	$db = new db;
	    	$db->db_table = "MEDEWERKER";
	    	$db->update(array('Afbeelding' => $save_file), array('gebruikersnaam' => $_SESSION['gebruikersnaam']));
                    
	    } else {
	        $error[] = "Er is een probleem opgetreden tijdens het uploaden van de afbeelding.";
	    }
	}
}

if(isset($error)){
	?>
	<div class="alert alert-danger">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<strong>Error!</strong>
	<?php
	foreach ($error as $value) {
		echo "<p>" . $value . "</p>";
	}
	echo "</div>";
} else {
?>
<div class="alert alert-success">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<strong>Succes!</strong> De afbeelding met <?= $newFileName ?> is geupload.
	<p>U wordt terug gestuurd naar de pagina waar u vandaan kwam in <span id="counter">5</span> seconden.</p>
	<script type="text/javascript">
		function countdown() {
			var i = document.getElementById('counter');
			if (parseInt(i.innerHTML)<=1) {
				location.href = '/instellingen/afbeelding/';
			}
			i.innerHTML = parseInt(i . innerHTML) - 1;
		}
		setInterval(function(){countdown();}, 1000);
	</script>
</div>
<?php
}