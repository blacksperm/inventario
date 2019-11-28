
<script src="<?php echo base_url('props/validaciones/vin.js') ?>"></script>
<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<?php $this->load->view('navbar'); ?>

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<?php $this->load->view('navbar2'); ?>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->

					<!-- Modal -->
					<table>   
						<!-- Button trigger modal -->
						<div class="row">             
							<div class="card-body d-flex justify-content-between align-items-center">
								<h1>inmibiliario</h1>
								<button type="button" class="btn btn-primary btn-sm justify-content-right" data-toggle="modal" data-target="#exampleModal"><i class='fa fa-th-list'></i>
									Nuevo inmibiliario
								</button>
							</div>    
						</div>


						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h3 class="modal-title" id="exampleModalLabel">Nuevo Modelo</h3>

									</div>
									<div class="modal-body">
										<form action="<?php echo base_url().'inm_controller/ingresar' ?>" method="POST" class="mx-auto" onsubmit="return vin()">
											<div class="row">
												<div class="col">
													<div class="input-group">
														<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>categoria</span>
														<select  name="categoria" id="categoria" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
															<option value="">-- Seleccione una categoria		 --</option>
															<?php foreach ($categoria as $c) { ?>
																<option value="<?= $c->id_categoria ?>"><?= $c->categoria ?></option>
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
																<option value="<?= $m->id_modelo ?>"><?= $m->modelo ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<div class="col">
													<div class="input-group">
														<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>codigo</span>
														<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="codigo" id="codigo">
													</div>
												</div>



											</div>

											<div class="row my-3">

												<div class="col">
													<div class="input-group">
														<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>fecha de ingreso</span>
														<input type="date" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="fecha" id="fecha">
													</div>
												</div>

												<div class="col">
													<div class="input-group">
														<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>estado</span>
														<select name="estado" id="estado" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
															<option value="">-- Seleccione una estado		 --</option>
															<?php foreach ($estado as $e) { ?>
																<option value="<?= $e->id_estado ?>"><?= $e->estado ?></option>
															<?php } ?>
														</select>
													</div>

												</div>
												<div class="col">
													<div class="input-group">
														<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>descripcion</span>
														<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="descripcion" id="descripcion">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col">
													<input type="submit" value="Guardar" class="btn btn-primary">
												</div>
												<div class="col">
													<a href="<?= base_url("/inm_controller/index")  ?>"><button type="button" class="btn btn-primary btn-sm" ></button></a>
												</div>
											</div>
											<div class="row">
												<div class="col text-right">
													<input type="submit" value="Guardar" class="btn btn-primary">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<br>
					</table>
					<!-- End Modal -->
					<br>

					<!-- DataTales Example -->
					<div class="row">             
						<div class="card-body d-flex justify-content-between align-items-center">
							<h1 style="font-family: 'Montserrat', cursive; color: #46281e;" class="">LISTADO DE inmobiliario!</h1>
						</div>    
					</div>

					<table class="table table-striped table-dark table-hover">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">categoria</th>
								<th scope="col">modelo</th>
								<th scope="col">marca</th>
								<th scope="col">codigo</th>
								<th scope="col">estado</th>
								<th scope="col">fecha</th>
								<th scope="col">Descripcion</th>
								<th scope="col">Eliminar</th>
								<th scope="col">Editar</th>
							</tr>
						</thead>
						<?php if (count($inm)>0) {?>
							<tbody>
								<?php 
								$n = 1;

								foreach ($inm as $i){ ?>
									<tr> 
										<td><?= $n; $n++; ?></td>
										<td><?= $i->categoria ?></td>
										<td><?= $i->modelo ?></td>
										<td><?= $i->marca ?></td>
										<td><?= $i->codigo ?></td>
										<td><?= $i->estado ?></td>
										<td><?= $i->fecha_ingreso ?></td>
										<td><?= $i->descripcion ?></td>
									
										<td><div class="btn-group" role="group" aria-label="Button group with nested dropdown">
															<div class="btn-group" role="group">
																<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	Opciones
																</button>
																<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
																	<a class="dropdown-item" href="<?php echo base_url().'inm_controller/get_datos/'.$i->id_inmobiliario; ?>">Modificar</a>
																	<button type="button" class="dropdown-item" onclick="alerta_eliminar(<?= $i->id_inmobiliario; ?>)">Eliminar</button>
																	<button type="button" class="dropdown-item" onclick="confirmar(<?= $i->id_inmobiliario; ?>)">dañado</button>
																	<button type="button" class="dropdown-item" onclick="confirmar1(<?= $i->id_inmobiliario; ?>)">mantenimiento</button>


																</div>
															</div>
														</div></td>







									</tr>
								<?php } ?>
								<?php  	
							}else{
								echo "<p class='alert alert-danger'>No hay Modelos</p>";
							}


							?>
						</tbody>
					</table>

					<?php if (isset($mensaje)){ echo $mensaje; } ?>
				</div>
				<?php $this->load->view('utils/alertsinm') ?>
			</div>
		</div>

	</div>
	<!-- /.container-fluid -->
</div>

