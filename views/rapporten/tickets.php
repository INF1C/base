<div class="col-lg-12">
	<div class="form-panel">
		<h4 class="mb"><i class="fa fa-angle-right"></i> Selecteer periode</h4>
		<form class="form-inline" method="POST" action="" role="form">
			<div class="form-group">
				<div class='input-group date' id='start'>
					<input type='text' name="start" class="form-control" data-date-format="YYYY-MM-DD HH:II:SS"/>
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div>
			</div>
			<div class="form-group">
				<div class='input-group date' id='stop'>
					<input type='text' name="stop" class="form-control" data-date-format="YYYY-MM-DD HH:II:SS"/>
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div>
			</div>
			<button type="submit" class="btn btn-theme">Zoek</button>
		</form>
		<script type="text/javascript">
			$(function () {
				$('#start').datetimepicker({
					pickTime: true
				});
				$('#stop').datetimepicker({
					pickTime: true
				});
			});
		</script>
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