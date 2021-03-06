<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    <div class="col-md-12">
        <h1 class="page-header">Atualizar Usuário</h1>
    </div>

    <div class="col-md-12">
        <form action="<?= base_url() ?>usuario/salvar_atualizacao" method="post">

            <input id="idUsuario" name="idUsuario" type="hidden" value="<?= $usuario[0]->idUsuario; ?>" /> <br />
            
            <div class="row">            
            <div class="col-md-6">
                    <label for="nome">Nome:</label> <input class="form-control" id="nome" name="nome" placeholder="Informe o nome..." required="" type="text" value="<?= $usuario[0]->nome; ?>" /> 
                </div>

                <div class="col-md-6">
                    <label for="sobrenome">Sobrenome:</label> <input class="form-control" id="sobrenome" name="sobrenome" placeholder="Informe o sobrenome..." required="" type="text" value="<?= $usuario[0]->sobrenome; ?>" /> 
                </div>                           
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email:</label> <input class="form-control" id="email" name="email" placeholder="Informe o email..." required="" type="email" value="<?= $usuario[0]->email; ?>" /> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="senha">Senha: </label><input type="button" class=" btn btn-default btn-block" value="Atualizar Senha"  data-toggle="modal" data-target="#myModal" > 
                    </div>
                </div>
               
            </div>

            <div style="text-align: right;">
                <button class="btn btn-success" type="submit">Enviar</button> 
                <button class="btn btn-default" type="reset">Cancelar</button> 
            </div>

        </form>
    </div>
</div>

<!-- MODAL -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
    <div class="modal-dialog">
        <form action="<?= base_url() ?>usuario/salvar_senha" method="post">
            <input id="idUsuario" name="idUsuario" type="hidden" value="<?= $usuario[0]->idUsuario; ?>" /> <br />
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button> <br />
                    <h4 class="modal-title" id="myModalLabel">Atualizar Senha</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="senha_antiga">Senha antiga:</label> <input class="form-control" id="senha_antiga" name="senha_antiga" type="password" />
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="senha_nova">Nova Senha:</label> <input class="form-control" id="senha_nova" name="senha_nova" onkeyup="checarSenha()" type="password" /> 
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="senha_confirmar">Confirmar Senha:</label> <input class="form-control" id="senha_confirmar" name="senha_confirmar" onkeyup="checarSenha()" type="password" /> 
                        </div>
                        <div class="col-md-12 form-group">
                            <div id="divcheck">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" type="button">Fechar</button> 
                    <button class="btn btn-primary" disabled="" id="enviarsenha" type="submit">Salvar</button> 
                </div>
            </div>
        </form>
    </div>
</div>



<!-- JAVASCRIPT -->
<script> 
    $(document).ready(function() { 
        $("#senha_nova").keyup(checkPasswordMatch); 
        $("#senha_confirmar").keyup(checkPasswordMatch); 
    }); 
    function checarSenha() { 
        var password = $("#senha_nova").val(); 
        var confirmPassword = $("#senha_confirmar").val(); 
        
        if (password == '' || '' == confirmPassword) { 
            $("#divcheck").html("<span style='color: red'>Campo de senha vazio!</span>"); 
            document.getElementById("enviarsenha").disabled = true; 
        } else if (password != confirmPassword) { 
            $("#divcheck").html("<span style='color: red'>Senhas não conferem!</span>"); 
            document.getElementById("enviarsenha").disabled = true; 
        } else { 
            $("#divcheck").html("<span style='color: green'>Senha iguais!</span>"); 
            document.getElementById("enviarsenha").disabled = false; 
        } 
    }
</script>