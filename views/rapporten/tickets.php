<div class="col-lg-12">
	<div class="form-panel">
		<h4 class="mb"><i class="fa fa-angle-right"></i> Selecteer periode</h4>
		<form class="form" method="POST" action="" role="form">
			<div class="form-group">
				<label>Start:</label>
	    		<div class="input-append date form_datetime" id="start" data-date-format="yyyy-mm-dd hh:mm:ss">
	    			<input class="form-control" name="start" type="text" placeholder="YYYY-MM-DD HH:MM:SS">
	    			<span class="add-on"><i class="icon-th"></i></span>
	    		</div>
    		</div>
			<div class="form-group">
				<label>Stop:</label>
	    		<div class="input-append date form_datetime" id="stop" data-date-format="yyyy-mm-dd hh:mm:ss">
	    			<input class="form-control" name="stop" type="text" placeholder="YYYY-MM-DD HH:MM:SS">
	    			<span class="add-on"><i class="icon-th"></i></span>
	    		</div>
    		</div>
			<button type="submit" class="btn btn-theme">Zoek</button>
		</form>
	</div><!-- /form-panel -->
	<?php

	$output = new output;
	$result = $output->tickets();

	?>
	<div class="content-panel">
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
			    echo "<tr>";
			    foreach ($value as $subvalue)
			    {
			        echo "<td>" . $subvalue . "</td>";
			    }
			    echo "</tr>";
			}
			?>
		</table>
	</div>
</div>