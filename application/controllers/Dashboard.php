<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    /**
    É sempre conveniente criar um construror para cada Controller. Apos este contrutor, pode-se chamar os helpers, libraries, e demais elementos necessários para o Controller
    **/
    
public function verificar_sessao() 
{
    if($this->session->user_date('logado') == false)
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
        $this->db->where('status',1);
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
}




