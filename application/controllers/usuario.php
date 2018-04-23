<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller 
{ 
    public function index($indice=null) 
    { 
        // CARREGA OS DADOS DA TABELA 'usuario' E ARMAZENA NO ARRAY $dados['usuarios'] 
        $this->db->select('*'); 
        $dados['usuarios'] = $this->db->get('usuario')->result(); 
       

        $this->load->view('includes/html_header'); 
        $this->load->view('includes/menu'); 



        //  VERIFICATIONS E MENSAGENS 

        if($indice==1)
        { 
            $data['msg'] = "Usuario cadastrado com sucesso."; 
            $this->load->view('includes/msg_sucesso',$data); 
        }

        else if($indice==2)
        { 
            $data['msg'] = "Não foi possível cadastrar o usuário."; 
            $this->load->view('includes/msg_erro',$data); 
        }

        
        else if($indice==3)
        { 
            $data['msg'] = "Usuario excluído com sucesso."; 
            $this->load->view('includes/msg_sucesso',$data); 
        }

        else if($indice==4)
        { 
            $data['msg'] = "Não foi possível excluir o usuário."; 
            $this->load->view('includes/msg_erro',$data); 
        }
        
        /*

        else if($indice==5)
        { 
            $data['msg'] = "Usuario atualizado com sucesso."; 
            $this->load->view('includes/msg_sucesso',$data); 
        }

        else if($indice==6)
        {
            $data['msg'] = "Não foi possível atualizar o usuário."; 
            $this->load->view('includes/msg_erro',$data); 
        }
        */



        // SUGESTAO NO YOUTUBE        
        /*
        switch ($indice) {
            case 1:
                $data['msg'] = "Usuário cadastrado com sucesso.";
                $this->load->view('includes/msg_sucesso', $data);
                break;
            case 2:
                $data['msg'] = "Falha ao cadastrar usuário.";
                $this->load->view('includes/msg_erro', $data);
                break;

            case 3:
                $data['msg'] = "Usuário excluído com sucesso.";
                $this->load->view('includes/msg_sucesso', $data);
                break;
            case 4:
                $data['msg'] = "Falha ao excluir usuário.";
                $this->load->view('includes/msg_erro', $data);
                break;
            case 5:
                $data['msg'] = "Usuário atualizado com sucesso.";
                $this->load->view('includes/msg_sucesso', $data);
                break;
            case 6:
                $data['msg'] = "Falha ao atualizar usuário.";
                $this->load->view('includes/msg_erro', $data);
                break;
        } 
*/

        // FIM VERIFICATIOS E MENSAGENS

        $this->load->view('listar_usuario', $dados); 
        $this->load->view('includes/html_footer'); 
    }

    // PÁGINA CADASTRAR
    public function cadastro() 
    { 
        $this->load->view('includes/html_header'); 
        $this->load->view('includes/menu'); 
        $this->load->view('cadastro_usuario'); 
        $this->load->view('includes/html_footer'); 
    } 

    // MÉTODO CADASTRAR
    public function cadastrar()
    { 
        $data['nome'] = $this->input->post('nome'); 
        $data['cpf'] = $this->input->post('cpf'); 
        $data['nome'] = $this->input->post('nome'); 
        $data['endereco'] = $this->input->post('endereco'); 
        $data['email'] = $this->input->post('email'); 
        $data['senha'] = md5($this->input->post('senha')); 
        $data['status'] = $this->input->post('status'); 
        $data['nivel'] = $this->input->post('nivel'); 

        if($this->db->insert('usuario',$data))
        {
            redirect('usuario/1'); 
        }         
        else {
            redirect('usuario/2');
        }
    }


    

    public function excluir($id=null)
    { 
        $this->db->where('idUsuario',$id); 
        if($this->db->delete('usuario'))
        { 
            redirect('usuario/3'); 
        }
        else
        { 
            redirect('usuario/4'); 
        } 
    } 
    
    /*


    // PÁGINA ATUALIZAR
    public function atualizar($id=null,$indice=null)
    { 
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

    public function salvar_atualizacao(){ 
        $id = $this->input->post('idUsuario'); 
        $data['nome'] = $this->input->post('nome'); 
        $data['cpf'] = $this->input->post('cpf'); 
        $data['endereco'] = $this->input->post('endereco'); 
        $data['email'] = $this->input->post('email'); 
        $data['status'] = $this->input->post('status'); 
        $data['nivel'] = $this->input->post('nivel'); 
        $this->db->where('idUsuario',$id); 

        if($this->db->update('usuario',$data))
        { 
            redirect('usuario/5'); 
        }
        else
        { 
            redirect('usuario/6'); 
        } 
    } 

    public function salvar_senha()
    { 
        $id = $this->input->post('idUsuario'); 
        $senha_antiga = md5($this->input->post('senha_antiga')); 
        $senha_nova = md5($this->input->post('senha_nova')); 
        $this->db->select('senha'); 
        $this->db->where('idUsuario',$id); 
        $data['senha'] = $this->db->get('usuario')->result(); 
        $dados['senha'] = $senha_nova;

        if($data['senha'][0]->senha==$senha_antiga)
        { 
            $this->db->where('idUsuario',$id); 
            $this->db->update('usuario',$dados); 
            redirect('usuario/atualizar/'.$id.'/1'); 
        }
        else
        { 
            redirect('usuario/atualizar/'.$id.'/2'); 
        } 
    }
    */

}