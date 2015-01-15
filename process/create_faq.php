<?php
$create = new create;
if (isset($_POST['submit']) && $_POST['submit'] == 'submit')
{
    if ($create->faq() == TRUE)
    {
        echo'<div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Succes!</strong> Het ticket is ingevoerd in de FAQ.</div>';
        <script type="text/javascript">
        function countdown() {
        var i = document.getElementById('counter');
        if (parseInt(i.innerHTML)<=0) {
        location.href = 'index.php';
    }
    i.innerHTML = parseInt(i . innerHTML) - 1;
}
setInterval(function()
{
    countdown();
}, 1000);
</script>
}
} else
{
echo "Probeer het opnieuw alstublieft.";
}