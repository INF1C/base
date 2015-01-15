<div class="col-lg-10 showback">
	<form action="/process/afbeelding/" method="POST" enctype="multipart/form-data">
		<div class="fileinput fileinput-new" data-provides="fileinput">
			<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
				<img src="https://cdn2.iconfinder.com/data/icons/danger-problems/512/anonymous-512.png" />
			</div>
			<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
				<!--<img src="/images/example.png">-->
			</div> 
			<div>
				<span class="btn btn-default btn-file">
					<span class="fileinput-new" data-trigger="fileinput">Selecteer afbeelding</span>
					<span class="fileinput-exists" data-trigger="fileinput">Verander</span>
					<input type="file" name="avatar-image" />
				</span>
				<a href="#" class="btn fileinput-exists" data-dismiss="fileinput">Verwijder</a>
			</div>
			<div class="input-group">
				<button type="submit" class="btn btn-default" name="submit" value="submit">Verstuur</button>
			</div>
		</div>
	</form>
</div>