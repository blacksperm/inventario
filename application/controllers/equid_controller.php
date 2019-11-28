<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class equid_controller extends CI_Controller {


	public function __construct(){

		parent:: __construct();

		$this->load->model('equid_model');
	}


	public function index(){
		
		$data = array(
			'title'      => 'inventarios || equipo dañado',
			'equid'        => $this->equid_model->get_equid(), 
			'cat'  		 => $this->equid_model->get_categoria(),
			'inm' 		 => $this->equid_model->get_inm(),
			'estado'      => $this->equid_model->get_estado());


		$this->load->view('template/header',$data);
		$this->load->view('equid_view');
		$this->load->view('template/footer');
	}

	public function ingresar(){

	echo	$datos['inmobiliario'] = $_POST['inmobiliario'];
	echo	$datos['estado']       = $_POST['estado'];
	echo    $datos['fecha']        = $_POST['fecha'];
	echo	$datos['descripcion']  = $_POST['descripcion'];

		$result = $this->equid_model->set_equip($datos);
		if ($result == "success") {
			$data = array(
				'title'      => 'inventarios || equipo dañado',
				'equid'        => $this->equid_model->get_equid(),
				'cat'  		 => $this->equid_model->get_categoria(),
				'inm' 		 => $this->equid_model->get_inm(),
				'estado'      => $this->equid_model->get_estado(),

				'msj'     => "success");

			$this->load->view('template/header',$data);
			$this->load->view('equid_view');
			$this->load->view('template/footer');

		}


	}

	public function eliminar($id){

		$this->equid_model->eliminar($id);

		redirect('/equid_controller/index','refresh');
	}

	public function get_datos($id){
		
		$data = array(
			'title'      => 'inventarios || equipo dañado',
			'equid'        => $this->equid_model->get($id),
			'cat'  		 => $this->equid_model->get_categoria(),
			'inm' 		 => $this->equid_model->get_inm(),
			'estado'      => $this->equid_model->get_estado());

		$this->load->view('template/header',$data);
		$this->load->view('equid_viewAct');
		$this->load->view('template/footer');
	}

	public function actualizar(){
		
		$datos['id']   	 = $_POST['id'];
		$datos['inmobiliario']    = $_POST['inmobiliario'];
	    $datos['fecha']        = $_POST['fecha'];
		$datos['estado']       = $_POST['estado'];
		$datos['descripcion']  = $_POST['descripcion'];


		
		$result = $this->equid_model->actualizar($datos);
		if ($result == "success") {
			$data = array(
				'title'      => 'inventarios || equipo dañado',
				'equid'        => $this->equid_model->get_equid(),
				'cat'  		 => $this->equid_model->get_categoria(),
				'inm' 		 => $this->equid_model->get_inm(),
				'estado'      => $this->equid_model->get_estado(),
				'msj'     => "modi");
		}else{
			$data = array(
				'title'      => 'inventarios || equipo dañado',
				'equid'        => $this->equid_model->get_equid(),
				'cat'  		 => $this->equid_model->get_categoria(),
				'inm' 		 => $this->equid_model->get_inm(),
				'estado'      => $this->equid_model->get_estado(),
			'msj'     => "ErrorM");

}

$this->load->view('template/header',$data);
$this->load->view('equid_view');
$this->load->view('template/footer');


}
}

?>