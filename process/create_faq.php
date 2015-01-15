<?php

$create = new create;
if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	var_dump($create->faq());

        if($create->faq()== TRUE){
            echo"<div class='alert alert-success'></div>";
        }
        
} else {
	echo "Please post the next time!";
}