<?php

class Contato_model extends CI_Model {

    function __construct(){

        parent:: __construct();
    }

    public function cadastrar() { 
        // $this->verificar_sessao();

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

        return $this->db->insert('contato',$data);        
    }


    public function excluir($id=null){ 
        // $this->verificar_sessao();

        $this->db->where('idContato',$id);        
        return $this->db->delete('contato');
    }


    public function salvar_atualizacao() { 
        // $this->verificar_sessao(); 

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
        return $this->db->update('contato',$data);
    }


    function get_contatos(){
        $this->db->select('*');
        return $this->db->get('contato')->result();
    }


    function get_contatos_like (){

        $termo = $this->input->post('pesquisar');
        $this->db->select('*');
        $this->db->like('nome',$termo);
        return $this->db->get('contato')->result();
    }



}