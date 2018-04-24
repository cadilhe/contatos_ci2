<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller 
{ 

    /*
    public function verificar_sessao() 
    {
        if($this->session->userdata('logado') == false)
        {
            redirect('dashboard/login');
        }
    }*/ 
    

    public function index($indice=null) 
    { 
        //$this->verificar_sessao();
        // CARREGA OS DADOS DA TABELA 'contato' E ARMAZENA NO ARRAY $dados['contatos'] 
        $this->db->select('*'); 
        $dados['contatos'] = $this->db->get('contato')->result(); 


        $this->load->view('includes/html_header'); 
        $this->load->view('includes/menu'); 



        //  VERIFICATIONS E MENSAGENS 
        if($indice==1)
        { 
            $data['msg'] = "contato cadastrado com sucesso."; 
            $this->load->view('includes/msg_sucesso',$data); 
        }

        else if($indice==2)
        { 
            $data['msg'] = "Não foi possível cadastrar o contato."; 
            $this->load->view('includes/msg_erro',$data); 
        }

        else if($indice==3)
        { 
            $data['msg'] = "contato excluído com sucesso."; 
            $this->load->view('includes/msg_sucesso',$data); 
        }

        else if($indice==4)
        { 
            $data['msg'] = "Não foi possível excluir o contato."; 
            $this->load->view('includes/msg_erro',$data); 
        }

        else if($indice==5)
        { 
            $data['msg'] = "contato atualizado com sucesso."; 
            $this->load->view('includes/msg_sucesso',$data); 
        }

        else if($indice==6)
        {
            $data['msg'] = "Não foi possível atualizar o contato."; 
            $this->load->view('includes/msg_erro',$data); 
        }

        $this->load->view('listar_contato', $dados); 
        $this->load->view('includes/html_footer'); 
    }

    // PÁGINA CADASTRAR
    public function cadastro() 
    { 
        //$this->verificar_sessao();
        
        $this->load->view('includes/html_header'); 
        $this->load->view('includes/menu'); 
        $this->load->view('cadastro_contato'); 
        $this->load->view('includes/html_footer'); 
    } 

    // MÉTODO CADASTRAR
    public function cadastrar()
    { 
                
        // $data['idContato'] = $this->input->post('')
        
        $data['nome'] = $this->input->post('nome');
        $data['sobrenome'] = $this->input->post('sobrenome');
        $data['email'] = $this->input->post('email');
        $data['rua'] = $this->input->post('rua');
        $data['numero'] = $this->input->post('numero');
        $data['cep'] = $this->input->post('cep');
        $data['bairro'] = $this->input->post('bairro');
        $data['cidade'] = $this->input->post('cidade');
        $data['estado'] = $this->input->post('estado');
        $data['pais'] = $this->input->post('pais');    
        $data['telefone1'] = $this->input->post('telefone1');
        $data['telefone2'] = $this->input->post('telefone2');
  

        if($this->db->insert('contato',$data))
        {
            redirect('contato/1'); 
        }         
        else {
            redirect('contato/2');
        }
    }


    // MÉTODO EXCLUIR
    public function excluir($id=null)
    { 
        //$this->verificar_sessao(); 
        
        $this->db->where('idContato',$id); 
        if($this->db->delete('contato'))
        { 
            redirect('contato/3'); 
        }
        else
        { 
            redirect('contato/4'); 
        } 
    }
    
    
    // MÉTODO ATUALIZAR
    public function atualizar($id=null,$indice=null)
    { 
        //$this->verificar_sessao(); 
        
        $this->db->where('idContato',$id); 
        $data['contato'] = $this->db->get('contato')->result(); 
        $this->load->view('includes/html_header'); 
        $this->load->view('includes/menu'); 

        if($indice==1)
        {
            $data['msg'] = "Senha atualizada com sucesso."; 
            $this->load->view('includes/msg_sucesso',$data); 
        }
        else if($indice==2)
        {
            $data['msg'] = "Não foi possível atualizar a senha do usuário."; 
            $this->load->view('includes/msg_erro',$data); 
        } 
        $this->load->view('editar_contato',$data); 
        $this->load->view('includes/html_footer'); 
    } 

    // MÉTODO SALVAR ATUALIZAÇÃO
    public function salvar_atualizacao()
    { 
        //$this->verificar_sessao(); 
        
        $id = $this->input->post('idContato'); 

        $data['nome'] = $this->input->post('nome');
        $data['sobrenome'] = $this->input->post('sobrenome');
        $data['email'] = $this->input->post('email');
        $data['rua'] = $this->input->post('rua');
        $data['numero'] = $this->input->post('numero');
        $data['cep'] = $this->input->post('cep');
        $data['bairro'] = $this->input->post('bairro');
        $data['cidade'] = $this->input->post('cidade');
        $data['estado'] = $this->input->post('estado');
        $data['pais'] = $this->input->post('pais');    
        $data['telefone1'] = $this->input->post('telefone1');
        $data['telefone2'] = $this->input->post('telefone2');
      

        $this->db->where('idContato',$id); 

        if($this->db->update('contato',$data))
        { 
            redirect('contato/5'); 
        }
        else
        { 
            redirect('contato/6'); 
        } 
    }
    
}