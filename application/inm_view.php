<script src="<?php echo base_url('props/bootstrap/js/vin.js');?>"></script>
<body id="page-top">
	
	<div class="container">
		<?= "Bienvenido: ".$this->session->userdata('nombre') ?>
		<a href="<?php echo base_url().'inm_controller/cerrar';?>"><button class="btn btn-primary btn-sm"><i>Cerrar sesion</i></button></a>
		
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
							<!-- The Modal -->
							<div class="row">             
								<div class="card-body d-flex justify-content-between align-items-center">
									<h1>inmobiliario</h1>
									<button type="button" class="btn btn-primary btn-sm justify-content-right" data-toggle="modal" data-target="#exampleModal"><i class='fa fa-th-list'></i>
										Nuevo inmobiiario
									</button>
								</div>    
							</div>


							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h3 class="modal-title" id="exampleModalLabel">Nuevo inmobiiario</h3>

										</div>

										<!-- Modal body -->
										<div class="modal-body">
											<form action="<?php echo base_url().'inm_controller/ingresar' ?>" method="POST" class="mx-auto" onsubmit="return vin()">
												<div class="row">
													<div class="col">
														<div class="input-group">
															<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>categoria</span>
															<select name="categoria" id="categoria" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
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
														<a href="<?= base_url("/mod_controller/index")  ?>"><button type="button" class="btn btn-primary btn-sm" >nueva modelo</button></a>
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
						</div>
						<br>

						<!-- Modal footer -->
						<!-- <div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div> -->

					</div>
				</div>
			</div>



			<br><br>

			<div class="row">             
				<div class="card-body d-flex justify-content-between align-items-center">
					<h1 style="font-family: 'Montserrat', cursive; color: #46281e;" class="">LISTADO DE inmobiliario!</h1>
					<button type="button" class="btn btn-primary btn-sm justify-content-right" data-toggle="modal" data-target="#nuevo_alumno">
						Nuevo inmobiliario
					</button>
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

							<td><button type="button" class="btn btn-danger" onclick="alerta_eliminar(<?= $i->id_inmobiliario; ?>)"><a style="color: white;">Eliminar</a></button></td>
							<td class="text-center"><a href="<?php echo base_url().'inm_controller/get_datos/'.$i->id_inmobiliario; ?>"><button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>

			<?php if (isset($mensaje)){ echo $mensaje; } ?>
		</div>


		<?php $this->load->view('utils/alertsinm') ?>