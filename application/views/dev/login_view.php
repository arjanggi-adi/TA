<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Monitoring Atlet | Admin Login</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.2 -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome Icons -->
  <link href="<?= base_url(); ?>assets/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="<?= base_url(); ?>assets/adminlte/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="<?= base_url(); ?>"><b>Admin</b> Login</a>
    </div><!-- /.login-logo -->

    <div class="login-box-body">
      <p class="login-box-msg">
        <h4><b>Silahkan Login Admin</b></h4>
      </p>
      <?php
      echo validation_errors('<div class="alert alert-danger"><button class="close" data-dismiss="alert" type="button">×</button>', '</div>');
      echo $this->session->flashdata('msg');
      echo form_open('dev/access/validasi');
      ?>
      <div class="form-group has-feedback">
        <input type="text" name="usermail" class="form-control" placeholder="Email" autofocus="" value="<?php echo set_value('usermail'); ?>" />
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="userpass" class="form-control" placeholder="Password" value="<?php echo set_value('userpass'); ?>" />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div><!-- /.col -->
      </div>
      <?php echo form_close(); ?>
    </div><!-- /.login-box-body -->

  </div><!-- /.login-box -->

  <!-- jQuery 2.1.3 -->
</body>

</html>
<?php
