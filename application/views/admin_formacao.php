<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title><?php echo $this->lang->line('system_system_name'); ?></title>
      
      <!-- Bootstrap core CSS -->     
      <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
      
      <!-- Bootstrap theme -->
      <link href="<?php echo base_url ('bootstrap/css/bootstrap-theme.min.css');?>" rel="stylesheet">
      
      <!-- Custom styles for this template -->
      <link href="<?php echo base_url ('bootstrap/css/theme.css');?>" rel="stylesheet">
      
      <!-- Custom styles for app specific stuff -->
      <link href="<?php echo base_url ('assets/css/table.css');?>" rel="stylesheet">
      <link href="<?php echo base_url ('assets/css/layout.css');?>" rel="stylesheet">
      <link href="<?php echo base_url ('assets/css/main_nav.css');?>" rel="stylesheet">
      <link href="<?php echo base_url ('assets/css/dashboard.css');?>" rel="stylesheet">
      <link href="<?php echo base_url ('assets/css/tablesorter/blue/style.css');?>" rel="stylesheet">
      
      <script src="<?php echo base_url('assets/js/jquery/jquery.js');?>"></script>
      <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?>"></script> 
      <script src="<?php echo base_url('assets/js/jquery/jquery.tablesorter.min.js');?>"></script>

      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    
    <body role="document">
    <div class="container">
    <!-- END header.php -->
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
<div class="sobre-desktop">
  <div class="row">

      <div class="col-md-10">
        <div align="center" class="panel panel-default panel-sobre">
          <div class="panel-body">
            <img class="hidden-md hidden-lg" width="80" height="80" align="center"  src="<?php echo base_url() . 'assets/img/icons/coding.png' ?>">
            <img class="hidden-sm hidden-xs" align="right" width="80" height="80" src="<?php echo base_url() . 'assets/img/icons/coding.png' ?>">
            <h2 class="hidden-md hidden-lg" align="center"><u>ATUALIZA FORMAÇÂO</u></h2><br>
            <h2 class="hidden-sm hidden-xs" align="left"><u>ATUALIZA FORMAÇÂO</u></h2><br>
            

             <form name="formulario" method="post" action="<? echo base_url(). 'admin/insereFormacao' ?>">
            <div class="form-group">
              <label align="left" for="exampleInputEmail1">Edição HTML - Bootstrap:*</label>
              <textarea name="conteudo" rows="35" cols="60" class="form-control" placeholder="Conteúdo"></textarea>
            </div>

            <button type="submit" value="Enviar" class="btn btn-default">Enviar</button>
            <button type="reset" value="limpar formulario" class="btn btn-default">Limpar</button>
            
           </form>
           

          </div>
        </div>
      </div>


    </div>
</div>

