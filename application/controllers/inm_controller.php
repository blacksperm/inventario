<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class inm_controller extends CI_Controller {


	public function __construct(){

		parent:: __construct();

		$this->load->model('inm_model');
		// $this->load->view("equid_view");
	}


	public function index(){
		
		$data = array(
			'title'      => 'inventarios || inmobiliario',
			'inm'        => $this->inm_model->get_inm(), 
			'categoria'  => $this->inm_model->get_categoria(),
			'modelo'      => $this->inm_model->get_modelo(),
			'estado'      => $this->inm_model->get_estado());


		$this->load->view('template/header',$data);
		$this->load->view('inm_view');
		$this->load->view('template/footer');
	}

	public function ingresar(){

		$datos['categoria']    = $_POST['categoria'];
		$datos['modelo']       = $_POST['modelo'];
		$datos['codigo']       = $_POST['codigo'];
		$datos['fecha']        = $_POST['fecha'];
		$datos['estado']       = $_POST['estado'];
		$datos['descripcion']  = $_POST['descripcion'];

		$result = $this->inm_model->set_inm($datos);
		if ($result == "success") {
			$data = array(	
				'title'      => 'inventarios || inmobiliario',
				'inm'        => $this->inm_model->get_inm(), 
				'categoria'  => $this->inm_model->get_categoria(),
				'modelo'      => $this->inm_model->get_modelo(),
				'estado'      => $this->inm_model->get_estado(),

				'msj'     => "success");

			$this->load->view('template/header',$data);
			$this->load->view('inm_view');
			$this->load->view('template/footer');

		}


	}

	public function eliminar($id){

		$this->inm_model->eliminar($id);

		redirect('/inm_controller/index','refresh');
	}

	public function cart($id){

		$result=$this->inm_model->dañado($id);

		if($result=="success"){

			$data = array(
				'title'      => 'inventarios || equipo dañado',
				'estado'        => $this->inm_model->get2($id),
				'inm'        => $this->inm_model->get1($id)); 
				

			$this->load->view('template/header',$data);
			$this->load->view("equida_view");
			$this->load->view('template/footer');	
		}

		

	}
	public function cart1($id){

		$result=$this->inm_model->mante($id);

		if($result=="success"){

			$data = array(
				'title'      => 'inventarios || equipo dañado',
				'inm'        => $this->inm_model->get_inm(), 
				'estado'     => $this->inm_model->get_est($id));

			$this->load->view('template/header',$data);
			$this->load->view("mana_view");
			$this->load->view('template/footer');	
		}

		

	}

	public function get_datos($id){

		$data = array(
			'title'       => 'inventarios || inmobiliario',
			'datos'       => $this->inm_model->get($id), 
			'categoria'   => $this->inm_model->get_categoria(),
			'modelo'      => $this->inm_model->get_modelo(),
			'estado'      => $this->inm_model->get_estado());

		$this->load->view('template/header',$data);
		$this->load->view('inm_viewAct');
		$this->load->view('template/footer');
	}

	public function actualizar(){

		$datos['id'] 		   = $_POST['id'];	
		$datos['categoria']    = $_POST['categoria'];
		$datos['modelo']       = $_POST['modelo'];
		$datos['codigo']       = $_POST['codigo'];
		$datos['fecha']        = $_POST['fecha'];
		$datos['estado']       = $_POST['estado'];
		$datos['descripcion']  = $_POST['descripcion'];


		$result = $this->inm_model->actualizar($datos);
		if ($result == "success") {
			$data = array(
				'title'      => 'inventarios || inmobiliario',
				'inm'        => $this->inm_model->get_inm(), 
				'categoria'  => $this->inm_model->get_categoria(),
				'modelo'      => $this->inm_model->get_modelo(),
				'estado'      => $this->inm_model->get_estado(),
				'msj'     => "modi");
		}else{
			$data = array(
				'title'      => 'inventarios || inmobiliario',
				'inm'        => $this->inm_model->get_inm(), 
				'categoria'  => $this->inm_model->get_categoria(),
				'modelo'      => $this->inm_model->get_modelo(),
				'estado'      => $this->inm_model->get_estado(),

				'msj'     => "ErrorM");

		}

		$this->load->view('template/header',$data);
		$this->load->view('inm_view');
		$this->load->view('template/footer');


	}
}

?>