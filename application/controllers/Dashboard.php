<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    
public function verificar_sessao() 
{
    if($this->session->userdata('logado') == false)
    {
        redirect('dashboard/login');
    }
}    
    
   public function index() 
   {		        
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
         $this->load->view('dashboard');
         $this->load->view('includes/html_footer');
        
	}
    
    
    public function login() 
   {		        
         $this->load->view('includes/html_header');
         $this->load->view('login');
         $this->load->view('includes/html_footer');
        
	}
    
    public function logar()
    {
    
        $email = $this->input->post('email');
        $senha = md5($this->input->post('senha'));
        
        $this->db->where('email',$email);
        $this->db->where('senha',$senha);
        
        $data['usuario'] = $this->db->get('usuario')->result();
        
        if(count($data['usuario']) == 1)
        {
            $dados['nome'] = $data['usuario'][0]->nome;
            $dados['id'] = $data['usuario'][0]->idUsuario;
            $dados['logado'] = true;
            $this->session->set_userdata($dados);
            redirect('dashboard');
        } 
        else
        {
          redirect('dashboard/login');   
        }
        
    }
    
    public function logout()
    {
       $this->session->sess_destroy();
        redirect('dashboard');
    }
    
    public function exercicios(){
        
        $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
         $this->load->view('exercicios');
         $this->load->view('includes/html_footer');
    }

}




