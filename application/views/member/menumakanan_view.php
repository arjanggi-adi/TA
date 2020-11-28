<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Monitoring Atlet | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/adminlte/'); ?>dist/css/skins/_all-skins.min.css">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>M</b>A</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Monitoring</b>Atlet</span>
        </a>
       
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?= strtoupper($atlet)?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <?php $this->load->view('member/main_menu', '', false); ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Menu Makanan
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
           <div class="row" id="load_makanan">      
            </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2020 <a href="#">monitoring atlet</a>.</strong> All rights reserved.
      </footer>

      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
    <script src="<?php echo base_url(); ?>assets/components/jquery.min.js"></script>
    <script src="<?= base_url('assets/adminlte/'); ?>bootstrap/js/bootstrap.min.js"></script>
    
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/adminlte/'); ?>dist/js/app.min.js"></script>
    <script src="<?= base_url('assets/adminlte/'); ?>dist/js/demo.js"></script>

    <script>
      base_url = "<?php echo base_url(); ?>";

      $(document).on("ready", function() {
        daftarmenumakanan();
        return false;
          
      });

      function daftarmenumakanan(){
        $.getJSON(base_url+"member/menumakanan/daftarmenu", function(data) {
          console.log(data);
              $("#load_makanan").show('slow');
                  if (data.q_stat == "kosong") {
                      html = '<p style="margin-left : 15px;">Belum ada makanan yang bisa dipilih.</p>';
                  } else {
                      var i = 1;
                      html = '';
                      $.each(data.data, function(k, v) {
                          html += '<div class="col-lg-4"><div class="box"><div class="box-header with-border text-center"><h3 class="box-title">'+v.nama+'</h3></div><div class="box-body"><div class="row"><div class="col-md-6"><p>protein : '+v.protein+'</p><p>lemak : '+v.lemak+'</p><p>karbohidrat : '+v.karbohidrat+'</p></div><div class="col-md-6"><p>sodium : '+v.sodium+'</p><p>pufa : '+v.pufa+'</p><p>kolestrol : '+v.kolestrol+'</p></div></div></div><div class="box-footer text-center">'+v.link+'</div></div></div>';
                          i++;
                      }); 
                  }
                  $("#load_makanan").html(html);
              });

          return false;
      }

      function tambahmakan(id) {
          $.ajax({
            type: "GET",
            url: base_url+"member/menumakanan/aksi/"+id+"/add",
            success: function(data) {
              daftarmenumakanan();
            }
          });        

          return false;
      }

      function hapusmakan(id) {
        aksi = 'dell';
          $.ajax({
            type: "GET",
            url: base_url+"member/menumakanan/aksi/"+id+"/dell",
            success: function(data) {
              daftarmenumakanan();
            }
          });        

          return false;
      }

  </script>

  </body>
</html>