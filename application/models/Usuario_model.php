<?php

class Usuario_model extends CI_Model {

    function __construct(){
        parent:: __construct();
    }

    public function cadastrar() { 
        // $this->verificar_sessao();

        $data['nome'] = $this->input->post('nome'); 
        $data['sobrenome'] = $this->input->post('sobrenome'); 
        $data['email'] = $this->input->post('email'); 
        $data['senha'] = md5($this->input->post('senha')); 

        return $this->db->insert('usuario',$data);        
    }

    public function excluir($id = null){ 
        // $this->verificar_sessao();

        $this->db->where('idUsuario', $id);        
        return $this->db->delete('usuario');
    }

    public function salvar_atualizacao() { 
        // $this->verificar_sessao(); 

        $id = $this->input->post('idUsuario'); 

        $data['nome'] = $this->input->post('nome');  
        $data['sobrenome'] = $this->input->post('sobrenome'); 
        $data['email'] = $this->input->post('email'); 

        $this->db->where('idUsuario',$id); 
        return $this->db->update('usuario',$data);
    } 


    public function salvar_senha() { 
        // $this->verificar_sessao(); 

        $id = $this->input->post('idUsuario'); 
        $senha_antiga = md5($this->input->post('senha_antiga')); 
        $senha_nova = md5($this->input->post('senha_nova')); 

        $this->db->select('senha'); 
        $this->db->where('idUsuario',$id); 
        $data['senha'] = $this->db->get('usuario')->result(); 
        $dados['senha'] = $senha_nova;

        if($data['senha'][0]->senha==$senha_antiga) { 
            $this->db->where('idUsuario',$id); 
            $this->db->update('usuario',$dados); 
            return true;
        }else {
            return false;
        }
    }

    function get_usuarios(){
        $this->db->select('*');
        return $this->db->get('usuario')->result();
    }

    function get_usuarios_like (){
        $termo = $this->input->post('pesquisar');
        $this->db->select('*');
        $this->db->like('nome',$termo);
        return $this->db->get('usuario')->result();
    }

}