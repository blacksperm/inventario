
<script src="<?php echo base_url('props/validaciones/vm.js') ?>"></script>
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
				<!-- 		<div class="row">             
							<div class="card-body d-flex justify-content-between align-items-center">
								<h1>EQUIPO DAÑADO</h1>
								<button type="button" class="btn btn-primary btn-sm justify-content-right" data-toggle="modal" data-target="#exampleModal"><i class='fa fa-th-list'></i>
									EQUIPO DAÑADO
								</button>
							</div>    
						</div>


						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h3 class="modal-title" id="exampleModalLabel">EQUIPO DAÑADO</h3>

									</div>
									<div class="modal-body"> -->
										<form action="<?php echo base_url().'equid_controller/ingresar' ?>" method="POST" class="mx-auto" onsubmit="return vequi()">
											<div class="row">
												<div class="col">
													<div class="input-group">
														<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>categoria</span>
														<select  name="inmobiliario" id="codigo" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
															
															<?php foreach ($inm as $c) { ?>
																<option  value="<?= $c->id_inmobiliario ?>"<?php if ($c->id_inmobiliario==$c->id_inmobiliario) {echo "selected";
																} ?>><?= $c->codigo ?></option>
															<?php } ?>
														</select>
													</div>
												</div>
												<div class="col">
													<div class="input-group">
														<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>estado</span>
														<select  name="estado" id="estado" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
															<?php foreach ($estado as $e) { ?>
																<option  value="<?= $e->id_estado ?>"<?php if ($e->id_inmobiliario==$e->id_inmobiliario) {echo "selected";
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
														<input type="text" value="<?php echo date("Y/m/d"); ?>"  class="form-control" aria-label="Small" readonly aria-describedby="inputGroup-sizing-sm" name="fecha" id="fecha">
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
											</div>
										</form>

<!-- 
									</div>
								</div>
							</div>
						</div>
						<br> -->
					</table>
					<!-- End Modal -->
					<br>

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<!-- <div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Modelos</h6>
						</div> -->
						<div class="card-body">
							<div class="table-responsive">

								<?php if (isset($mensaje)){ echo $mensaje; } ?>
							</div>
							<?php $this->load->view('utils/alertsequida') ?>
						</div>
					</div>

				</div>
				<!-- /.container-fluid -->
			</div>

