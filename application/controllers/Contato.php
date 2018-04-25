<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller{ 

    public function verificar_sessao(){
        if($this->session->userdata('logado') == false){
            redirect('dashboard/login');
        }
    }

    public function index($indice=null){ 
        $this->verificar_sessao();

        // CARREGA OS DADOS DA TABELA 'contato' E ARMAZENA NO ARRAY $dados['contatos'] 
        $this->db->select('*'); 
        $dados['contatos'] = $this->db->get('contato')->result(); 

        $this->load->view('includes/html_header'); 
        $this->load->view('includes/menu'); 

//  VERIFICATIONS E MENSAGENS
        if($indice==1){ 
            $data['msg'] = "Contato cadastrado com sucesso."; 
            $this->load->view('includes/msg_sucesso',$data); 
        }

        else if($indice==2){ 
            $data['msg'] = "Não foi possível cadastrar o contato."; 
            $this->load->view('includes/msg_erro',$data); 
        }

        else if($indice==3){ 
            $data['msg'] = "Contato excluído com sucesso."; 
            $this->load->view('includes/msg_sucesso',$data); 
        }

        else if($indice==4){ 
            $data['msg'] = "Não foi possível excluir o contato."; 
            $this->load->view('includes/msg_erro',$data); 
        }

        else if($indice==5){ 
            $data['msg'] = "Contato atualizado com sucesso."; 
            $this->load->view('includes/msg_sucesso',$data); 
        }

        else if($indice==6){
            $data['msg'] = "Não foi possível atualizar o contato."; 
            $this->load->view('includes/msg_erro',$data); 
        }

        $this->load->view('listar_contato', $dados); 
        $this->load->view('includes/html_footer'); 
    }

// PÁGINA CADASTRAR
    public function cadastro(){ 
        $this->verificar_sessao();

        $this->load->view('includes/html_header'); 
        $this->load->view('includes/menu'); 
        $this->load->view('cadastro_contato'); 
        $this->load->view('includes/html_footer'); 
    } 

    // MÉTODO CADASTRAR
    public function cadastrar() {        
        $this->verificar_sessao(); 
        $this->load->model('Contato_model', 'contato');

        if($this->contato->cadastrar()) {
            redirect('contato/1'); 
        }else {
            redirect('contato/2');
        }
    }

// MÉTODO EXCLUIR
    public function excluir($id){ 
        $this->verificar_sessao(); 
        $this->load->model('Contato_model', 'contato');

        if($this->contato->excluir($id)) { 
            redirect('contato/3'); 
        }else{ 
            redirect('contato/4'); 
        } 
    }

    // MÉTODO SALVAR ATUALIZAÇÃO
    public function salvar_atualizacao(){         
        $this->verificar_sessao();
        $this->load->model('Contato_model', 'contato');

        if($this->contato->salvar_atualizacao()){ 
            redirect('contato/5'); 
        }else { 
            redirect('contato/6'); 
        } 
    } 
    
    // MÉTODO ATUALIZAR
    public function atualizar($id=null,$indice=null) { 
        $this->verificar_sessao(); 

        $this->db->where('idContato',$id); 
        $data['contato'] = $this->db->get('contato')->result(); 

        $this->load->view('includes/html_header'); 
        $this->load->view('includes/menu'); 

        if($indice==1){
            $data['msg'] = "Senha atualizada com sucesso."; 
            $this->load->view('includes/msg_sucesso',$data); 
        } else if($indice==2) {
            $data['msg'] = "Não foi possível atualizar a senha do usuário."; 
            $this->load->view('includes/msg_erro',$data); 
        } 
        $this->load->view('editar_contato',$data); 
        $this->load->view('includes/html_footer'); 
    }
    
    // MÉTODO PESQUISAR
    public function pesquisar(){
        $this->load->model('Contato_model', 'contato');
        $dados['contatos'] = $this->contato->get_contatos_like();
        
        $this->load->view('includes/html_header'); 
        $this->load->view('includes/menu'); 
        
        $this->load->view('listar_contato', $dados); 
        $this->load->view('includes/html_footer'); 
    }
}