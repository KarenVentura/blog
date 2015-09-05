<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('blog_model');
    }

/**********************************************************/
            /*Index*/
/**********************************************************/
    public function index()
    {
      $consulta = $this->blog_model->consulta_post(); 
      $consulta = array('lista_posts' => $consulta );
      $this->load->view('bienvenida',$consulta);
    }

/**********************************************************/
            /*Funciones para el inicio de sesión*/
/**********************************************************/
    public function capturar_datos()
    {
      $this->load->view('capturar_datos');
    }

    public function login()
    {
      $nombre = $this->input->post('usuario');
      $contraseña = $this->input->post('password');
      $res = $this->blog_model->valida_usuario($nombre,$contraseña);
          
        if(!empty( $res))
        {
          $datos = array('id_usuario' => $res[0]['id_usuario']);
          $idUsuario = $datos['id_usuario'];
		  $this->session->set_userdata($datos);

          $this->load->view('menu');
        }else{
          $this->index();
        }
    }
/**********************************************************/
            /*Funciones para crear un nuevo Post*/
/**********************************************************/

    public function agrega_post()
    {
      $this->load->view('agrega_post');
    }

    public function creando_post()
    {
      $titulo = $this->input->post('titulo_post');
      $contenido = $this->input->post('contenido_post');
      $id = $this->session->userdata('id_usuario');
      $this->blog_model->inserta_new_post($titulo,$contenido,$id);      
    
      $msj='El Post Se Ha Creado Correctamente';
	  $msj=array('msj'=>$msj);
	  $this->load->view('menu',$msj);
    }

/**********************************************************/
            /*Funcion para eliminar post*/
/**********************************************************/
    public function edita_post()
    {
      $consulta = $this->blog_model->consulta_post(); 
      $consulta = array('lista_posts' => $consulta );
      $this->load->view('edita_post',$consulta);
    }

    public function actualizar_post()
    {
      $id_post = $this->input->get('id_post');
      $id_post= array('id_post'=>$id_post);
      $this->load->view('actualizar_post',$id_post);
    }

    public function editando_post()
    {
      $id_post = $this->input->post('actualiza');
      $titulo = $this->input->post('titulo_post');
      $contenido = $this->input->post('contenido_post');
      $this->blog_model->editando_post($id_post,$titulo,$contenido);
      $msj='El Post Se Ha Actualizado Correctamente';
	  $msj=array('msj'=>$msj);
	  $this->load->view('menu',$msj);
    }

/**********************************************************/
            /*Funcion para eliminar post*/
/**********************************************************/
    public function elimina_post()
    { 
      $consulta = $this->blog_model->consulta_post(); 
      $consulta = array('lista_posts' => $consulta );
      $this->load->view('elimina_post',$consulta);
    }

    public function eliminando_post()
    {
      $id_post = $this->input->get('id_post');
      $this->blog_model->eliminando_post($id_post);
      $msj='El Post Se Ha Eliminado Correctamente';
	  $msj=array('msj'=>$msj);
	  $this->load->view('menu',$msj);
    }
/**********************************************************/
            /*Funcion para leer post*/
/**********************************************************/

    public function leer_post()
    {
      $id_post = $this->input->get('id_post');
      $post = $this->blog_model->selecciona_post($id_post);
      $post = array('post_seleccionado' => $post);

      $this->load->view('leer_post',$post);
    }
/**********************************************************/
            /*Destruye sesion*/
/**********************************************************/
   public function destruye_sesion()
   {
   	$this->session->sess_destroy();
	$this->index();
   }
}
