<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> 

    <div class="col-md-10"> 
        <h1 class="page-header">Contatos</h1> 
    </div> 

    <div class=" col-md-2"> 
        <a class = "btn btn-primary btn-block" href = "<?= base_url() ?>contato/cadastro">Novo Contato </a> 
    </div>

    <div class="col-md-12"> 
        <table class="table table-striped"> 
            <tr> 
                <th> ID</th> 
                <th> Nome</th> 
                <th> Email</th> 
                <th> Endereço:</th>                
                <th> Telefones</th> 
                <th> </th> 
                <th> </th> 
            </tr>
            
            <?php foreach($contatos as $cont){ ?> 
            <tr> 
                <td><?= $cont->idContato; ?></td> 
                <td><?= $cont->nome; ?>&nbsp;<?= $cont->sobrenome; ?></td> 
                <td><?= $cont->email; ?></td> 
                <td><?= $cont->rua; ?>,<?= $cont->numero; ?><br>                                        
                    <?= $cont->cidade; ?> - <?= $cont->estado; ?><br>
                    <strong><?= $cont->pais; ?></strong>
                </td>               
                <td>
                    <?= $cont->telefone1; ?><br>
                    <?= $cont->telefone2; ?>
                </td> 
                <td>
                    <a href="<?= base_url('contato/atualizar/' . $cont->idContato) ?>" class="btn btn-primary btn-group">Atualizar</a> 
                    <a href="<?= base_url('contato/excluir/' . $cont->idContato) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir o contato?');">Remover</a> 
                </td> 
            </tr> 
            <?php } ?> 

        </table> 
</div>
</div>

<!--
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
-->