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

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */