<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    <div class="col-md-12">
        <h1 class="page-header">Novo Contato</h1>
    </div>

    <div class="col-md-12">

        <form action="<?= base_url() ?>contato/cadastrar" method="post">

            <div class="row">
                <div class="col-md-6">
                    <label for="nome">Nome:</label> <input class="form-control" id="nome" name="nome" placeholder="Informe o nome..." required="" type="text" /> 
                </div>

                <div class="col-md-6">
                    <label for="sobrenome">Sobrenome:</label> <input class="form-control" id="sobrenome" name="sobrenome" placeholder="Informe o sobrenome..." required="" type="text" /> 
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="email">E-mail:</label> <input class="form-control" id="email" name="email" placeholder="Informe o e-mail..." required="" type="email" /> 
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="rua">Rua:</label> <input class="form-control" id="rua" name="rua" placeholder="Informe a rua..." required="" type="text" /> 
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="numero">Número:</label> <input class="form-control" id="numero" name="numero" placeholder="Informe o número..." required="" type="text" /> 
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="bairro">Bairro:</label> <input class="form-control" id="bairro" name="bairro" placeholder="Informe o bairro..." required="" type="text" /> 
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="cidade">Cidade:</label> <input class="form-control" id="cidade" name="cidade" placeholder="Informe a cidade..." required="" type="text" /> 
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="estado">Estado:</label> <input class="form-control" id="estado" name="estado" placeholder="Informe o estado..." required="" type="text" /> 
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="pais">Pais:</label> <input class="form-control" id="pais" name="pais" placeholder="Informe o pais..." required="" type="text" /> 
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="cep">CEP:</label> <input class="form-control" id="cep" name="cep" placeholder="Informe o cep..." required="" type="text" /> 
                    </div>
                </div>            
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="telefone1">Telefone 1:</label> <input class="form-control" id="telefone1" name="telefone1" placeholder="Informe o telefone..." type="text" /> 
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="telefone2">Telefone 2:</label> <input class="form-control" id="telefone2" name="telefone2" placeholder="Informe o telefone..." type="text" /> 
                    </div>
                </div>
                
<!--                
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="telefone3">Telefone 3:</label> <input class="form-control" id="telefone3" name="telefone3" placeholder="Informe o pais..."  type="text" /> 
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="cep">Telefone 4:</label> <input class="form-control" id="cep" name="telefone4" placeholder="Informe o cep..." type="text" /> 
                    </div>
                </div>  
-->
            </div>

<!--    
<div class="col-md-2">
<label for="nivel">Nível: </label> <select class="form-control" id="nivel" name="nivel" required=""> <option value="0"> --- </option> <option value="1"> Administrador </option> <option value="2"> Usuário </option> </select> </div>
</div>



<div class="col-md-2">
<label for="status">Status: </label> <select class="form-control" id="status" name="status" required=""> <option value="0"> --- </option> <option value="1"> Ativo </option> <option value="2"> Inativo </option> </select> </div>
</div>
-->

            <div style="text-align: left;">
                <button class="btn btn-success" type="submit">Enviar</button> 
                <button class="btn btn-default" type="reset">Cancelar</button> 
            </div>
        </form>

    </div>
</div>