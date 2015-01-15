<?php
$output = new output;
if(isset($_POST['start']) && isset($_POST['stop'])){
	$start = filter_input(INPUT_POST, 'start');
	$stop = filter_input(INPUT_POST, 'stop');

	$result = $output->tickets(NULL, array('start' => $start, 'stop' => $stop));
} else {
	$result = $output->tickets();
	$start = ""; $stop = "";
}
?>

<div class="col-lg-12 showback">
	<h4 class="mb"><i class="fa fa-angle-right"></i> Selecteer periode</h4>
	<form class="form-inline" method="POST" action="" role="form">
		<div class="form-group">
			<label>Start:</label>
    		<div class="input-append date form_datetime" id="start" data-date-format="yyyy-mm-dd hh:mm:ss">
    			<input class="form-control" name="start" type="text"  value="<?= $start ?>" readonly placeholder="YYYY-MM-DD HH:MM:SS">
    			<span class="add-on"><i class="icon-th"></i></span>
    		</div>
   		</div>
		<div class="form-group">
			<label>Stop:</label>
    		<div class="input-append date form_datetime" id="stop" data-date-format="yyyy-mm-dd hh:mm:ss">
    			<input class="form-control" name="stop" type="text" value="<?= $stop ?>" readonly placeholder="YYYY-MM-DD HH:MM:SS">
    			<span class="add-on"><i class="icon-th"></i></span>
    		</div>
   		</div>
   		<br/><br/>
		<button type="submit" class="btn btn-theme">Zoek</button>
	</form>
</div><!-- /form-panel -->
<div class="col-lg-12 showback">
<h2>Tickets</h2>
	<table class="table table-hover">
		<tr>
			<th> Incident Type </th>
			<th> Probleemstelling </th>
			<th> Huidige Status </th>
			<th> Geopend op </th>
			<th> Bedrijf </th>
		</tr>
		<?php
		foreach ($result as $key => $value) {
		    ?><tr onclick="window.document.location='/ticket/<?= $key ?>'"><?php
		    foreach ($value as $subvalue)
		    {
		        echo "<td>" . $subvalue . "</td>";
		    }
		    echo "</tr>";
		}
		?>
	</table>
</div>