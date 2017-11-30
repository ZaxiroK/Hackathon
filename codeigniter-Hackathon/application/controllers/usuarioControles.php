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
        $this->load->view('vistas/register');
    }

    public function menu()
    {
        $this->load->view('vistas/menu');
    }

    public function resultado()
    {
        $this->load->view('vistas/resultado');
    }
    
    public function guardarUsuario()
    {
        $fullname = $this->input->post('fullname');
        $direccion = $this->input->post('direccion');
        $instrumentos = $this->input->post('instrumentos');
        $generomusical = $this->input->post('generomusical');
        //$photo = $this->input->post('photo');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
		$usuario = array(
            'fullname' => $fullname,
            'direccion' => $direccion,
            'instrumentos' => $instrumentos,
            'generomusical' => $generomusical,
            //'photo' => $photo,
            'email' => $email,
            'password' => $password
        );
		// call the model to save
		$r = $this->usuarioModelo->guardarUsuario($usuario);

		// redirect
        if ($r) {
            // $this->session->set_flashdata('message', 'User saved');
            redirect('login');
        } else {
            // $this->session->set_flashdata('message', 'There was an error saving the user');
            redirect('vistas/register');
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

}
