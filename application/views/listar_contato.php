<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> 

    <div class="col-md-10"> 
        <h1 class="page-header">Contatos</h1> 
    </div> 

    <div class=" col-md-2"> 
        <a class = "btn btn-primary btn-block" href = "<?= base_url() ?>contato/cadastro">Novo Contato </a> 
    </div>
    
    
    <div class = "col-md-12" style="padding-bottom:10px">
    <form action ="<?= base_url() ?>contato/pesquisar" method="post" >
        <div class = "col-md-10">
                <input type="text" class="form-control" name = "pesquisar" placeholder="Pesquisar por..." required="" />
        </div>
        <div class = "col-md-2">            
            <button class="btn btn-success btn-block" type="submit">Pesquisar</button>
        </div>
            

    </form>
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

