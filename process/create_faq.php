<?php

$create = new create;
if (isset($_POST['submit']) && $_POST['submit'] == 'submit')
{
    if ($create->faq() == TRUE)
    {
        echo'<div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Succes!</strong> Het ticket is ingevoerd in de FAQ.</div>';
    }
} else
{
    echo "Please post the next time!";
}