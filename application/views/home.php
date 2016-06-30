<!--HEADER-->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand hidden-sm hidden-xs" href="<?php echo base_url() . 'welcome' ?>">Guilherme Brasile</a>
      <a class="navbar-brand hidden-md hidden-lg" href="<?php echo base_url() . 'welcome' ?>">GB</a>
      <button class="navbar-toggle hidden-md hidden-lg" data-toggle="collapse" data-target=".navbar-collapse-response">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
       <a href="<?php echo base_url() . 'login' ?>">
       <button class="btn btn-default navbar-btn pull-right hidden-sm hidden-xs">Área Restrita</button></a>
      </ul>
     </ul>
   </div><!--/.nav-collapse -->
   <div class="navbar-collapse-response collapse pull-right col-xs-12 hidden-md hidden-lg">
        <ul class="nav">
          <li><a href="<?php echo base_url() . 'welcome' ?>">Home</a></li>
          <li><a href="<?php echo base_url() . 'sobre' ?>">Sobre</a></li>
          <li><a href="<?php echo base_url() . 'trabalho' ?>">Trabalho</a></li>
          <li><a href="<?php echo base_url() . 'formacao' ?>">Formação</a></li>
          <li><a href="<?php echo base_url() . 'contato' ?>">Contato</a></li>
          <li><a href="<?php echo base_url() . 'login' ?>">Login</a></li>
        </ul>
      </div>
 </div>
</nav>
<!--HEADER-->
     

<!--CONTENT-->
<div class="content-desktop hidden-sm hidden-xs">
  <div class="row">

      <a href="<?php echo base_url() . 'sobre' ?>">
        <div class="col-md-6 esq">
          <div align="center" class="panel panel-default panel-home">
            <div class="panel-body">
              <img width="350" height="350" src="<?php echo base_url() . 'assets/img/icons/avatar.png' ?>">
              <h2>SOBRE</h2>
            </div>
          </div>
        </div>
      </a>

      <a href="<?php echo base_url() . 'formacao' ?>">
        <div class="col-md-6 dir">
          <div align="center" class="panel panel-default panel-home">
            <div class="panel-body">
              <img width="350" height="350" src="<?php echo base_url() . 'assets/img/icons/graduate-cap.png' ?>">
              <h2>FORMAÇÃO</h2>
            </div>
          </div>
        </div>
      </a>
    
  </div>

  <div class="row">

      <a href="<?php echo base_url() . 'trabalho' ?>">
        <div class="col-md-6 esq">
          <div align="center" class="panel panel-default panel-home">
            <div class="panel-body">
              <img width="350" height="350" src="<?php echo base_url() . 'assets/img/icons/coding.png' ?>">
              <h2>TRABALHO</h2>
            </div>
          </div>
        </div>
      </a>

      <a href="<?php echo base_url() . 'contato' ?>">
        <div class="col-md-6 dir">
          <div align="center" class="panel panel-default panel-home">
            <div class="panel-body">
              <img width="350" height="350" src="<?php echo base_url() . 'assets/img/icons/contact.png' ?>">
              <h2>CONTATO</h2>
            </div>
          </div>
        </div>
      </a>
    
    </div>
</div>
<!--CONTENT-->

<!--CONTENT MOBILE-->
<div class="content-mobile hidden-md hidden-lg">
  <div class="row">
    <a href="<?php echo base_url() . 'sobre' ?>">
      <div class="col-lg-5">
        <div align="center"  class="panel panel-default panel-home">
          <div class="panel-body">
            <img width="180" height="180" src="<?php echo base_url() . 'assets/img/icons/avatar.png' ?>">
            <h2>SOBRE</h2>
          </div>
        </div>
      </div>
    </a>
    <a href="<?php echo base_url() . 'formacao' ?>">
      <div class="col-lg-5">
        <div align="center" class="panel panel-default panel-home">
          <div class="panel-body">
            <img width="180" height="180" src="<?php echo base_url() . 'assets/img/icons/graduate-cap.png' ?>">
            <h2>FORMAÇÃO</h2>
          </div>
        </div>
      </div>
    </a>
    
    </div>

    <div class="row">

    <a href="<?php echo base_url() . 'trabalho' ?>">
      <div class="col-lg-5">
        <div align="center" class="panel panel-default panel-home">
          <div class="panel-body">
            <img width="180" height="180" src="<?php echo base_url() . 'assets/img/icons/coding.png' ?>">
            <h2>TRABALHO</h2>
          </div>
        </div>
      </div>
      </a>

    <a href="<?php echo base_url() . 'contato' ?>">
      <div class="col-lg-5">
        <div align="center" class="panel panel-default panel-home">
          <div class="panel-body">
            <img width="180" height="180" src="<?php echo base_url() . 'assets/img/icons/contact.png' ?>">
            <h2>CONTATO</h2>
          </div>
        </div>
      </div>
      </a>
    
    </div>
</div>
<!--CONTENT-->


<!--modal de LOGIN-->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Área Restrita</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
   			<input type="text" class="form-control" placeholder="Usuário">
 		</div>
 		<div class="form-group">
   			<input type="password" class="form-control" placeholder="Senha">
 		</div>
      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        <button type="button" class="btn btn-primary">Entrar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<!--modal de LOGIN-->

