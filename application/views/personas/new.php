<div class="container">
	<form action="<?php echo base_url(); ?>personas/save" method="POST">
		<div class="form-group">
			<label for="Nombre">Nombre:</label>
			<input type="text" class="form-control" name="nombre">
		</div>
		<div class="form-group">
			<label for="Apellidos">Apellidos:</label>
			<input type="text" class="form-control" name="apellidos">
		</div>
		<div class="form-group">
			<label for="EMail">EMail:</label>
			<input type="text" class="form-control" name="email">
		</div>
		<div class="form-group">
			<label for="Telefono">Telefono:</label>
			<input type="text" class="form-control" name="telefono">
		</div>
		<div class="form-group">
			<label for="Edad">Edad:</label>
			<input type="text" class="form-control" name="edad">
		</div>
		<input type="submit" class="btn btn-primary" value="Guardar">
	</form>
</div>