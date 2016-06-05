<div class="container">
<?php if(!empty($carro)){ ?>
  <div class="panel panel-default" id="car">
    <!-- Default panel contents -->
    <div class="panel-heading" id="panel-heading"><span class="glyphicon glyphicon-road"></span>&nbsp; Carro </div>
    <div class="panel-body">
      <!-- Table carro-->
      <table class="table">
        <tr>
         <td><b>Placa:</b></td> 
         <td><?php echo $carro['placa']; ?></td>
       </tr>
       <tr>
        <td><b>Cor:</b></td> 
        <td><?php echo $carro['cor']; ?></td>
      </tr> 
      <tr>
        <td><b>Modelo:</b></td> 
        <td><?php  echo $carro['modelo']; ?></td>
      </tr> 
      <tr>
        <td><b>Marca:</b></td> 
        <td><?php  echo $carro['marca']; ?></td>
      </tr> 
      <tr>
        <td><b>Ano:</b></td> 
        <td><?php  echo $carro['ano']; ?></td>
      </tr>
    </table>
  </div>
</div>

<div class="panel panel-default" id="prop">
  <!-- Default panel contents -->
  <div class="panel-heading" id="panel-heading"><span class="glyphicon glyphicon-user"></span>&nbsp;Proprietário</div>
  <div class="panel-body">

    <!-- Table proprietario-->
    <table class="table">
     <tr>
      <td><b>Nome:</b></td> 
      <td><?php echo $proprietario['nome']; ?></td>
    </tr>
    <tr>
      <td><b>Sobrenome:</b></td> 
      <td><?php echo $proprietario['sobrenome']; ?></td>
    </tr> 
    <tr>
      <td><b>CPF:</b></td> 
      <td><?php echo $proprietario['cpf']; ?></td>
    </tr> 
    <tr>
      <td><b>Data de Nascimento:</b></td> 
      <td><?php echo $proprietario['dt_nasc']; ?></td>
    </tr> 
    <tr>
      <td><b>Sexo:</b></td> 
      <td><?php echo $proprietario['sexo']; ?></td>
    </tr>
  </table>
</div>
<?php } else{ ?>
<center>
<div class="panel panel-default" id="welcome">
    <!-- Default panel contents -->
    <div class="panel-heading" id="panel-heading"><h3>Digite a placa na URL&nbsp;<span class="glyphicon glyphicon-search"></span></h3><br><p style="text-align:justify;"><b>Trabalho desenvolvido por:<b><br>Guilherme Brasile<br>Romildo Alves</p></div>
</div>
</center>
<?php }  ?>
</div>

</div><!--FECHAMENTO CONTAINER-->
