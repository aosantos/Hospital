<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Controle de Pacientes </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>O</b>LI</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Controle </b>&nbsp;Pacientes</span>
    </a>
   
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
  
        </div>
        <div class="pull-left info">
          <p></p>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
       <ul class="sidebar-menu">
        <li>
          <a href="<?php echo base_url() ?>home">
            <i class="fa fa-home"></i> <span>HOME</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red"></small>
            </span>
          </a>
        </li>
       
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Paciente
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url() ?>home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url() ?>home">Pacientes</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista De Pacientes</h3>
              <?php if ($this->session->flashdata('erro')) { ?>
                  <div class="alert alert-danger">
                      <?= $this->session->flashdata('erro') ?>
                  </div>
                  <?php if (validation_errors()) { ?>
                      <div class="alert alert-danger">
                      <?= validation_errors() ?>
                      </div>
                      <?php } ?>
              <?php } ?>
              
            </div>
              <div class="box">
            <div class="box-header">              
              <?php if ($this->session->flashdata('erro2')) { ?>
                  <div class="alert alert-danger">
                      <?= $this->session->flashdata('erro2') ?>
                  </div>
                  <?php if (validation_errors()) { ?>
                      <div class="alert alert-danger">
                      <?= validation_errors() ?>
                      </div>
                      <?php } ?>
              <?php } ?>
              
            </div>
              <div class="container">
  <!-- Modal -->
  <div class="modal fade" id="cadastrar_diretor" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:green;"><span class="glyphicon glyphicon-lock"></span> Cadastrar Pacientes</h4>
        </div>
          
        <div class="modal-body">
          <form action='<?php echo base_url() ?>cadastrar' method='POST' method="get" role="form">
              <form method="get" action=".">
            <div class="form-group">
              <label for="data">Data</label>
              <input type="date" name="data"  required="" class="form-control" id="data" placeholder="Data ">
            </div>
               <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" name="nome" required="" class="form-control" id="nome" placeholder="Nome ">
            </div>
              <div class="form-group">
              <label for="nome">Email</label>
              <input type="text" name="email" required="" class="form-control" id="email" placeholder="Email ">
            </div>
            <div class="form-group">
              <label for="nome_mae">Nome da Mãe</label>
              <input type="text" name="nome_mae" required="" class="form-control" id="nome_mae" placeholder="Mãe ">
            </div>
            <div class="form-group">
              <label for="nome_pai">Nome do Pai</label>
              <input type="text" name="nome_pai" required="" class="form-control" id="nome_pai" placeholder="Pai ">
            </div>
             <div class="form-group">
              <label for="rua">Rua</label>
              <input type="text" name="rua" required="" class="form-control" id="rua" placeholder="Rua ">
            </div>
            <div class="form-group">
              <label for="nome_bairro">Bairro</label>
              <input type="text" name="nome_bairro" required="" class="form-control" id="nome_bairro" placeholder="Bairro ">
            </div>
            <div class="form-group">
              <label for="status">Status</label>
                    <select class="form-control select2" style="width: 100%;"  name='status' id='status'>
                                  <option name="status" value=" 1">Ativo</option>
                                  <option name="status" value=" 0">Inativo</option>                                  
                    </select>
            </div>
            <button style="color:white;" type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-plus"></span> Cadastrar</button>
          </form>
        </div>
       
      </div>
    </div>
  </div> 
</div>
              <?php foreach ($lista as  $list):?>
              <div class="modal fade" id="editar_<?= $list['id']  ?>" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:green;"><span class="glyphicon glyphicon-lock"></span> Cadastrar Pacientes</h4>
        </div>
          
        <div class="modal-body">
          <form action='<?php echo base_url() ?>editar' method='POST' method="get" role="form">
           <input type="hidden" id="id" name="id" value="<?= $list['id'];?>" >
              <form method="get" action=".">
         <div class="form-group">
              <label for="data">Data</label>
              <input type="date" name="data" value="<?= date('d/m/Y', strtotime($list['data'])) ?>"  required="" class="form-control" id="data" placeholder="Data ">
            </div>
               <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" name="nome" required="" value="<?= $list['nome'];?>" class="form-control" id="nome" placeholder="Nome ">
            </div>
              <div class="form-group">
              <label for="nome">Email</label>
              <input type="text" name="email" required="" value="<?= $list['email'];?>" class="form-control" id="email" placeholder="Email ">
            </div>
            <div class="form-group">
              <label for="nome_mae">Nome da Mãe</label>
              <input type="text" name="nome_mae" required="" value="<?= $list['nome_mae'];?>" class="form-control" id="nome_mae" placeholder="Mãe ">
            </div>
            <div class="form-group">
              <label for="nome_pai">Nome do Pai</label>
              <input type="text" name="nome_pai" required="" value="<?= $list['nome_pai'];?>" class="form-control" id="nome_pai" placeholder="Pai ">
            </div>
            <div class="form-group">
              <label for="rua">Rua</label>
              <input type="text" name="rua" required="" value="<?= $list['rua'];?>"  class="form-control" id="rua" placeholder="Rua ">
            </div>
            <div class="form-group">
              <label for="nome_bairro">Bairro</label>
              <input type="text" name="nome_bairro" required="" value="<?= $list['nome_bairro'];?>" class="form-control" id="nome_bairro" placeholder="Bairro ">
            </div>      
            <div class="form-group">
              <label for="status">Status</label>
                    <select class="form-control select2" style="width: 100%;"  name='status' id='status'>
                                 <option name="status" value="1">Ativo</option>
                                 <option name="status" value="0">Inativo</option>                                  
                    </select>
            </div>   
            <button style="color:white;" type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-plus"></span> Cadastrar</button>
          </form>
        </div>
       
      </div>
    </div>
  </div> 
  <?php endforeach; ?>
<!-- Buttons -->

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Data</th>
                  <th>Nome</th>
                  <th>Mãe</th>
                  <th>Pai</th>
                  
                  <th>Status</th>
                  <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                    
                <?php
              foreach ($lista as $list):              
                       ?> 
                    <tr class="<?php ?>" id="odd_gradeX_" data-id="">
                     <td><?= date('d/m/Y', strtotime($list['data'])) ?></td>
                     <td><?= $list['nome']; ?></td>
                     <td><?= $list['nome_mae'];  ?></td>
                     <td><?= $list['nome_pai'];  ?></td>
                     
                     <td><?php
                          $situacao =  $list['status'];
                         if($situacao == 1)
                         {
                         echo $situacao = "Ativo";
                         }
                         else{
                         echo $situacao = "Inativo";
                         }                         
                         ?>
                     </td>                
                             
                
<!-- Modal -->
                  
<td>
    
<button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#editar_<?php echo $list['id'] ?>">
    <span class="glyphicon glyphicon-edit"></span> 
</button>
<button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#remover_<?php echo $list['id'] ?>">
    <span class="glyphicon glyphicon-trash"></span> 
</button>    
</td>             
    <div class="modal fade" id="remover_<?php echo $list['id']; ?>" role="dialog">
                                  <input type="hidden" name="id"  value="<?php echo $list['id']; ?>">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 style="color:red;">Apagar Paciente (<?php echo $list['nome'] ?>) </h4>
                                        </div>          
                                        <div class="modal-body">
                                            <form method="get" action=".">
                                                <h4 style="color:#161517;" align="center">Remover o Paciente(<?php echo $list['nome']; ?>)</h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
                                            <a href="<?= base_url('remover/'.$list['id']);  ?>" class="btn btn-danger " data-click="panel-exclude" data-toggle="modal">Excluir</a>                                          
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>             
                </tr>
    <?php
    endforeach;
?>      

                 </tbody>
                <tfoot>
               </tfoot>
              </table>
                <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#cadastrar_diretor">Cadastrar Pacientes</button>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versão</b>1.0
    </div>
    <strong>Copyright &copy; 2017-<?php echo date('Y') ?> <a href="">Controle de Pacientes</a>.</strong>Todos direitos
    reservados.
  </footer>
<div class="control-sidebar-bg"></div>
</div>

<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>

<script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script src="<?php echo base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>

<script src="<?php echo base_url()?>assets/plugins/fastclick/fastclick.js"></script>

<script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>

<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
