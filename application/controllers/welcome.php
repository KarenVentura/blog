<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('blog_model');
	}


	public function index()
	{
		$this->load->view('bienvenida');
	}

	public function capturar_datos()
	{
		$this->load->view('capturar_datos');
	}

	public function login()
	{
		$nombre = $this->input->post('usuario');
        $contraseña = $this->input->post('password');
        $res = $this->blog_model->valida_usuario($nombre,$contraseña);

        $this->load->view('menu');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */