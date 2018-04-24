<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{ 

    public function verificar_sessao(){
        if($this->session->userdata('logado') == false){
            redirect('dashboard/login');
        }
    }

    public function index($indice=null){ 
        $this->verificar_sessao();
        // CARREGA OS DADOS DA TABELA 'usuario' E ARMAZENA NO ARRAY $dados['usuarios'] 
        $this->db->select('*'); 
        $dados['usuarios'] = $this->db->get('usuario')->result(); 

        $this->load->view('includes/html_header'); 
        $this->load->view('includes/menu'); 


//  VERIFICATIONS E MENSAGENS
        if($indice==1){ 
            $data['msg'] = "Usuario cadastrado com sucesso."; 
            $this->load->view('includes/msg_sucesso',$data); 
        }

        else if($indice==2){ 
            $data['msg'] = "Não foi possível cadastrar o usuário."; 
            $this->load->view('includes/msg_erro',$data); 
        }

        else if($indice==3){ 
            $data['msg'] = "Usuario excluído com sucesso."; 
            $this->load->view('includes/msg_sucesso',$data); 
        }

        else if($indice==4)
        { 
            $data['msg'] = "Não foi possível excluir o usuário."; 
            $this->load->view('includes/msg_erro',$data); 
        }

        else if($indice==5){ 
            $data['msg'] = "Usuario atualizado com sucesso."; 
            $this->load->view('includes/msg_sucesso',$data); 
        }

        else if($indice==6){
            $data['msg'] = "Não foi possível atualizar o usuário."; 
            $this->load->view('includes/msg_erro',$data); 
        }

        $this->load->view('listar_usuario', $dados); 
        $this->load->view('includes/html_footer'); 
    }

// PÁGINA CADASTRAR
    public function cadastro(){ 
        $this->verificar_sessao();

        $this->load->view('includes/html_header'); 
        $this->load->view('includes/menu'); 
        $this->load->view('cadastro_usuario'); 
        $this->load->view('includes/html_footer'); 
    } 

// MÉTODO CADASTRAR
    public function cadastrar() {        
        $this->verificar_sessao(); 
        $this->load->model('Usuario_model', 'usuario');

        if($this->usuario->cadastrar()) {
            redirect('usuario/1'); 
        }else {
            redirect('usuario/2');
        }
    }

// MÉTODO EXCLUIR
    public function excluir($id=null){ 
        $this->verificar_sessao(); 
        $this->load->model('Usuario_model', 'usuario');

        if($this->usuario->excluir()) { 
            redirect('usuario/3'); 
        } else{ 
            redirect('usuario/4'); 
        } 
    }

// MÉTODO SALVAR ATUALIZAÇÃO
    public function salvar_atualizacao(){         
        $this->verificar_sessao();
        $this->load->model('Usuario_model', 'usuario');

        if($this->usuario->salvar_atualizacao()){ 
            redirect('usuario/5'); 
        }else { 
            redirect('usuario/6'); 
        } 
    } 

// MÉTODO SALVAR SENHA
    public function salvar_senha() { 
        $this->verificar_sessao();

        $this->load->model('Usuario_model', 'usuario');
        $id = $this->input->post('idUsuario'); 

        if($this->usuario->salvar_senha()){
            redirect('usuario/atualizar/'.$id.'/1');   
        }else {
            redirect('usuario/atualizar/'.$id.'/2'); 
        }
    }
    
// MÉTODO ATUALIZAR
    public function atualizar($id=null,$indice=null) { 
        $this->verificar_sessao(); 

        $this->db->where('idUsuario',$id); 
        $data['usuario'] = $this->db->get('usuario')->result(); 

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
        $this->load->view('editar_usuario',$data); 
        $this->load->view('includes/html_footer'); 
    } 
}