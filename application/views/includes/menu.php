<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">PRI01 - Exercício  Agenda Telefonica</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?= base_url() ?>dashboard">Dashboard</a></li>
                <li><a href="<?= base_url() ?>dashboard/exercicios">Exercício</a></li>
                <li><a href="<?= base_url() ?>dashboard/logout">Logout</a></li>                
            </ul>
            <!--
<form class="navbar-form navbar-right">
<input type="text" class="form-control" placeholder="Pesquisar...">
</form>
-->
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="<?= base_url() ?>">Tela Inicial</a></li>                        
                <li><a href="<?= base_url() ?>usuario">Listar usuários</a></li>
                <li><a href="<?= base_url() ?>usuario/cadastro">Cadastrar usários</a></li>
                <li><hr></li>
                <li><a href="<?= base_url() ?>contato">Listar Contatos</a></li>
                <li><a href="<?= base_url() ?>contato/cadastro">Cadastrar contatos</a></li>


            </ul>            
        </div>
    </div>
</div>