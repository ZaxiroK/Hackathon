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
  
      return $query->result_object();
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

    function traerUsuariosbusqueda($idgenero, $idinstrumento)
    {
      $sql= "SELECT m.id, m.fullname, m.email, m.direccion from usuario m, usuarioinstrumentos ai, 
      usuariogenero am where m.email = am.email and am.genero = $idgenero
      AND
      m.email = ai.email and ai.instrumento = $idinstrumento
  
      group by m.id";
      $res =$this->db->query($sql);

      return $res->result();
    }

    function verUsuario($idusuario)
    {
        $sql= "SELECT * FROM `usuario` WHERE usuario.id = $idusuario";
        $res =$this->db->query($sql);
        /*echo($res);
         die;*/

	  return $res->result();
    }

    
   

}
