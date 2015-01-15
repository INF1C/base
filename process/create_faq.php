<?php

$create = new create;
if (isset($_POST['submit']) && $_POST['submit'] == 'submit')
{
    if ($create->faq() == TRUE)
    {
        echo'<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Success!</strong> Your message has been sent successfully.
</div>';
    }
} else
{
    echo "Please post the next time!";
}