<?php

class usuarioModelo extends CI_Model {


     public function  __construct(){


         parent::__construct();

     }

     function guardarUsuario($usuario)
    {
           //$user['password'] = md5($user['password']);
       $r = $this->db->insert('usuario', $usuario);
       return $r;
    }
    
    function guardarUsuarioinstrumentos($usuarioinstrumento)
    {
           //$user['password'] = md5($user['password']);
       $r1 = $this->db->insert('usuarioinstrumentos', $usuarioinstrumento);
       return $r1;
    }

    
    function guardarUsuariogenero($usuariogenero)
    {
           //$user['password'] = md5($user['password']);
       $r2 = $this->db->insert('usuariogenero', $usuariogenero);
       return $r2;
    }

     function validacion($email, $pass) {
		//$pass = md5($pass);
    $query = $this->db->get_where('usuario',
      array('email' => $email, 'password' => $pass));

	  return $query->result_object();
    }

    function traerInstrumentos()
    {
      $query = $this->db->get('instrumentos');
  
      return $query->result();
    }

    function traerGenerosmusicales()
    {
      $query = $this->db->get('generosmusicales');
  
      return $query->result();
    }
    function traerUsuarios()
    {
      $query = $this->db->get('usuarios');
  
      return $query->result_object();
    }
   

}
