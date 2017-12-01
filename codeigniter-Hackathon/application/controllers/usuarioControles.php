<?php
defined('BASEPATH') or exit('No direct script access allowed');

class usuarioControles extends CI_Controller
{

    public function login()
    {
        $this->load->view('vistas/login');
    }


    public function register()
    {
        $instrumentos = $this->usuarioModelo->traerInstrumentos();
        $generos = $this->usuarioModelo->traerGenerosmusicales();
        $data['instrumentos'] = $instrumentos;
        $data['generos'] = $generos;

        $this->load->view('vistas/register', $data);
     
    }

    public function menu()
    {
        $instrumentos = $this->usuarioModelo->traerInstrumentos();
        $generos = $this->usuarioModelo->traerGenerosmusicales();
        $data['instrumentos'] = $instrumentos;
        $data['generos'] = $generos;
        $this->load->view('vistas/menu',$data);
    }

    public function ver($id)
    {
        
        $usuario = $this->usuarioModelo->verUsuario($id);
        //$instrumentos = $this->usuarioModelo->traerInstrumentosUsuario();
       // $generos = $this->usuarioModelo->traerGenerosUsuario();
        $data['usuario']=$usuario;
        //$data['instrumentos'] = $instrumentos;
        //$data['generos'] = $generos;
        $this->load->view('vistas/ver',$data);
    }

    
    
    public function guardarUsuario()
    {
        $fullname = $this->input->post('fullname');
        $direccion = $this->input->post('direccion');
        $instrumentos = $this->input->post('instrumentos');
        $generomusical = $this->input->post('generos');
        //$photo = $this->input->post('photo');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        /*print_r($this->input->post());
        die;*/
		$usuario = array(
            'fullname' => $fullname,
            'direccion' => $direccion,
            //'photo' => $photo,
            'email' => $email,
            'password' => $password
        );

        $r = $this->usuarioModelo->guardarUsuario($usuario);
        

        
        if ($r){
         foreach($instrumentos as $instrumento){
             /*$id = $instrumento;
             echo($instrumento);
             die;*/
            $usuarioinstrumento = array(
                'email' => $email,
                'instrumento' => $instrumento);
        $r1 = $this->usuarioModelo->guardarUsuarioinstrumentos($usuarioinstrumento);

            
         }
        }

         if ($r1){
             /*var_dump($generomusical);
             die;*/
            foreach($generomusical as $genero){
                /*$id = $instrumento;
                echo($genero);
                die;*/
                $usuariogenero = array(            
                    'email' => $email,
                    'genero' => $genero
                );
                $r2 = $this->usuarioModelo->guardarUsuariogenero($usuariogenero);
         }
         
           
        }
        
        
		// call the model to save
		
        
        if ($r & $r1 & $r2) {
            // $this->session->set_flashdata('message', 'User saved');
            redirect('login');
        } else {
            // $this->session->set_flashdata('message', 'There was an error saving the user');
            redirect('register');
        }
    }

            public function validacion() {
        
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $r = $this->usuarioModelo->validacion($email, $password);
                if (count($r) > 0 ) {
                    $usuario = $r[0];
                    redirect('menu');
                } else {
                    echo "Invalid usuario name or password";
                }
            }

            function traerUsuariosbusqueda(){
                $idgenero = $this->input->post('genero');
                $idinstrumento = $this->input->post('instrumento');
                /*var_dump($_POST);
                die;*/
                $r = $this->usuarioModelo->traerUsuariosbusqueda($idgenero, $idinstrumento);
                if (count($r) > 0 ) {
                    $usuario = $r[0];
                    /*var_dump($r);
                    die;*/
                    $data['r'] = $r;
                    $this->load->view('vistas/resultado',$data);
                } else {
                    redirect ('menu');
                }
            }
            
          
           

          

            /* public function listUsuarios() {
            $usuarios = $this->usuarioModelo->traerUsuarios();

             $data['usuarios'] = $usuarios;

           $this->load->view('vistas/busqueda', $data);
           }*/

           


}
