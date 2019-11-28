<script src="<?php echo base_url('props/bootstrap/js/vin.js');?>"></script>
<body>
	<?php foreach ($equid as $v)  {  ?>
		<form action="<?php echo base_url().'equid_controller/actualizar' ?>" method="POST" class="mx-auto" onsubmit="return vequi()">
			<input type="hidden" name="id" value="<?=$v->id_danado ?>">
							<div class="row">
								<div class="col">
									<div class="input-group">
										<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>categoria</span>
										<select name="inmobiliario" id="categoria" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
											<option value="">-- Seleccione una inmobiliario--</option>
											<?php foreach ($inm as $c) { ?>
												<option value="<?= $c->id_inmobiliario ?>"<?php if ($c->id_inmobiliario==$v->id_inmobiliario) {echo "selected";
												} ?>><?= $c->categoria ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col">
									
									<div class="input-group">
										<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>estado</span>
										<select name="estado" id="estado" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
											<option value="">-- Seleccione una estado --</option>
											<?php foreach ($estado as $e) { ?>
												<option value="<?= $e->id_estado ?>"<?php if ($e->id_estado==$v->id_estado) {echo "selected";
												} ?>><?= $e->estado ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
							</div>

							<div class="row my-3">

								<div class="col">
									<div class="input-group">
										<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>fecha de ingreso</span>
										<input value="<?=$v->fecha_ingreso ?>" type="text" value="<?php echo date("m/d/Y"); ?>"  class="form-control" aria-label="Small" readonly aria-describedby="inputGroup-sizing-sm" name="fecha" id="fecha"  >
									</div>
								</div>


								<div class="col">
									<div class="input-group">
										<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>descripcion</span>
										<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="descripcion" id="descripcion" value="<?= $v->descripcion ?>">
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


</body>