<!--HEADER-->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand hidden-sm hidden-xs" href="<?php echo base_url() . 'admin' ?>">Administração</a>
      <a class="navbar-brand hidden-md hidden-lg" href="<?php echo base_url() . 'admin' ?>">ADM</a>
       <button class="navbar-toggle hidden-md hidden-lg" data-toggle="collapse" data-target=".navbar-collapse-response" >
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url() . 'admin' ?>">Home</a></li>
        <li><a href="<?php echo base_url() . 'admin/recuperaSobre' ?>">Sobre</a></li>
        <li><a href="<?php echo base_url() . 'admin/recuperaTrabalho' ?>">Trabalho</a></li>
        <li><a href="<?php echo base_url() . 'admin/recuperaFormacao' ?>">Formação</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <a href="<?php echo base_url() . 'login/logout' ?>">
       <button class="btn btn-default navbar-btn pull-right hidden-sm hidden-xs">Sair</button></a>
      </ul>
    </div>
       <div class="navbar-collapse-response collapse pull-right col-xs-12 hidden-md hidden-lg">
        <ul class="nav">
          <li><a href="<?php echo base_url() . 'admin' ?>">Home</a></li>
          <li><a href="<?php echo base_url() . 'admin/recuperaSobre' ?>">Sobre</a></li>
          <li><a href="<?php echo base_url() . 'admin/recuperaTrabalho' ?>">Trabalho</a></li>
          <li><a href="<?php echo base_url() . 'admin/recuperaFormacao' ?>">Formação</a></li>
          <li><a href="<?php echo base_url() . 'login/logout' ?>">Sair</a></li>
        </ul>
      </div>
   </div><!--/.container-->
</nav>
<!--HEADER-->