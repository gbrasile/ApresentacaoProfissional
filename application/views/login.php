<div class="sobre-desktop">
  <div class="row">

      <div class="col-md-10">
        <div align="center" class="panel panel-default panel-sobre">
          <div class="panel-body">
            <img align="right" width="80" height="80" src="<?php echo base_url() . 'assets/img/icons/login.png' ?>">
            <h2 align="left"><u>LOGIN</u></h2><br>
            <?php  
            echo validation_errors(); ?>
  
            <?php echo form_open('login/logar', 'role="form" class="formsignin"'); ?>
            <!-- <form name="formulario" action="<?php //echo base_url() . 'login/autenticar' ?>" method="post"> -->

            <div class="form-group">
              <label for="exampleInputEmail1">Usuário:</label>
              <input type="text" name="usuario" class="form-control" placeholder="Usuario">
            </div>

            <div class="form-group">
              <label align="left" for="exampleInputEmail1">Senha:</label>
              <input type="password" name="senha" class="form-control" placeholder="Senha">
            </div>

            <!--<button type="submit" value="Enviar" class="btn btn-default">Enviar</button>-->
            <?php echo form_submit('submit', 'Entrar', 'class="btn btn-default"'); ?>
            <button type="reset" value="limpar formulario" class="btn btn-default">Limpar</button>
            <? if(!empty($erro)){ ?>
              <div class="alert alert-danger" role="alert" style=" margin-top: 10px;">
               <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;<?= $erro; ?></div>
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

