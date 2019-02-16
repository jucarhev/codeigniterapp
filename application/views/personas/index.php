<div class="container">
	
	<div class="row">
		<div class="col-md-8">
			<form action="#" method="POST">
				<div class="form-group">
					<input type="text" name="buscar" id="buscar" class="form-control">
				</div>
			</form>
		</div>
		<div class="col-md-4">
			<a href="<?php echo base_url(); ?>personas/new" class="btn btn-primary">Nuevo</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Telefono</th>
						<th>Edad</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($personas->result() as $row) { ?>
					<tr>
						<td><?php echo $row->id; ?></td>
						<td><?php echo $row->nombre; ?></td>
						<td><?php echo $row->email; ?></td>
						<td><?php echo $row->telefono; ?></td>
						<td><?php echo $row->edad; ?></td>
						<td>
							<a href="<?php echo base_url(); ?>personas/show/<?php echo $row->id; ?>" class="btn btn-success">Mostrar</a>
							<a href="<?php echo base_url(); ?>personas/editar/<?php echo $row->id; ?>" class="btn btn-info">Editar</a>
							<a href="<?php echo base_url(); ?>personas/delete?id=<?php echo $row->id; ?>" class="btn btn-danger">Eliminar</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>