<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class blog_model extends CI_Model
{

    function __construct(){
      parent::__construct();
    }

/**********************************************************/
    /*Consulta si el usuario existe/ inicio de sesion */
/**********************************************************/
    function valida_usuario($nombre,$contraseña)
    {
      $this->db->where('nombre',$nombre);
      $this->db->where('password',$contraseña);
      $query = $this->db->get('usuario');

       return $query->result_array();
    }
/**********************************************************/
        /*Inserta nuevo post/ Crea nuevo post*/
/**********************************************************/
   
    function inserta_new_post($titulo,$contenido,$id)
    {
      $this->db->set('fkid_usuario',$id);
      $this->db->set('titulo',$titulo);
      $this->db->set('contenido',$contenido);
      $this->db->insert('post');
    }
/**********************************************************/
        /*Consulta todos los posts*/
/**********************************************************/

    function consulta_post()
    {
      $this->db->select('id_post');
      $this->db->select('titulo');
      $this->db->from('post');
      $query = $this->db->get();

      return $query->result_array();
    }

    function selecciona_post($id_post)
    {
      $this->db->select('titulo');
      $this->db->select('contenido');
      $this->db->where('id_post',$id_post);
      $this->db->from('post');
      $query = $this->db->get();

      return $query->result_array();
    }
/**********************************************************/
        /*editando Post*/
/**********************************************************/

    function editando_post($id_post,$titulo,$contenido)
    {
      $this->db->set('titulo',$titulo);
      $this->db->set('contenido', $contenido);
      $this->db->where('id_post',$id_post);
      $this->db->update('Post'); 
    }
/**********************************************************/
        /*Elimina Post*/
/**********************************************************/

    function eliminando_post($id_post)
    {
      $this->db->where('id_post', $id_post);
	  $this->db->delete('post'); 
    }
}
