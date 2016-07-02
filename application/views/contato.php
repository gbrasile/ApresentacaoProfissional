<div class="sobre-desktop">
  <div class="row">

      <div class="col-md-10">
        <div align="center" class="panel panel-default panel-sobre">
          <div class="panel-body">
            <img class="hidden-md hidden-lg" width="80" height="80" align="center"  src="<?php echo base_url() . 'assets/img/icons/contact.png' ?>">
            <img class="hidden-sm hidden-xs" align="right" width="80" height="80" src="<?php echo base_url() . 'assets/img/icons/contact.png' ?>">
            <h2 class="hidden-md hidden-lg" align="center"><u>CONTATO</u></h2><br>
            <h2 class="hidden-sm hidden-xs" align="left"><u>CONTATO</u></h2><br>
             <?php  
            echo validation_errors(); ?>
  
            <?php echo form_open('contato/enviar', 'role="form" class="formsignin"'); ?>
            <!-- <form name="formulario" action="" method="post"> -->

            <div class="form-group">
              <label for="exampleInputEmail1">Nome:*</label>
              <input type="text" name="nome" class="form-control" placeholder="Nome">
            </div>

            <div class="form-group">
              <label align="left" for="exampleInputEmail1">E-mail:*</label>
              <input type="text" name="email" class="form-control" placeholder="E-mail">
            </div>

            <div class="form-group">
              <label align="left" for="exampleInputEmail1">Mensagem:*</label>
              <textarea name="mensagem" rows="10" cols="60" class="form-control" placeholder="Mensagem"></textarea>
            </div>

            <button type="submit" value="Enviar" class="btn btn-default">Enviar</button>
            <button type="reset" value="limpar formulario" class="btn btn-default">Limpar</button>
             <? if(!empty($mensagem)){ ?>
              <div class="alert alert-success" role="alert" style=" margin-top: 10px;">
              <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<?= $mensagem; ?></div>
             <? 
              } 
            ?>
            
             <!-- </form> -->
            <?php form_close(); ?>
           

          </div>
        </div>
      </div>


    </div>
</div>

