<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1>login</h1>
			<form action="<?php echo base_url() ?>home/login" method="POST" role="form">
				<legend>Form title</legend>
			
				<div class="form-group">
					<label for="">Email</label>
					<input type="text" class="form-control" id="" placeholder="Input field" name="email">
				</div>

				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control" id="" placeholder="Input field" name="password">
				</div>
			
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>