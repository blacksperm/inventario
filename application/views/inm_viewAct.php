<script src="<?php echo base_url('props/validaciones/vin.js');?>"></script>
<body> 
<div class="container">
	<?php foreach ($datos as $d){ ?>
		<form action="<?php echo base_url().'inm_controller/actualizar' ?>" method="POST" class="mx-auto" onsubmit="return vin()">
			<input type="hidden" name="id" value="<?= $d->id_inmobiliario ?>">
							<div class="row">
								<div class="col">
									<div class="input-group">
										<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>categoria</span>
										<select name="categoria" id="categoria" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
											<option value="">-- Seleccione una categoria		 --</option>
											<?php foreach ($categoria as $c) { ?>
												<option value="<?= $c->id_categoria ?>"<?php if ($c->id_categoria==$d->id_categoria) {echo "selected";
												} ?>><?= $c->categoria ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="input-group">
										<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>modelo</span>
										<select name="modelo" id="modelo" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
											<option value="">-- Seleccione una modelo --</option>
											<?php foreach ($modelo as $m) { ?>
												<option value="<?= $m->id_modelo ?>"<?php if ($m->id_modelo==$d->id_modelo) {echo "selected";
												} ?>><?= $m->modelo ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="input-group">
										<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>codigo</span>
										<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="codigo" id="codigo" value="<?= $d->codigo ?>">
									</div>
								</div>



							</div>

							<div class="row my-3">

								<div class="col">
									<div class="input-group">
										<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>fecha de ingreso</span>
										<input type="date" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="fecha" id="fecha" value="<?= $d->fecha_ingreso ?>">
									</div>
								</div>

								<div class="col">
									<div class="input-group">
										<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>estado</span>
										<select name="estado" id="estado" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
											<option value="">-- Seleccione una estado		 --</option>
											<?php foreach ($estado as $e) { ?>
												<option value="<?= $e->id_estado ?>"<?php if ($e->id_estado==$d->id_estado ) {echo "selected";
												} ?>><?= $e->estado ?></option>
											<?php } ?>
										</select>
									</div>

								</div>
								<div class="col">
									<div class="input-group">
										<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>descripcion</span>
										<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="descripcion" id="descripcion" value="<?= $d->descripcion ?>">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col">
									<input type="submit" value="Guardar" class="btn btn-primary">
								</div>
								
							</div>
						</form>
	<?php } ?>
</div>