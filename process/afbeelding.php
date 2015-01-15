<?php
if (isset($_POST['avatar-image']) && $_POST['avatar-image'] == '') {
	echo "Delete file";
} elseif ($_FILES['avatar-image']['error'] == 0)  {
	$target_dir = "base/upload/";
	$fileName = explode(".", basename($_FILES["avatar-image"]["name"]));
	$newFileName = $_SESSION['gebruikersnaam'] . "." . end($fileName);
	$target_file = $target_dir . $newFileName;
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["avatar-image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

	// Check file size
	if ($_FILES["avatar-image"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	$fileTypes = array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG', 'GIF');
	if(!in_array($imageFileType, $fileTypes)) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["avatar-image"]["tmp_name"], $target_file)) {
	    	$db = new db;
	    	$db->db_table = "MEDEWERKER";
	    	$db->update(array('Afbeelding' => "/" . $target_file), array('gebruikersnaam' => $_SESSION['gebruikersnaam']));
	        echo "The file ". $newFileName. " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}
}