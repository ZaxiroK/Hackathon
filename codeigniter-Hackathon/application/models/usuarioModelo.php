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

     function validacion($email, $pass) {
		//$pass = md5($pass);
    $query = $this->db->get_where('usuario',
      array('email' => $email, 'password' => $pass));

	  return $query->result_object();
    }
   

    }
